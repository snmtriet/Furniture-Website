var counter = 1;
const prevbtn = document.querySelector('#prevbtn');
const nextbtn = document.querySelector('#nextbtn');
nextbtn.addEventListener('click', () => {
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if (counter > 3) {
        counter = 1;
    }
});

prevbtn.addEventListener('click', () => {
    counter--;
    if (counter < 1) {
        counter = 3;
    }
    document.getElementById('radio' + counter).checked = true;
});

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