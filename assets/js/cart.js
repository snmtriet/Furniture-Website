    // Mua từ trang index

    // $(".addCartForm").submit(function(event) {
    //     event.preventDefault();
    //     $.ajax({
    //         type: "POST",
    //         url: "./action.php?action=add",
    //         data: $(this).serializeArray(),
    //         success: function(response) {
    //             location.reload();
    //             response = JSON.parse(response);
    //             // console.log("response: ", response);
    //             if (response.status == 0) { // thêm lỗi
    //                 alert(response.message);
    //             } else { // thêm thành công
    //                 // alert(response.message);
    //             }
    //         }
    //     });
    // });


    // Mua từ trang detail
    // $("#add-to-cart-form").validate({
    //     rules: {
    //         "quantity[<?= $row['ma_noi_that'] ?>]": {
    //             remote: {
    //                 url: "action.php?action=checkQuantity",
    //                 type: "post",
    //             }
    //         }
    //     },
    //     submitHandler: function(form) {
    //         console.log($(form).serializeArray());
    //         $.ajax({
    //             type: "POST",
    //             url: "./action.php?action=add",
    //             data: $(form).serializeArray(),
    //             success: function(response) {
    //                 location.reload();
    //                 response = JSON.parse(response);
    //                 console.log("response: ", response);
    //                 if (response.status == 0) { // thêm lỗi
    //                     alert(response.message);
    //                 } else { // thêm thành công
    //                     alert(response.message);
    //                 }
    //             }
    //         });
    //     }
    // });