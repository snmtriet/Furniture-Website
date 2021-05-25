// function deleteCart(productID) {
//     $.ajax({
//         type: "POST",
//         url: "./action.php?action=delete",
//         data: {
//             "id": productID
//         },
//         success: function(response) {
//             response = JSON.parse(response);
//             // console.log("response: ", response);
//             if (response.status == 1) { // xóa thành công
//                 $.get('ajax-incart-content.php', function(cartContentHTML) {
//                     $('.cart__mini').html(cartContentHTML);
//                 });
//             }
//         }
//     });
// }