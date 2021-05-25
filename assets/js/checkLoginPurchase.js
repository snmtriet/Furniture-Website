$("#checkLogincart").submit(function(event) {
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