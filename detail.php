<?php
session_start();
require_once "Database/db.php"; 
$id = $_GET["id"];
$sql ="SELECT * FROM noi_that where ma_noi_that = $id";
$result = mysqli_query($conn,$sql);
$sql ="SELECT * FROM hinh_noithat where ma_noi_that = $id";
$result2 = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết</title>
</head>
<body>
<?php include("./assets/body__model/header.php"); ?>
        <div class="container">
            <div class="detail__main">
                <div class="detail__img">
                    <div class="detail__img-left">
                        <?php
                        $i = 1;
                        foreach ($result2 as $row) { ?>
                        <img id="imgSlide<?php echo $i ?>" onclick="slideImg<?php echo $i ?>()" src="<?php echo $row['hinh']; ?>" alt="">
                        <?php 
                        $i++;    
                        } ?>
                    </div>
                    <div class="detail__img-right">
                        <div id="detail-slideimg">
                            <?php foreach ($result2 as $row) { ?>
                            <img src="<?php echo $row['hinh'];?>" >
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="detail__info">
                    <?php foreach ($result as $row) { ?>
                    <h1><?php echo $row['ten_noi_that']; ?></h1>
                    <?php } ?>
                    <hr>
                    <div class="quantity-price-detail">
                    <span><?php echo number_format($row['gia_noi_that']);?>đ</span>
                    <span id="tonkho"></span>
                    </div>
                    <div class="btn-cart">
                        <?php if($row['quantity'] > 0 ) {?>
                        <form class="addCartForm" id="add-to-cart-form" action="action.php?action=add" method="POST">
                            <div class="input-cart">
                                <input name="quantity[<?= $row['ma_noi_that'] ?>]" type="number" value="1" min="1" id="cart-quantity">
                            </div>
                            <div class="input-btn">
                                <button type="submit">Thêm vào giỏ hàng</button>
                            </div>
                        </form>
                        <?php } else {?>
                            <div class="input-cart">
                                <input name="quantity[<?= $row['ma_noi_that'] ?>]" type="number" value="1" min="1" id="cart-quantity">
                            </div>
                            <div class="input-btn">
                                <button>Sản phẩm đã hết hàng</button>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="detail__derc" id="tab-content">
                        <ul class="ul-top">
                            <li class="btn-derc" onclick="myFunction()"><a id="huhuu" href="javascript:void(0)">MÔ TẢ</a></li>
                            <li class="btn-derc" onclick="myFunction2()"><a href="javascript:void(0)">ĐIỀU KHOẢN DỊCH VỤ</a></li>
                            <li class="btn-derc" onclick="myFunction3()"><a href="javascript:void(0)">CHÍNH SÁCH ĐỔI TRẢ</a></li>
                        </ul>
                        <hr>

                        <div class="content__derc" id="active">
                            <p>Dòng sản phẩm xuất khẩu được sản xuất tại Nhà Máy Việt Nam theo tiêu chuẩn Châu Âu. Nguồn gốc nguyên vật liệu cũng như chất lượng, độ bền sản phẩm đã được kiểm chứng bởi các nhà nhập khẩu Âu Mỹ</p>
                            <p>CHẤT LIỆU</p>
                            <pre class="mota"><?= $row['mo_ta']?></pre>
                            <p>Hướng dẫn bảo quản</p>
                            <ul>
                                <li>Tránh để đồ quá nóng hoặc quá lạnh trực tiếp lên bề mặt gỗ, hãy dùng miếng lót bên dưới</li>
                                <li>Sử dụng vải khô để làm sạch bề mặt gỗ ngay khi bị bẩn</li>
                                <li>Đối với đồ nội thất làm từ gỗ, chúng tôi khuyến nghị nên dùng sáp và xi bóng gỗ để chà sạch và làm mới ít nhất 6 tháng một lần</li>
                                <li>Đồ nội thất bằng gỗ sẽ có sự khác nhau về vân gỗ hoặc những tì vết tự nhiên mà không làm ảnh hưởng đến chất lượng và tính thẩm mỹ của sản phẩm</li>
                                <li>Chất liệu cao cấp, sử dụng lâu bền</li>
                                <li>Chân ghế được làm từ chất liệu thép mạ chrome bền đẹp, ít bị hoen gỉ qua thời gian sử dụng. 5 bánh xe dưới các thanh đỡ giúp bạn dễ dàng xoay và di chuyển ghế một cách dễ dàng. Ghế có thể điều chỉnh độ cao cho phù hợp với
                                    người sử dụng nhờ bộ piston khí nén. Sản phẩm chịu được trọng lượng cao mà vẫn đảm bảo độ bền qua thời gian sử dụng. </li>
                            </ul>
                        </div>

                        <div class="content__derc" id="active2">
                            <p><strong>1. Giới thiệu</strong></p>
                            <p>Chào mừng quý khách hàng đến với website chúng tôi.</p>
                            <p>Khi quý khách hàng truy cập vào trang website của chúng tôi có nghĩa là quý khách đồng ý với các điều khoản này. Trang web có quyền thay đổi, chỉnh sửa, thêm hoặc lược bỏ bất kỳ phần nào trong Điều khoản mua bán hàng hóa này,
                                vào bất cứ lúc nào. Các thay đổi có hiệu lực ngay khi được đăng trên trang web mà không cần thông báo trước. Và khi quý khách tiếp tục sử dụng trang web, sau khi các thay đổi về Điều khoản này được đăng tải, có nghĩa là
                                quý khách chấp nhận với những thay đổi đó.</p>
                            <p><strong>2. Hướng dẫn sử dụng website</strong></p>
                            <p>Khi vào web của chúng tôi, khách hàng phải đảm bảo đủ 18 tuổi, hoặc truy cập dưới sự giám sát của cha mẹ hay người giám hộ hợp pháp. Khách hàng đảm bảo có đầy đủ hành vi dân sự để thực hiện các giao dịch mua bán hàng hóa theo
                                quy định hiện hành của pháp luật Việt Nam.</p>
                            <p>Trong suốt quá trình đăng ký, quý khách đồng ý nhận email quảng cáo từ website. Nếu không muốn tiếp tục nhận mail, quý khách có thể từ chối bằng cách nhấp vào đường link ở dưới cùng trong mọi email quảng cáo.
                            </p>
                            <p><strong>3. Thanh toán an toàn và tiện lợi</strong></p>
                            <p>Người mua có thể tham khảo các phương thức thanh toán sau đây và lựa chọn áp dụng phương thức phù hợp:</p>
                            <ul>
                                <li><a class="way-derc">Cách 1: </a>Thanh toán trực tiếp (người mua nhận hàng tại địa chỉ người bán)</li>
                                <li><a class="way-derc">Cách 2: </a>Thanh toán sau (COD – giao hàng và thu tiền tận nơi)</li>
                                <li><a class="way-derc">Cách 3: </a>Thanh toán online qua thẻ tín dụng, chuyển khoản</li>
                            </ul>
                        </div>
                        <div class="content__derc" id="active3">
                            <p><strong>1. Điều kiện đổi trả</strong></p>
                            <p>Quý Khách hàng cần kiểm tra tình trạng hàng hóa và có thể đổi hàng/ trả lại hàng ngay tại thời điểm giao/nhận hàng trong những trường hợp sau:</p>
                            <p>Hàng không đúng chủng loại, mẫu mã trong đơn hàng đã đặt hoặc như trên website tại thời điểm đặt hàng.</p>
                            <p>Không đủ số lượng, không đủ bộ như trong đơn hàng.</p>
                            <p>Tình trạng bên ngoài bị ảnh hưởng như rách bao bì, bong tróc, bể vỡ…</p>
                            <p>Khách hàng có trách nhiệm trình giấy tờ liên quan chứng minh sự thiếu sót trên để hoàn thành việc hoàn trả/đổi trả hàng hóa. </p>
                            <p><strong>2. Quy định về thời gian thông báo và gửi sản phẩm đổi trả</strong></p>
                            <ul>
                                <li><strong>Thời gian thông báo đổi trả: </strong>trong vòng 48h kể từ khi nhận sản phẩm đối với trường hợp sản phẩm thiếu phụ kiện, quà tặng hoặc bể vỡ.</p>
                                </li>
                                <li>
                                    <p><strong>Thời gian gửi chuyển trả sản phẩm: </strong>trong vòng 14 ngày kể từ khi nhận sản phẩm.</p>
                                </li>
                                <li>
                                    <p><strong>Địa điểm đổi trả sản phẩm: </strong>Khách hàng có thể mang hàng trực tiếp đến văn phòng/ cửa hàng của chúng tôi hoặc chuyển qua đường bưu điện.</p>
                                </li>
                                <li>Trong trường hợp Quý Khách hàng có ý kiến đóng góp/khiếu nại liên quan đến chất lượng sản phẩm, Quý Khách hàng vui lòng liên hệ đường dây chăm sóc khách hàng của chúng tôi.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>

    <?php include './assets/body__model/footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./assets/lib/jquery.validate.min.js"></script>
    <script src="./assets/js/header.js"></script>
    <script src="./assets/js/detail.js"></script>
    <script src="./assets/js/validation.js"></script>
    <script src="./assets/js/cart.js"></script>
    <script src="./assets/js/deleteCart.js"></script>
    <script src="./assets/js/checkLoginPurchase.js"></script>
    <script>
    $(".addCartForm").validate({
    rules: {
        "quantity[<?= $row['ma_noi_that'] ?>]": {
            remote: {
                url: "action.php?action=checkQuantity",
                type: "post",
            }
        }
    },
    submitHandler: function (form) {
        console.log($(form).serializeArray());
        $.ajax({
            type: "POST",
            url: "./action.php?action=add",
            data: $(form).serializeArray(),
            success: function(response) {
                location.reload();
                response = JSON.parse(response);
                console.log("response: ", response);
                if (response.status == 0) { // thêm lỗi
                    alert(response.message);
                } else { // thêm thành công
                    // alert(response.message);
                }
            }
        });
    }
});
    </script>
</body>

</html>