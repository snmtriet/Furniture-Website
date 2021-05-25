$("#registerForm").validate({
    rules: {
        fullname: "required",
        username: {
            required: true,
            minlength: 5,
            remote: "action.php?action=checkUsername"
        },
        password: {
            required: true,
            minlength: 6
        },
        repassword: {
            required: true,
            equalTo: "#customer-Pass"
        },
        email: {
            required: true,
            email: true,
            remote: "action.php?action=checkEmail"
        },
        phone: {
            required: true,
            number: true,
            minlength: 10,
            maxlength: 10
        }
    },
    messages: {
        fullname: "Bạn chưa nhập họ và tên",
        username: {
            required: "Bạn chưa nhập tài khoản",
            minlength: "Tài khoản phải có ít nhất 5 ký tự",
            remote: "Tài khoản đã tồn tại"
        },
        password: {
            required: "Bạn chưa nhập mật khẩu",
            minlength: "Mật khẩu chứa ít nhất 6 ký tự"
        },
        repassword: {
            required: "Bạn chưa nhập lại mật khẩu",
            equalTo: "Mật khẩu không trùng khớp"
        },
        email: {
            required: "Bạn chưa nhập email",
            email: "Email chưa đúng định dạng",
            remote: "Email đã tồn tại"
        },
        phone: {
            required: "Bạn chưa nhập số điện thoại",
            number: "Vui lòng nhập số",
            minlength: "Số điện thoại phải là 10 số",
            maxlength: "Số điện thoại phải là 10 số"
        }
    },
    submitHandler: function(form) {
        // console.log($(form).serializeArray());
        $.ajax({
            type: "POST",
            url: "./action.php?action=register",
            data: $(form).serializeArray(),
            success: function(response) {
                response = JSON.parse(response);
                if (response.status == 1) {
                    $('#messageShow').html(response.message);
                    $('#registerForm').trigger("reset");
                }
            }
        });
    }
});