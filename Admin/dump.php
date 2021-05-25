<?php
require_once '../Database/db.php';
$target_dir = "../assets/img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Kiểm tra xem tệp hình ảnh là hình ảnh thực tế hay hình ảnh giả mạo
if(isset($_POST["submit-upl"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "Tệp là một hình ảnh - " . $check["mime"] . ".";
    header("location: admin_libimg.php");
    $uploadOk = 1;
  } else {
    echo "Tệp không phải là hình ảnh.";
    $uploadOk = 0;
  }
}

// Kiểm tra kích thước tệp
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Xin lỗi, tệp của bạn quá lớn.";
  $uploadOk = 0;
}

// Kiểm tra xem $uploadOk có được đặt thành 0 do lỗi không?
if ($uploadOk == 0) {
  echo "Xin lỗi, tệp của bạn không được tải lên.";
// nếu mọi thứ đều ổn, thử tải tệp lên
} else {
  $img_up ="";
  $ma_nt = $_POST['list_name'];
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $img_up = "assets/img/".$_FILES["fileToUpload"]["name"];
    $sql = "INSERT INTO `hinh_noithat`(`ma_noi_that`,`hinh`) VALUES ('$ma_nt','$img_up')";
    $result = mysqli_query($conn,$sql);
  } else {
    echo "Xin lỗi, đã xảy ra lỗi khi tải tệp của bạn lên.";
  }
}
?>