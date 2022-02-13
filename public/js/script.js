document.getElementById('Table1').onclick = function (){
    location.href='/addToBasket/table1';
}
document.getElementById('Table2').onclick = function (){
    location.href='/addToBasket/table2';
}
btntop = document.getElementById("btn-top");
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (window.scrollY) {
        btntop.style.display = "block";
    } else {
        btntop.style.display = "none";
    }
}
function topFunction() {
    window.scrollTo(0,0);
}
