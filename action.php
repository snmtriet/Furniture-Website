<?php 
session_start();
require_once "Database/db.php";
if (!isset($_SESSION["cart"])) {
  $_SESSION["cart"] = array();
} 
if($_GET["action"]){
  function update_cart($conn,$add = false) {
    $changeQuantity = false;
    foreach ($_POST['quantity'] as $id => $quantity) {
        if ($quantity == 0) {
            unset($_SESSION["cart"][$id]);
        } else {
            if ($add) {
                $_SESSION["cart"][$id] += $quantity;
            } else {
                $_SESSION["cart"][$id] = $quantity;
            }
           //Kiểm tra số lượng sản phẩm tồn kho
           $addProduct = mysqli_query($conn, "SELECT `quantity` FROM `noi_that` WHERE `ma_noi_that` = " . $id);
           $addProduct = mysqli_fetch_assoc($addProduct);
           if ($_SESSION["cart"][$id] > $addProduct['quantity']) {
               $_SESSION["cart"][$id] = $addProduct['quantity'];
               if ($add) {
                   return array(
                       'status' => 0,
                       'message' => "Số lượng sản phẩm tồn kho chỉ còn: " . $addProduct['quantity'] . " sản phẩm. Bạn vui lòng kiểm tra lại giỏ hàng."
                   );
               } else {
                   $changeQuantity = true;
               }
           }
           if ($add) {
               return array(
                   'status' => 1,
                   'message' => "Thêm sản phẩm thành công"
               );
           }
       }
   }
   if ($changeQuantity) {
       return array(
           'status' => 1,
           'message' => "Số lượng sản phẩm trong giỏ hàng đã thay đổi do số lượng tồn kho không đủ. Bạn vui lòng kiểm tra lại giỏ hàng"
       );
   }else{
       return array(
           'status' => 1,
           'message' => "Cập nhật giỏ hàng thành công"
       );
   }
}
switch ($_GET['action']) {
  case "add":
        $result = update_cart($conn,true);
        echo json_encode($result);
        break;
  case "update":
        $result = update_cart($conn);
        echo json_encode($result);
        break;
  case "delete":
        if (isset($_POST['id'])) {
            unset($_SESSION["cart"][$_POST['id']]);
        }
        echo json_encode(array(
          'status' => 1,
          'message' => "Xóa sản phẩm thành công"
        ));
        break;
  case "register" :
    $error = false;
      if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
      $fullname = $_POST['fullname'];
      $username =$_POST["username"];
      $password = $_POST["password"];
      $email = $_POST["email"];
      $phone = $_POST["phone"];
      $password = password_hash($password, PASSWORD_DEFAULT); // MA HOA PASSWORD
      $result = mysqli_query($conn, "INSERT INTO `users` (`fullname`,`username`, `password`,`email`,`phone`) VALUES ('$fullname', '$username','$password','$email','$phone');");
      if (!$result) {
          if (strpos(mysqli_error($conn), "Duplicate entry") !== FALSE) { //strpos - Tìm vị trí xuất hiện đầu tiên của một chuỗi con trong một chuỗi
              echo json_encode(array(
                  'status' => 0,
                  'message' => 'Tên đăng nhập đã tồn tại'
              ));
              exit;
          }
      }
      mysqli_close($conn);
      if ($error !== false) {
          echo json_encode(array(
              'status' => 0,
              'message' => 'Có lỗi khi đăng ký, xin mời thử lại'
          ));
          exit;
      } else {
          echo json_encode(array(
              'status' => 1,
              'message' => 'Đăng ký thành công'
          ));
          exit;
      }
      ?>
      <?php
      } else {
      echo json_encode(array(
          'status' => 0,
          'message' => 'Bạn chưa nhập thông tin'
      ));
      exit;
    }
    break;
  case "login":
    if (empty($_POST["username"]) || empty($_POST["password"])) {
      // echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
      exit;
    }else{
      $username = $_POST["username"];
      $passwordi = $_POST["password"];
      $query = "SELECT * FROM users where username = '{$username}'";
      $result = mysqli_query($conn,$query);
      //kiem tra password nhap vao voi password da ma hoa
      foreach($result as $value){
        $password = $value["password"];
        $name = $value["fullname"];
        $level = $value["level"];
      }
      $dem = mysqli_num_rows($result);
      if($dem > 0){
        if(password_verify($passwordi, $password)){
          if($level == 1){
            $_SESSION["password"] = $password;
            $_SESSION["admin"] = $name;
            $cookie_name = $name;
            setcookie("admin",$cookie_name);
            echo json_encode(array(
              'status' => 1,
              'message' => 'đăng nhập đúng'
            ));exit();
            header("location: index.php");
          }else if($level == 0){
            $_SESSION["password"] = $password ;
            $_SESSION["user"] = $name;
            $cookie_name = $name;
            setcookie("user",$cookie_name);
            echo json_encode(array(
              'status' => 1,
              'message' => 'đăng nhập đúng'
            ));exit();
            header("location: index.php");
          }
        }else {
          echo json_encode(array(
            'status' => 0,
            'message' => 'Thông tin đăng nhập không đúng'
          ));exit();
        }
    }else {
      echo json_encode(array(
        'status' => 0,
        'message' => 'Thông tin đăng nhập không đúng'
      ));exit();
    }
    }
    break;
  case "logout":
    if(isset($_SESSION["user"])){
      header("location:index.php");
      unset($_SESSION["user"]);
  }else if($_SESSION["admin"]){
      unset($_SESSION["admin"]);
      header("location:index.php");
  }
    break;
  case "checkUsername" :
    $checkUser = $_GET["username"];
    $result =  mysqli_query($conn, "SELECT * FROM `users` WHERE `username` LIKE '$checkUser'");
    if($result !== false && $result->num_rows > 0) {
      echo json_encode(false);
    }else {
      echo json_encode(true);
    }
    break;
    case "checkEmail" :
      $checkEmail = $_GET["email"];
      $result =  mysqli_query($conn, "SELECT * FROM `users` WHERE `email` LIKE '$checkEmail'");
      if($result !== false && $result->num_rows > 0) {
        echo json_encode(false);
      }else {
        echo json_encode(true);
      }
    break;
  case "checkQuantity" :
    $id = (array_keys($_POST['quantity']))[0];
    $quantity = $_POST['quantity'][$id];
    //Kiểm tra số lượng sản phẩm tồn kho
    $addProduct = mysqli_query($conn, "SELECT `quantity` FROM `noi_that` WHERE `ma_noi_that` = " . $id);
    $addProduct = mysqli_fetch_assoc($addProduct);
    if(isset($_SESSION["cart"][$id])){
        $quantity += $_SESSION["cart"][$id];
    }
    if ($quantity > $addProduct['quantity']) {
        echo json_encode("Số lượng tồn kho chỉ còn: " . $addProduct['quantity']."");
    }else{
        echo json_encode(true);
    }
    break;
  case "search" :
    $name = $_POST["name"];
    if($name != ''){
    $sql = "SELECT * FROM `noi_that` WHERE `ten_noi_that` LIKE '%".$name."%'
    or `gia_noi_that` LIKE '%".$name."%'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if($num > 0){
      while($row = mysqli_fetch_array($result)) { ?>
            <div class="content__search">
                  <div class="content__search-name">
                    <a href="#"><?= $row['ten_noi_that']?></a>
                    <span><?= number_format($row['gia_noi_that'])?>đ</span>
                  </div>
                  <div class="content__search-img">
                    <a href="detail.php?id=<?= $row['ma_noi_that']?>">
                    <?php
                    $id_hinh =  $row['ma_noi_that'];
                    $sql = "SELECT * FROM hinh_noithat where ma_noi_that =  $id_hinh";
                    $imgProduct = mysqli_query($conn,$sql);
                    foreach($imgProduct as $rows) { ?>
                        <img src="<?= $rows['hinh']?>">
                        <?php } ?>
                    </a>
                  </div>
            </div>
<?php 
      }
    }
  }
    break;
    case "checkout":
      if(empty($_SESSION["cart"])){
        echo json_encode(array(
            'status' => 0,
            'message' => "Giỏ hàng rỗng. Bạn vui lòng lựa chọn sản phẩm vào giỏ hàng."
        ));exit;
    }
    $products = mysqli_query($conn, "SELECT * FROM `noi_that` WHERE `ma_noi_that` IN (" . implode(",", array_keys($_SESSION["cart"])) . ")");
    $total = 0;
    $orderProducts = array();
    $updateString = "";
    $changeQuantity = false;
    while ($row = mysqli_fetch_array($products)) {
        $orderProducts[] = $row;
        if ($_SESSION["cart"][$row['ma_noi_that']] > $row['quantity']) { //Thay đổi số lượng sản phẩm trong giỏ hàng
            $_SESSION["cart"][$row['ma_noi_that']] = $row['quantity'];
            $changeQuantity = true;
        } else {
            $total += $row['gia_noi_that'] * $_SESSION["cart"][$row['ma_noi_that']];
            $updateString .= " when ma_noi_that = " . $row['ma_noi_that'] . " then quantity - " . $_SESSION["cart"][$row['ma_noi_that']]; //Trừ đi sản phẩm tồn kho
        }
      }
    if ($changeQuantity == false) {
        $updateQuantity = mysqli_query($conn, "update `noi_that` set quantity = CASE" . $updateString . " END where ma_noi_that in (" . implode(",", array_keys($_SESSION["cart"])) . ")");
        $insertOrder = mysqli_query($conn, "INSERT INTO `orders` (`id`, `name`, `phone`, `address`, `note`, `total`, `created_time`, `last_updated`) VALUES (NULL, '" . $_POST['checkout_name'] . "', '" . $_POST['checkout_phone'] . "', '" . $_POST['checkout_address'] . "', '" . $_POST['checkout_note'] . "', '" . $total . "', '" . time() . "', '" . time() . "');");
        $orderID = $conn->insert_id;
        $insertString = "";
        foreach ($orderProducts as $key => $product) {
            $insertString .= "(NULL, '" . $orderID . "', '" . $product['ma_noi_that'] . "', '" . $_SESSION["cart"][$product['ma_noi_that']] . "', '" . $product['gia_noi_that'] . "', '" . time() . "', '" . time() . "')";
            if ($key != count($orderProducts) - 1) {
                $insertString .= ",";
            }
        }
        $insertOrder = mysqli_query($conn, "INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_time`, `last_updated`) VALUES " . $insertString . ";");
        unset($_SESSION['cart']);
        echo json_encode(array(
            'status' => 1,
            'message' => "Đặt hàng thành công."
        ));
    } else {
        echo json_encode(array(
            'status' => 0,
            'message' => "Đặt hàng không thành công do số lượng sản phẩm tồn kho không đủ. Bạn vui lòng kiểm tra lại giỏ hàng"
        ));
    }
      break;
    case "checkLoginCart":
        if(isset($_SESSION["admin"]) or isset($_SESSION["user"])){
          echo json_encode(array(
            'status' => 1,
            'message' => 'Đã đăng nhập'
          ));
        }else{
          echo json_encode(array(
            'status' => 0,
            'message' => 'Bạn chưa đăng nhập'
          ));
        }
      break;
    case "deleteallCart":
      unset($_SESSION["cart"]);
      break;
  }
} 
?>
