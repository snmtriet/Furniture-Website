document.getElementById("click-bars").addEventListener("click", function() {
    document.getElementById("click-bars").style.color = "cyan";
});
// detail

function myFunction() {
    document.getElementById("active").style.display = "block";
    document.getElementById("active2").style.display = "none";
    document.getElementById("active3").style.display = "none";
}

function myFunction2() {
    document.getElementById("active").style.display = "none";
    document.getElementById("active2").style.display = "block";
    document.getElementById("active3").style.display = "none";
}

function myFunction3() {
    document.getElementById("active").style.display = "none";
    document.getElementById("active2").style.display = "none";
    document.getElementById("active3").style.display = "block";
}
// slide Img detail
var defaultBorder = document.getElementById("imgSlide1");
defaultBorder.style.border = "1px solid black";

function slideImg1() {
    document.getElementById("imgSlide1").style.border = "1px solid black";
    document.getElementById("imgSlide2").style.border = "none";
    // document.getElementById("imgSlide3").style.border = "none";
    // document.getElementById("imgSlide4").style.border = "none";
    // document.getElementById("imgSlide5").style.border = "none";
    // document.getElementById("imgSlide6").style.border = "none";
    // document.getElementById("imgSlide7").style.border = "none";
    document.getElementById("detail-slideimg").style.marginLeft = "0%";
    document.getElementById("detail-slideimg").style.transition = "all linear .3s";
}

function slideImg2() {
    document.getElementById("imgSlide2").style.border = "1px solid black";
    document.getElementById("imgSlide1").style.border = "none";
    // document.getElementById("imgSlide3").style.border = "none";
    // document.getElementById("imgSlide4").style.border = "none";
    // document.getElementById("imgSlide5").style.border = "none";
    // document.getElementById("imgSlide6").style.border = "none";
    // document.getElementById("imgSlide7").style.border = "none";
    document.getElementById("detail-slideimg").style.marginLeft = "-100%";
    document.getElementById("detail-slideimg").style.transition = "all linear .3s";
}

// function slideImg3() {
//     document.getElementById("imgSlide3").style.border = "1px solid black";
//     document.getElementById("imgSlide1").style.border = "none";
//     document.getElementById("imgSlide2").style.border = "none";
//     document.getElementById("imgSlide4").style.border = "none";
//     document.getElementById("imgSlide5").style.border = "none";
//     document.getElementById("imgSlide6").style.border = "none";
//     document.getElementById("imgSlide7").style.border = "none";
//     document.getElementById("detail-slideimg").style.marginLeft = "-200%";
//     document.getElementById("detail-slideimg").style.transition = "all linear .3s";
// }

// function slideImg4() {
//     document.getElementById("imgSlide4").style.border = "1px solid black";
//     document.getElementById("imgSlide1").style.border = "none";
//     document.getElementById("imgSlide2").style.border = "none";
//     document.getElementById("imgSlide3").style.border = "none";
//     document.getElementById("imgSlide5").style.border = "none";
//     document.getElementById("imgSlide6").style.border = "none";
//     document.getElementById("imgSlide7").style.border = "none";
//     document.getElementById("detail-slideimg").style.marginLeft = "-300%";
//     document.getElementById("detail-slideimg").style.transition = "all linear .3s";
// }

// function slideImg5() {
//     document.getElementById("imgSlide5").style.border = "1px solid black";
//     document.getElementById("imgSlide1").style.border = "none";
//     document.getElementById("imgSlide2").style.border = "none";
//     document.getElementById("imgSlide3").style.border = "none";
//     document.getElementById("imgSlide4").style.border = "none";
//     document.getElementById("imgSlide6").style.border = "none";
//     document.getElementById("imgSlide7").style.border = "none";
//     document.getElementById("detail-slideimg").style.marginLeft = "-400%";
//     document.getElementById("detail-slideimg").style.transition = "all linear .3s";
// }

// function slideImg6() {
//     document.getElementById("imgSlide6").style.border = "1px solid black";
//     document.getElementById("imgSlide1").style.border = "none";
//     document.getElementById("imgSlide2").style.border = "none";
//     document.getElementById("imgSlide3").style.border = "none";
//     document.getElementById("imgSlide4").style.border = "none";
//     document.getElementById("imgSlide5").style.border = "none";
//     document.getElementById("imgSlide7").style.border = "none";
//     document.getElementById("detail-slideimg").style.marginLeft = "-500%";
//     document.getElementById("detail-slideimg").style.transition = "all linear .3s";
// }

// function slideImg7() {
//     document.getElementById("imgSlide7").style.border = "1px solid black";
//     document.getElementById("imgSlide1").style.border = "none";
//     document.getElementById("imgSlide2").style.border = "none";
//     document.getElementById("imgSlide3").style.border = "none";
//     document.getElementById("imgSlide4").style.border = "none";
//     document.getElementById("imgSlide5").style.border = "none";
//     document.getElementById("imgSlide6").style.border = "none";
//     document.getElementById("detail-slideimg").style.marginLeft = "-600%";
//     document.getElementById("detail-slideimg").style.transition = "all linear .3s";
// }
// check number of img
// 2 img -> 200%, 1 img -> 100%
var child = document.getElementById("detail-slideimg").children.length;
if (child == 1) {
    document.getElementById("detail-slideimg").style.width = "100%";
} else if (child == 3) {
    document.getElementById("detail-slideimg").style.width = "300%";
} else if (child == 4) {
    document.getElementById("detail-slideimg").style.width = "400%";
} else if (child == 5) {
    document.getElementById("detail-slideimg").style.width = "500%";
} else if (child == 6) {
    document.getElementById("detail-slideimg").style.width = "600%";
} else if (child == 7) {
    document.getElementById("detail-slideimg").style.width = "700%";
}