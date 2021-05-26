<div class="container__body">
<?php
session_start(); 
require_once "Database/db.php"; ?>
<div class="testthu">
<div class="overlay" id="overlayID"></div>
    <div class="registerForm">
    <form id="registerForm" method="POST">
    <div class="login__form" id="form__register">
        <div class="site_account_title">
            <h2>Đăng ký tài khoản</h2>
            <p>Điền đẩy đủ thông tin để đăng ký</p>
        </div>
        <div class="closeLogoutform">
            <i class="fas fa-times"></i>
        </div>
        <div class="form__input-wrapper">
            <input type="text" id="customer-fullName" name="fullname" class="form__field">
            <label id="labelfullName" class="form__floating-label" for="login-customer[username]">Họ và tên</label>
        </div>
        
        <div class="form__input-wrapper">
            <input type="text" id="customer-User" name="username" class="form__field">
            <label id="labelUser" class="form__floating-label" for="login-customer[username]">Tài khoản</label>
        </div>
        <div class="form__input-wrapper">
            <input type="password" id="customer-Pass" name="password" class="form__field">
            <label id="labelPass" class="form__floating-label" for="login-customer[password]">Mật khẩu</label>
        </div>
        <div class="form__input-wrapper">
            <input type="password" id="customer-Repassword" name="repassword" class="form__field">
            <label id="labelRepass" class="form__floating-label" for="login-customer[password]">Nhập lại mật khẩu</label>
        </div>
        <div class="form__input-wrapper">
            <input type="text" id="customer-Email" name="email" class="form__field">
            <label id="labelEmail" class="form__floating-label" for="login-customer[username]">Email</label>
        </div>
        <div class="form__input-wrapper">
            <input type="text" id="customer-Phone" name="phone" class="form__field">
            <label id="labelPhone" class="form__floating-label" for="login-customer[username]">Số điện thoại</label>
        </div>
        <div class="sitebox__recaptcha">
            <p>This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy">Privacy Policy</a> and <a href="https://policies.google.com/terms">Terms of Service</a> apply.</p>
        </div>
        <button type="submit" name="register-btn" class="form__submit">Đăng ký</button>
        <p id="messageShow"></p>
    </div>
    </form>
    </div>
    <div class="main">
        <header class="header" id="header-in-cart">
            <div class="header__top">
                <p class="header__top-slogan">Trang mua hàng nội thất trực tuyến chính hãng!</p>
            </div>
            <div class="header__mid">
                <input class="hello" hidden type="checkbox" id="checkbox-nav">
                <div class="bars">
                    <label class="check-bars" for="checkbox-nav"><i id="click-bars" class=" fas fa-bars"></i></label>
                </div>
                <div class="navbar-rpsive">
                    <ul>
                        <li> <a href="index.php"> TRANG CHỦ </a></li>
                        <li> <a href="index.php"> SẢN PHẨM </a></li>
                        <li> <a href="#"> BLOG </a></li>
                        <li> <a href="#"> PRODUCT VIEW </a></li>
                        <li> <a href="contact.php"> LIÊN HỆ </a></li>
                        <li> <a href="recommend.php"> GIỚI THIỆU </a></li>
                    </ul>
                </div>
                <div class="header__mid-left">
                    <div class="header__mid-left-name">
                        <a class="header__mid-left-link" href="index.php">Furniture</a>
                    </div>
                    <div class="header__mid-left-search">
                        <div class="header__mid-left-iconinput">
                            <input class="header__mid-left-input" type="text" placeholder="Tìm kiếm sản phẩm...">
                            <i class="header__mid-icon fas fa-search"></i>
                        </div>
                        <div class="result_search"></div>
                    </div>
                </div>

                <div class="header__mid-right">
                    <div class="header__mid-right-hotline header__mid-box-icon">
                        <div class="header__mid-right-icon">
                            <svg class="header__mid-right-icon-item svg-ico-hotline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><g><path d="m123.832031 475.464844c39.558594 23.804687 84.789063 36.351562 131.261719 36.351562 140.824219 0 256.90625-114.914062 256.90625-255.910156 0-140.832031-115.917969-255.90625-256.90625-255.90625-140.558594 0-254.910156 114.800781-254.910156 255.90625 0 47.09375 12.550781 92.667969 36.351562 132.257812l-36.535156 123.835938zm-93.65625-219.558594c0-124.570312 100.898438-225.917969 224.917969-225.917969 125.121094 0 226.917969 101.347657 226.917969 225.917969 0 124.574219-101.796875 225.917969-226.917969 225.917969-43.054688 0-84.894531-12.195313-120.984375-35.273438l-5.765625-3.683593-83.988281 24.78125 24.777343-83.992188-3.683593-5.761719c-23.078125-36.097656-35.273438-78.277343-35.273438-121.988281zm0 0" data-original="#000000" class="active-path" data-old_color="#000000"></path><path d="m124.628906 208.753906c4.953125 26.011719 19.65625 76.042969 62.464844 118.851563 42.808594 42.808593 92.839844 57.515625 118.855469 62.46875 29.789062 5.671875 73.503906 6.527343 94.867187-14.835938l11.910156-11.910156c6.011719-6.011719 9.324219-14.007813 9.324219-22.511719s-3.3125-16.496094-9.324219-22.507812l-47.628906-47.628906c-6.015625-6.015626-14.007812-9.324219-22.511718-9.324219-8.503907 0-16.496094 3.308593-22.511719 9.324219l-11.90625 11.90625c-7.273438 7.273437-21.003907 7.304687-28.332031.089843l-47.507813-49.5c-.070313-.074219-.140625-.148437-.214844-.21875-7.285156-7.285156-7.285156-19.140625 0-26.425781l11.90625-11.90625c12.445313-12.445312 12.445313-32.582031 0-45.023438l-47.628906-47.628906c-12.410156-12.410156-32.605469-12.410156-45.019531 0l-11.90625 11.910156v-.003906c-17.050782 17.054688-22.734375 53.40625-14.835938 94.875zm36.042969-73.664062c12.5-12.214844 11.832031-12.449219 13.210937-12.449219.472657 0 .945313.179687 1.304688.539063 50.1875 50.457031 48.171875 47.492187 48.171875 48.9375 0 .503906-.183594.945312-.539063 1.304687l-11.910156 11.90625c-18.964844 18.964844-19.039062 49.664063-.121094 68.714844l47.535157 49.53125c.074219.070312.144531.144531.21875.21875 18.960937 18.960937 51.808593 19.023437 70.832031 0l11.90625-11.90625c.71875-.71875 1.890625-.71875 2.609375 0 50.1875 50.453125 48.171875 47.488281 48.171875 48.933593 0 .507813-.183594.945313-.539062 1.304688l-11.910157 11.90625c-8.160156 8.160156-34.152343 13.042969-68.054687 6.585938-22.625-4.3125-66.128906-17.085938-103.257813-54.214844-37.128906-37.128906-49.902343-80.632813-54.210937-103.257813-6.460938-33.902343-1.578125-59.898437 6.582031-68.054687zm0 0" data-original="#000000" class="active-path" data-old_color="#000000"></path></g></svg>
                        </div>
                        <span id="hotline" class="header__mid_right-text">
                            Hotline:
                            <p>1900.636.099</p>
                        </span>
                    </div>
                    <div class="header__mid-right-account header__mid-box-icon">
                        <div class="header__mid-right-icon">
                            <svg class="header__mid-right-icon-item svg-ico-account" viewBox="0 0 20 22">
                                <path d="M10 13c2.82 0 5.33.64 6.98 1.2A3 3 0 0 1 19 17.02V21H1v-3.97a3 3 0 0 1 2.03-2.84A22.35 22.35 0 0 1 10 13zm0 0c-2.76 0-5-3.24-5-6V6a5 5 0 0 1 10 0v1c0 2.76-2.24 6-5 6z" stroke="currentColor" stroke-width="2" fill="none"></path>
                            </svg>
                        </div>
                        <span class="header__mid_right-text">
                            <?php if(isset($_SESSION["admin"])) {?>
                                <a id="login-form" class="login-link">
                                    <span class="Logined">Hi <?php print_r($_SESSION["admin"]) ?></span>
                                    <form class="adminlogined" id="logoutForm" action="action.php?action=logout" method="post">
                                    <button>
                                        <a class="link__admin" href="admin.php">
                                        <i class="fas fa-users-cog"></i>
                                            Quản lý
                                        </a>
                                    </button>
                                    <button type="submit">
                                        <i class="fas fa-sign-out-alt"></i>    
                                        Đăng xuất
                                    </button>
                                    </form>
                                </a>
                            <?php }else if(isset($_SESSION["user"])) {?>
                                <a id="login-form" class="login-link">
                                    <span class="Logined">Hi <?php print_r($_SESSION["user"]) ?></span>
                                    <form class="adminlogined" action="action.php?action=logout" method="post">
                                    <button type="submit">
                                        <i class="fas fa-sign-out-alt"></i>    
                                        Đăng xuất
                                    </button>
                                    </form>
                                </a>
                                <?php } else {?>
                            <a id="login-form" class="login-link">
                                Đăng nhập / Đăng ký
                                <p>Tài khoản của tôi
                                    <i class="arrow-down fas fa-chevron-down"></i>
                                </p>
                            </a>
                        <form id="loginForm"  method="POST">
                        <div class="login__form" id="form__login">
                            <div class="site_account_title">
                                <h2>Đăng nhập tài khoản</h2>
                                <p>Nhập tài khoản và mật khẩu của bạn</p>
                            </div>
                            <div class="form__input-wrapper">
                                <input type="text" id="customer-Username" name="username" class="form__field" required="required">
                                <label id="labelUsername" class="form__floating-label" for="login-customer[username]">Tài khoản</label>
                            </div>
                            <div class="form__input-wrapper">
                                <input type="password" id="customer-Password" name="password" class="form__field" required="required">
                                <label id="labelPassword" class="form__floating-label" for="login-customer[password]">Mật khẩu</label>
                            </div>
                            <div class="sitebox__recaptcha">
                                <p>This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy">Privacy Policy</a> and <a href="https://policies.google.com/terms">Terms of Service</a> apply.</p>
                            </div>
                            <button type="submit" name="btn_submit" class="form__submit">Đăng nhập</button>
                            <div class="site__account-secondary">
                                <p>Khách hàng mới? <a id="register_link">Tạo tài khoản</a></p>
                                <p>Quên mật khẩu? <a href="#">Khôi phục mật khẩu</a></p>
                            </div>
                        </div>
                        </form>
                        <?php } ?>
                        </span>
                    </div>
                    <div class="header__mid-right-cart header__mid-box-icon header__mid-cart-iconnumber">
                        <div class="cart-icon-number">
                            <div class="header__mid-right-icon">
                                <svg class="header__mid-right-icon-item svg-ico-cart" viewBox="0 0 27 24"><g transform="translate(0 1)" stroke-width="2" stroke="currentColor" fill="none" fill-rule="evenodd">
                                    <circle stroke-linecap="square" cx="11" cy="20" r="2"></circle>
                                    <circle stroke-linecap="square" cx="22" cy="20" r="2"></circle>
                                    <path d="M7.31 5h18.27l-1.44 10H9.78L6.22 0H0"></path>
                                </g>
                            </svg>
                            <?php 
                            $numinC = 0;
                            if(isset($_SESSION["cart"])){
                            require_once "Database/db.php";
                            $products = mysqli_query($conn, "SELECT * FROM `noi_that` WHERE `ma_noi_that` IN (" . implode(",", array_keys($_SESSION["cart"])) . ")");
                            if (is_array($products) || is_object($products)) {
                            foreach($products as $rows){
                                $quantity = $_SESSION["cart"][$rows['ma_noi_that']];
                                $numinC += $quantity;
                            } }} ?>
                                <span class="number-oncart" id="numberOnCart"><?php echo $numinC ?></span>
                            </div>
                        </div>
                        <span id="testload" class="header__mid_right-text">
                            <a class="link-cart" href="#">
                            Giỏ hàng
                            </a>
                <?php
                    if (!empty($_SESSION["cart"])) {
                        $products = mysqli_query($conn, "SELECT * FROM `noi_that` WHERE `ma_noi_that` IN (" . implode(",", array_keys($_SESSION["cart"])) . ")");
                    }
                ?>  
                            <div class="cart__mini">
                                <p class="title-bold">Giỏ hàng</p>
                                <div class="cart-scroll">
                                    <?php if($_SESSION["cart"]) { ?>
                                            <table id="cart-view">
                                        <?php 
                                        if (is_array($products) || is_object($products)) {
                                            $totals = 0;
                                        foreach ($products as $rows) {
                                            $quantity = $_SESSION["cart"][$rows['ma_noi_that']];
                                            $price = 0;
                                            $price = $rows["gia_noi_that"]* $quantity;
                                            $totals += $price;
                                            $id_hinh =  $rows['ma_noi_that'];
                                            $sql = "SELECT * FROM hinh_noithat where ma_noi_that =  $id_hinh";
                                            $imgProduct = mysqli_query($conn,$sql);
                                            $idHinh = 0;
                                        ?>
                                        <tr class="cart_mini_tr">
                                            <td class="cart_mini_img">
                                                <?php foreach($imgProduct as $row) { $idHinh++; ?>
                                                <a href="detail.php?id=<?php echo $rows['ma_noi_that'] ?>">
                                                    <img class="img__product-<?php echo ($idHinh)?>" src="<?php echo $row['hinh']?>">
                                                </a>
                                                <?php } ?>
                                            </td>
                                            <td class="cart_mini_name">
                                                <span><?= $rows['ten_noi_that']?></span>
                                            </td>
                                            <td class="cart_mini_name">
                                                <span>x<?= $quantity?></span>
                                            </td>
                                            <td class="cart_mini_price">
                                                <span><?= number_format($rows['gia_noi_that'])?>₫</span>
                                            </td>
                                        </tr>
                                        <?php } }?>
                                            </table>
                                    <?php }else {
                                    $_SESSION["cart"] = array();
                                    ?>
                                        <table id="cart-view" >
                                            <div class="empty_cart-mini">
                                                <svg  svg width="81" height="70" viewBox="0 0 81 70">
                                                    <g transform="translate(0 2)" stroke-width="4" stroke="#1e2d7d" fill="none" fill-rule="evenodd">
                                                        <circle stroke-linecap="square" cx="34" cy="60" r="6"></circle>
                                                        <circle stroke-linecap="square" cx="67" cy="60" r="6"></circle>
                                                        <path d="M22.9360352 15h54.8070373l-4.3391876 30H30.3387146L19.6676025 0H.99560547"></path>
                                                    </g>
                                                </svg>
                                                <p>Hiện chưa có sản phẩm</p>
                                            </div>
                                        </table>  
                                    <?php }?>
                                </div>
                                <table class="table-total">
                                    <tbody>
                                        <tr>
                                            <td class="text-left">TỔNG TIỀN:</td>
                                            <?php
                                            if ($_SESSION["cart"]) {?>
                                            <td class="text-right" id="total-view-cart"><?php echo number_format($totals);?>₫</td>
                                            <?php }else { ?>
                                            <td class="text-right" id="total-view-cart">0₫</td>
                                            <?php } ?>
                                        </tr>
                                        <tr class="button-action">
                                            <td>
                                                <a href="incart.php" class="linktocart button dark">Xem giỏ hàng</a>
                                            </td>
                                            <form id="checkLogincart" method="POST">
                                            <td>
                                                <button class="purchase_btn" name="purchase">Thanh toán</button>   
                                            </td>
                                            </form>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
            <div class="input-search-rpsive">
                <input type="text" placeholder="Tìm kiếm sản phẩm...">
                <div class="icon-search-rpsive">
                    <i class="fas fa-search"></i>
                </div>
            </div>
            <div class="header__bot">
                <div class="header__bot-container">
                    <ul class="header__bot-list">
                        <li class="header__bot-item">
                            <a class="header__bot-item-link" href="">TRANG CHỦ
                                <i class="arrow-down-list fas fa-chevron-down"></i>
                            </a>
                            <ul class="header__bot-list-sub">
                                <li class="header__bot-list-sub-item"><a href="index.php">Xem tất cả sản phẩm</a></li>
                                <li class="header__bot-list-sub-item"><a href="#">Kiểu hiển thị header 2</a></li>
                                <li class="header__bot-list-sub-item"><a href="#">Kiểu hiển thị header 3</a></li>
                            </ul>
                        </li>
                        <li class="header__bot-item">
                            <a class="header__bot-item-link" href="">SẢN PHẨM
                            <i class="arrow-down-list fas fa-chevron-down"></i>
                        </a>
                            <ul class="header__bot-list-sub">
                            <?php 
                                $tendanhmuc = "select * from loai_noi_that";
                                $resultCata = mysqli_query($conn,$tendanhmuc);
                                $countCata = 0;
                                foreach($resultCata as $rows){
                                $countCata++; ?>
                                <li class="header__bot-list-sub-item"><a href="index.php?danhmuc=<?= $countCata ?>"><?= $rows['ten_loai']; ?></a></li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li class="header__bot-item">
                            <a class="header__bot-item-link" href="">PRODUCT VIEW
                            <i class="arrow-down-list fas fa-chevron-down"></i>
                        </a>
                            <ul class="header__bot-list-sub">
                                <li class="header__bot-list-sub-item"><a href="#">Product view 01</a></li>
                                <li class="header__bot-list-sub-item"><a href="#">Product view 02</a></li>
                                <li class="header__bot-list-sub-item"><a href="#">Product view 03</a></li>
                            </ul>
                        </li>
                        <li class="header__bot-item"><a class="header__bot-item-link" href="#">BLOG</a></li>
                        <li class="header__bot-item"><a class="header__bot-item-link" href="recommend.php">GIỚI THIỆU</a></li>
                        <li class="header__bot-item"><a class="header__bot-item-link" href="contact.php">LIÊN HỆ</a></li>
                    </ul>
                </div>
            </div>
        </header>
        </div>
        <?php if (!empty($_SESSION["cart"])) {
                    $products = mysqli_query($conn, "SELECT * FROM `noi_that` WHERE `ma_noi_that` IN (" . implode(",", array_keys($_SESSION["cart"])) . ")");
                } 
        if($_SESSION['cart'] == null) {?>
            <h1 id="spacetop">Giỏ hàng<span> (0 Sản phẩm) </span></h1>
            <div class="body__cart-empty">
                <img src="./assets/img/cart-empty.png">
                <p class="empty__note">Không có sản phẩm nào trong giỏ hàng của bạn.</p>
                <a class="cart__empty-continue" href="index.php">Tiếp tục mua sắm</a>
            </div>
            <?php }else { 
                $totalnumberCart = 0;
                foreach($products as $rows) {
                    $quantity = $_SESSION["cart"][$rows['ma_noi_that']];
                    $numberCart = 0;
                    if ( $quantity > 1) {
                        $quantity = 1;
                    }
                    $numberCart = $quantity;
                    $totalnumberCart += $numberCart;   
                }?>
            <h1 id="spacetop">Giỏ hàng<span> (<?php echo ($totalnumberCart)?> sản phẩm) </span></h1>
            <form id="cart-form" method="POST">
            <div class="body__cart">
                <div class="body__cart-left">
                    <h1>Thông tin giỏ hàng <i class="fas fa-chevron-right"></i></h1>
                    <?php if(isset($_SESSION["cart"])) {
                        $totals = 0;
                        foreach($products as $rows) {
                            $quantity = $_SESSION["cart"][$rows['ma_noi_that']];
                            $price = 0;
                            $price = $rows["gia_noi_that"]* $quantity;
                            $totals += $price;
                    ?>
                    <div class="cart__left-content">
                    <div class="cart__left-img">
                        <?php 
                        $id_hinh =  $rows['ma_noi_that'];
                        $sql = "SELECT * FROM hinh_noithat where ma_noi_that =  $id_hinh";
                        $result2 = mysqli_query($conn,$sql);
                        $idHinh = 0;
                            foreach($result2 as $row) { $idHinh++; ?>
                        <img class="img__product-<?php echo ($idHinh)?>" src="<?php echo $row['hinh']?>">
                        <?php } ?>
                    </div>
                    <div class="cart__left-name">
                        <div class="cart__name-text">
                        <p><?php echo $rows['ten_noi_that'];?></p>
                        </div>
                            <a class ="cart__name-delete" href="javascript:deleteCart(<?php echo $rows["ma_noi_that"];?>)">
                                <i class="fas fa-trash-alt"></i>
                                        Xóa
                            </a>
                    </div>
                    <div class="cart__left-price">
                        <div class="cart__price-text">
                            <span><?php echo number_format($rows['gia_noi_that']);?>đ</span>
                        </div>
                        <div class="cart__price-quantity">
                            <span id="qty-decrease">-</span>
                            <input oninput="javascript:updateQuantity(this.value)" type="text" name="quantity[<?= $row['ma_noi_that'] ?>]" value="<?= $_SESSION["cart"][$row['ma_noi_that']] ?>" min="1"> 
                            <span id="qty-increase">+</span>    
                        </div>
                    </div>
                </div>
                    <?php } ?>
                </div>
                <div class="body__cart-right">
                    <div class="sticky">
                    <div class="cart__right-sales">
                        <div class="coupon-usage">
                            <p>Furniture khuyến mãi</p>
                            <p>Có thể chọn 2 <i class="fas fa-exclamation-circle"></i></p>
                        </div>
                        <div class="platform-coupon">
                            <img src="https://frontend.tikicdn.com/_desktop-next/static/img/mycoupon/coupon_icon.svg">
                            <span>Chọn hoặc nhập mã khuyến mãi</span>
                            </div>
                    </div>
                    <div class="cart__right-purchase">
                        <div class="price__items">
                            <span>Tạm tính</span>
                            <?php if(($_SESSION["cart"]) == null){ ?>
                            <span>0đ</span>
                            <?php }else {?>
                            <span><?php echo number_format($totals);?>đ</span>
                            <?php }?>
                        </div>
                        <div class="prices__total">
                            <span>Thành tiền</span>
                            <div class="value-final">
                                <span><?php echo number_format($totals);?>đ</span>
                            </div>
                        </div>
                        <i class="ivat">(Đã bao gồm VAT nếu có)</i>
                    </div>
                    <button name="update_click" class="cart__submit update"><a class="continue-buy" href="index.php">Xem sản phẩm khác</a></button>
                    </form>
                    <form id="deleteAllCart" method="POST">
                    <button name="deleteallCart" class="cart__submit">Xóa tất cả giỏ hàng</button>
                    </form>
                        <form id="checkLC" method="POST">
                        <button class="purchase_btnLast" name="purchases">Tiến hành đặt hàng</button> 
                        </form>   
                    </div>
                </div>
           
            <?php } ?> 
            </div>
            <!-- group title home -->
            <div class="body__group-title-home">
                <a href="#">
                    <h4 style="margin-bottom: 1rem;">HÃY LIÊN HỆ VỚI CHÚNG TÔI!</h4>
                </a>
                <p>Luôn sẵn sáng hỗ trợ và tư vấn cho bạn để có sản phẩm tốt nhất.</p>
                <div class="input-email">
                    <input type="email" placeholder="Nhập email của bạn" required>
                    <button type="submit">GỬI</button>
                </div>
            </div>
            <?php } ?>
        </div>
</div>
<footer class="footer">
            <div class="footer__top">
                <div class="footer__top-content">
                    <div class="footer__top-icon">
                        <img src="./assets/img/icon-footer/policy_icon_1.png" alt="">
                    </div>
                    <div class="footer__top-text">
                        <p>Giao hàng nhanh chóng.</p>
                        <p>Miễn phí với đơn hàng trên 3 triệu.</p>
                    </div>
                </div>

                <div class="footer__top-content">
                    <div class="footer__top-icon">
                        <img src="./assets/img/icon-footer/policy_icon_2.png" alt="">
                    </div>
                    <div class="footer__top-text">
                        <p>Chính sách bảo hành</p>
                        <p>Bảo hành 12 tháng, đổi trả 15 ngày.</p>
                    </div>
                </div>

                <div class="footer__top-content">
                    <div class="footer__top-icon">
                        <img src="./assets/img/icon-footer/policy_icon_3.png" alt="">
                    </div>
                    <div class="footer__top-text">
                        <p>Hỗ trợ 24/7</p>
                        <p>Với các kênh chat, email & phone</p>
                    </div>
                </div>

            </div>
        </footer>
        <hr>
        <div class="footer__bot">
            <div class="footer__bot-content ftb1">
                <h4>Giới thiệu</h4>
                <p>Trang mua sắm trực tuyến nội thất mang phong cách việt, giúp bạn cập nhập và nắm bắt xu hướng mới</p>
                <img src="./assets/img/icon-footer/logo_bct.png" alt="" width="174px" height="65px">
            </div>

            <div class="footer__bot-content ftb2">
                <h4>Liên kết</h4>
                <ul>
                    <li>
                        <p>Giới thiệu</p>
                    </li>
                    <li>
                        <p>Chính sách đổi trả</p>
                    </li>
                    <li>
                        <p>Chính sách bảo mật</p>
                    </li>
                    <li>
                        <p>Điều khoản dịch vụ</p>
                    </li>
                    <li>
                        <p>Tìm kiếm</p>
                    </li>
                </ul>
            </div>

            <div class="footer__bot-content ftb3">
                <h4>Thông tin liên hệ</h4>
                <p><i class="fas fa-map-marker-alt"></i>Tầng 4, tòa nhà Flemington, số 182, đường Lê Đại Hành, phường 15, quận 11, Tp. Hồ Chí Minh.</p>
                <p><i class="fas fa-phone-alt"></i>1900.636.099</p>
                <p><i class="fas fa-tty"></i>1900.636.099</p>
                <p><i class="fas fa-envelope"></i>hi@haravan.com</p>
            </div>

            <div class="footer__bot-content ftb4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.638429542857!2d105.76562691525788!3d10.046665474984447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0880f08006ffb%3A0x9a745510330faf4e!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBL4bu5IHRodeG6rXQgLSBDw7RuZyBuZ2jhu4cgQ-G6p24gVGjGoQ!5e0!3m2!1svi!2s!4v1619574575144!5m2!1svi!2s"
                    width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <hr>
    <p class="nocopy">Copyright © 2021 Furniture. Powered by Hiteam</p>
    