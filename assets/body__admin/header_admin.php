<?php
session_start();
if( empty($_SESSION["admin"])){
    header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="../assets/css/base.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
<header>
    <div class="header__logo">
        <i class="fas fa-tools"></i>
        <span>Urban</span>
    </div>
    <div class="header__slogan">
        <div class="bars btn">
            <i class="fas fa-bars" id="bars-rotate"></i>
        </div>
    </div>
</header>
<div class="container-admin">
<nav class="sidebar">
<ul>
    <li>
        <a href="#" class="charts-btn">HOME
          <span class="fas fa-caret-down first"></span>
        </a>
        <ul class="chart-show">
          <li><a href="admin_product.php">Sản phẩm</a></li>
          <li><a href="admin_upload.php">Thêm sản phẩm</a></li>
        </ul>
  </li>
    <li><a href="admin_libimg.php">Thư viện ảnh</a></li>
    <li><a href="admin_category.php">Danh mục</a></li>
    <li><a href="admin_order.php">Đơn hàng</a></li>
</ul>
</nav>
</div>