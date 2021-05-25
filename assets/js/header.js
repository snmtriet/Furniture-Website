// show login form
$('#login-form').click(function() {
    $('.login__form').toggleClass("showLoginform");
    $('.cart__mini').removeClass("showCartMini");
});
$('.Logined').click(function() {
    $('.adminlogined').toggleClass("showKeyAdmin");
    $('.cart__mini').removeClass("showCartMini");
});

// show mini cart 
$('.link-cart').click(function() {
    $('.cart__mini').toggleClass("showCartMini");
    $('.adminlogined').removeClass("showKeyAdmin");
    $('.login__form').removeClass("showLoginform");
});
// show register form
$('#register_link').click(function() {
    $('.registerForm').toggleClass("showRegisterform");
    $('.login__form').removeClass("showLoginform");
    $('.overlay').toggleClass("showOverlay");
});
$('.overlay').click(function() {
    $('.registerForm').removeClass("showRegisterform");
    $(this).removeClass("showOverlay");
});
$('.closeLogoutform').click(function() {
    $('.registerForm').removeClass("showRegisterform");
    $('.overlay').removeClass("showOverlay");
});


// growth label for input REGISTER
$("#customer-fullName")
    .keyup(function() {
        var getVal = $(this).val();
        if (getVal != "") {
            $("#labelfullName").addClass("moveToplabel");
        } else {
            $("#labelfullName").removeClass("moveToplabel");
        }
    }).keyup();

$("#customer-User")
    .keyup(function() {
        var getVal = $(this).val();
        if (getVal != "") {
            $("#labelUser").addClass("moveToplabel");
        } else {
            $("#labelUser").removeClass("moveToplabel");
        }
    }).keyup();

$("#customer-Pass")
    .keyup(function() {
        var getVal = $(this).val();
        if (getVal != "") {
            $("#labelPass").addClass("moveToplabel");
        } else {
            $("#labelPass").removeClass("moveToplabel");
        }
    }).keyup();

$("#customer-Email")
    .keyup(function() {
        var getVal = $(this).val();
        if (getVal != "") {
            $("#labelEmail").addClass("moveToplabel");
        } else {
            $("#labelEmail").removeClass("moveToplabel");
        }
    }).keyup();
$("#customer-Phone")
    .keyup(function() {
        var getVal = $(this).val();
        if (getVal != "") {
            $("#labelPhone").addClass("moveToplabel");
        } else {
            $("#labelPhone").removeClass("moveToplabel");
        }
    }).keyup();

// growth label for input LOGIN
$("#customer-Username")
    .keyup(function() {
        var getVal = $(this).val();
        if (getVal != "") {
            $("#labelUsername").addClass("moveToplabel");
        } else {
            $("#labelUsername").removeClass("moveToplabel");
        }
    }).keyup();

$("#customer-Password")
    .keyup(function() {
        var getVal = $(this).val();
        if (getVal != "") {
            $("#labelPassword").addClass("moveToplabel");
        } else {
            $("#labelPassword").removeClass("moveToplabel");
        }
    }).keyup();
$("#customer-Repassword")
    .keyup(function() {
        var getVal = $(this).val();
        if (getVal != "") {
            $("#labelRepass").addClass("moveToplabel");
        } else {
            $("#labelRepass").removeClass("moveToplabel");
        }
    }).keyup();
// jQuery Ajax
// Register

// Login
$("#loginForm").submit(function(event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: "./action.php?action=login",
        data: $(this).serializeArray(),
        success: function(response) {
            response = JSON.parse(response);
            console.log("response: ", response);
            if (response.status == 0) { // đăng nhập lỗi
                alert(response.message)
            } else { // đăng nhập thành công
                location.reload();
            }
        }
    });
});
// Logout
$("#logoutForm").submit(function(event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: "./action.php?action=logout",
        data: $(this).serializeArray(),
        success: function(response) {
            location.reload();
        }
    });
});

// expand height register forms
$('.form__submit').click(function() {
    $(".registerForm").css('height', "640px");
});
// search
$('.header__mid-left-input').keyup(function() {
    var txt = $(this).val();
    $.ajax({
        type: "POST",
        url: "./action.php?action=search",
        data: { name: txt },
        success: function(response) {
            $('.result_search').html(response);
        }
    });
});