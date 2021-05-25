// icon-img-change
var xx = document.querySelectorAll("#imgchange");
xx.forEach(x => {
    let childs = x.querySelectorAll('#reImg1ID1')
    childs.forEach(child => {
        child.onclick = function() {
            let parentImage = this.closest('.body__product-list-content ').querySelector('.product-list-content-img #reImgID1')
            let srcChild = this.src;
            parentImage.src = srcChild;
            $(this).addClass("borderActive").siblings().removeClass("borderActive");
        };
    });
});