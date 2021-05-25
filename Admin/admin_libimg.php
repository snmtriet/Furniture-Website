<?php include("../assets/body__admin/header_admin.php"); ?>
<div class="content">
<?php include("../Admin/content_libimg.php"); ?>
</div>
  </body>
  <script src="../assets/js/admin.js"></script>
  <script>
   function deletelibImg(productID) {
        $.ajax({
        type: "POST",
        url: "admin_action.php?admin_action=deletelibImg",
        data: {"idlibimg": productID},
        success: function(response) {
        response = JSON.parse(response);
        if(response.status == 1) {
          $.get('content_libimg.php',function(libimgContentHTML){
                $('.content').html(libimgContentHTML);
            });
        }
        }
    });
}
  </script>
</html>
