<?php include("../assets/body__admin/header_admin.php"); ?>
<div class="header_form-update" id="title_top">
    <div class="title-form">
        <h1>Đơn hàng</h1>
    </div>
</div>
<body>
<div class="content">
<div class="admin__search-poduct">
    <input class="adminSearch-order" type="text" placeholder="Tìm kiếm đơn hàng...">
    <i class="fas fa-search"></i>
</div>
<?php include("../Admin/content_admin_order.php"); ?>
</div>
  </body>
  <script src="../assets/js/admin.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../assets/lib/jquery.validate.min.js"></script>
  <script>
   function confirmPurchase(orderID) {
        $.ajax({
        type: "POST",
        url: "admin_action.php?admin_action=confirmPurchase",
        data: {"id": orderID},
        success: function(response) {
        response = JSON.parse(response);
        if(response.status == 1) {
            // alert(response.message);
          $.get('content_admin_order.php',function(orderContentHTML){
                $('table').html(orderContentHTML);
            });
        }
        }
    });
}
$('.adminSearch-order').keyup(function() {
    var txt = $(this).val();
    $.ajax({
        type: "POST",
        url: "admin_action.php?admin_action=adminSearchOrder",
        data: { nameOrder: txt },
        success: function(response) {
            $('table').html(response);
        }
    });
});
  </script>
</html>
