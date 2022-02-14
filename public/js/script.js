table1 = document.getElementById('Table1');
table2 = document.getElementById('Table2');
addItem1 = document.getElementById('addItem1');
addItem2 = document.getElementById('addItem2');
remItem1 = document.getElementById('remItem1');
remItem2 = document.getElementById('remItem2');

if (table1) {
    document.getElementById('Table1').onclick = function () {
        location.href = '/addItem1'
    }
}
if (table2) {
    document.getElementById('Table2').onclick = function () {
        location.href = '/addItem2'
    }
}
if (addItem1) {
    document.getElementById('addItem1').onclick = function () {
        location.href = '/addItem1'
    }
}
if (addItem2) {
    document.getElementById('addItem2').onclick = function () {
        location.href = '/addItem2'
    }
}
if (remItem1) {
    document.getElementById('remItem1').onclick = function () {
        location.href = '/remItem1'
    }
}
if (remItem2) {
    document.getElementById('remItem2').onclick = function () {
        location.href = '/remItem2'
    }
}

// window.onclick = e => {
//     console.log(e.target);  // to get the element
//     console.log(e.target.tagName);  // to get the element tag name alone
// }

if(document.getElementById('dotpay')){
    document.getElementById('dotpay').onclick = function () {
        document.getElementById('payment-type').innerText = "Płatność online - dotpay";
    }
}
if(document.getElementById('payu')){
    document.getElementById('payu').onclick = function () {
        document.getElementById('payment-type').innerText = "Płatność online - PayU";
    }
}

if(document.getElementById('kurier')){
    document.getElementById('kurier').onclick = function () {
        document.getElementById('delivery-type').innerText = "Kurier - InPost";
    }
}
if(document.getElementById('osobisty')){
    document.getElementById('osobisty').onclick = function () {
        document.getElementById('delivery-type').innerText = "Odbiór Osobisty";
    }
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
    window.scrollTo(0, 0);
}
