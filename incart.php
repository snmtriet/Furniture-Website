<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/cart.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
</head>
<body>
<!-- <h1 class="message_actions">
    <i class="fas fa-exclamation-circle"></i>
    <p class="action_notify">Bạn chưa đăng nhập</p>
</h1> -->
    <div id="ajax-cart">
    <?php include 'cartContent.php'?>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./assets/lib/jquery.validate.min.js"></script>
    <script src="./assets/js/header.js"></script>
    <script src="./assets/js/validation.js"></script>
    <script src="./assets/js/checkLoginPurchase.js"></script>
    <script>
        function updateQuantity(quantity) {
            if(quantity != "") { 
            $.ajax({
            type: "POST",
            url: "./action.php?action=update",
            data: $('#cart-form').serializeArray(),
            success: function(response) {
                response = JSON.parse(response);
                if (response.status == 0) { // cập nhật không thành công
                    alert(response.message);
                }else { // cập nhật thành công
                    $.get('cartContent.php',function(cartContentHTML){
                        $('#ajax-cart').html(cartContentHTML);
                    });
                }
                }
            });
    }
}
        function deleteCart(productID) {
        $.ajax({
        type: "POST",
        url: "./action.php?action=delete",
        data: {
            "id": productID
        },
        success: function(response) {
        response = JSON.parse(response);
        if (response.status == 0) { // xóa không thành công
            alert(response.message);
        }else { // xóa thành công
            $.get('cartContent.php',function(cartContentHTML){
                $('#ajax-cart').html(cartContentHTML);
            });
        }
        }
    });
}
$("#checkLC").submit(function(event) {
    $.ajax({
        type: "POST",
        url: "./action.php?action=checkLoginCart",
        success: function(response) {
            response = JSON.parse(response);
            if (response.status == 0) {
                alert(response.message);
            } else {
                location.href = "checkout.php";
            }
        }
    });
});
$("#deleteAllCart").submit(function(event) {
    $.ajax({
        type: "POST",
        url: "./action.php?action=deleteallCart",
        success: function(response) {
            // response = JSON.parse(response);
            // if (response.status == 0) {
            //     alert(response.message);
            // } else {
            //     location.href = "checkout.php";
            // }
        }
    });
});
    </script>
</body>
</html>
