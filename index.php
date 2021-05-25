<?php
session_start();
require_once "./Database/db.php"; 
$sql = "select * from noi_that";
$result = mysqli_query($conn,$sql); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
    <title>Trang chủ</title>
</head>
<body>
<?php include("./assets/body__model/header.php"); ?>
        <div class="container">
            <!-- slide  -->
<?php include("./assets/body__model/body-slide.php"); ?>
            <!-- main body -->
            <div class="container__body">
                <!-- banner home -->
<?php include("./assets/body__model/body__banner-home.php"); ?>
                
                <!-- group title home -->
                <div class="body__group-title-home">
                    <a href="#">
                        <h2>Sản phẩm mới</h2>
                    </a>
                    <p>Cập nhật những sản phẩm mới nhất</p>
                </div>
                <!-- body product list -->
                <div class="body__product-list">
                    <?php
                    if($_GET) {
                    $id = $_GET['danhmuc'];
                    $test = "select * from noi_that where ma_loai = $id";
                    $restest = mysqli_query($conn,$test);
                    foreach($restest as $row) { ?>
                    <div class="body__product-list-content">
                        <div class="product-list-content-img">
                            <?php
                            $id_hinh =  $row['ma_noi_that'];
                            $hinh = "select * from hinh_noithat where ma_noi_that = $id_hinh";
                            $result2 = mysqli_query($conn,$hinh);
                            $id = 1;
                            foreach($result2 as $row_h) { ?>
                                <img width="386px" height="320px" class="reImg" id="reImgID<?php echo $id; ?>" src="<?php echo $row_h['hinh']; ?>">
                                <?php
                                $id++;
                            } ?>
                            <div class="search-center">
                                <a href="detail.php?id=<?php echo $row["ma_noi_that"];?>" title="Xem chi tiết">
                                        <i class="fas fa-search-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-list-content-text">
                            <a href="detail.php?id=<?php echo $row['ma_noi_that']?>">
                                <p><?php echo $row['ten_noi_that'];?></p>
                            </a>
                            <p><?php echo number_format($row['gia_noi_that']);?>đ</p>
                            <div class="iconImg-hover" id="imgchange">
                            <?php foreach($result2 as $row_h) { ?>
                                <img id="reImg1ID1" src="<?php echo $row_h['hinh']; ?>" alt="">  
                                    <?php } ?>
                            </div>
                        </div>
                         <!-- BOX Detail here -->
                    </div>
                    <?php } }else { 
                        foreach($result as $row) { ?>
                    <div class="body__product-list-content">
                    <div class="product-list-content-img">
                            <?php
                            $id_hinh =  $row['ma_noi_that'];
                            $hinh = "select * from hinh_noithat where ma_noi_that = $id_hinh";
                            $result2 = mysqli_query($conn,$hinh);
                            $id = 1;
                            foreach($result2 as $row_h) { ?>
                                <img width="386px" height="320px" class="reImg" id="reImgID<?php echo $id; ?>" src="<?php echo $row_h['hinh']; ?>">
                                <?php
                                $id++;
                            } ?>
                            <div class="search-center">
                                <a href="detail.php?id=<?php echo $row["ma_noi_that"];?>" title="Xem chi tiết">
                                        <i class="fas fa-search-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-list-content-text">
                            <a href="detail.php?id=<?php echo $row["ma_noi_that"]?>">
                                <p><?php echo $row['ten_noi_that'];?></p>
                            </a>
                            <p><?php echo number_format($row['gia_noi_that']);?>đ</p>
                            <div class="iconImg-hover" id="imgchange">
                            <?php
                            $id_hinh =  $row['ma_noi_that'];
                            $hinh = "select * from hinh_noithat where ma_noi_that = $id_hinh";
                            $result2 = mysqli_query($conn,$hinh);
                            $id = 1;
                            foreach($result2 as $row_h) { ?>
                                <img id="reImg1ID1" src="<?php echo $row_h['hinh']; ?>" alt="">  
                                    <?php } ?>
                            </div>
                        </div>
                         <!-- BOX Detail here -->
                    </div>
                    <?php } } ?>
                </div>

                <!-- body banner home 2 -->
                
                <?php include("./assets/body__model/body__banner-home2.php"); ?>

                <!-- group title home -->

                <div class="body__group-title-home">
                    <a href="#">
                        <h2>Sản phẩm khuyến mãi</h2>
                    </a>
                    <p>Ưu đãi lên đến 50%</p>
                </div>

                <!-- collection product 2 -->
                <div class="body__collection-slide">
                <?php foreach ($result as $rowx) {
                    $id_hinh =  $rowx['ma_noi_that'];
                    $hinh = "select * from hinh_noithat where ma_noi_that = $id_hinh";
                    $result2 = mysqli_query($conn,$hinh);
                    ?>
                    <div class="body__collect-content">
                    <div class="body__collect-img">
                       <?php  foreach($result2 as $rows) { ?>
                            <a href="detail.php?id=<?= $rows['ma_noi_that'];?>"><img src="<?= $rows['hinh'];?>" alt="" width="80px" height="98px"></a>
                        <?php } ?>
                        </div>
                        <div class="body__collect-i4">
                            <a href="javascript:void(0)">
                                <p><?= $rowx["ten_noi_that"];?></p>
                            </a>
                            <p><?= number_format($rowx["gia_noi_that"]);?>đ</p>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <!-- group title home -->

                <div class="body__group-title-home">
                    <a href="#">
                        <h2>Tin tức</h2>
                    </a>
                    <p>Cập nhật tin tức mới nhất!</p>
                </div>

                <!-- tip news home-->
                <?php include("./assets/body__model/body__news.php"); ?>
                <!-- group title home -->
                <div class=" body__group-title-home">
                    <a href="#">
                        <h4 style="margin-bottom: 1rem;">HÃY LIÊN HỆ VỚI CHÚNG TÔI!</h4>
                    </a>
                    <p>Luôn sẵn sáng hỗ trợ và tư vấn cho bạn để có sản phẩm tốt nhất.</p>
                    <div class="input-email">
                        <input type="email" placeholder="Nhập email của bạn" required>
                        <button type="submit">GỬI</button>
                    </div>
                </div>
            </div>
            <hr>
        </div>
        <?php include("./assets/body__model/footer.php"); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./assets/lib/jquery.validate.min.js"></script>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/header.js"></script>
    <script src="./assets/js/validation.js"></script>
    <script src="./assets/js/checkLoginPurchase.js"></script>
</body>
</html>