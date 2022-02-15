// window.onclick = e => {
//     console.log(e.target);  // to get the element
//     console.log(e.target.tagName);  // to get the element tag name alone
// }

if (document.getElementById('dotpay')) {
    document.getElementById('dotpay').onclick = function () {
        document.getElementById('payment-type').innerText = "Płatność online - dotpay";
    }
}
if (document.getElementById('payu')) {
    document.getElementById('payu').onclick = function () {
        document.getElementById('payment-type').innerText = "Płatność online - PayU";
    }
}

if (document.getElementById('kurier')) {
    document.getElementById('kurier').onclick = function () {
        document.getElementById('delivery-type').innerText = "Kurier - InPost";
    }
}
if (document.getElementById('osobisty')) {
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

const HamburgerMenu = document.querySelector(".hamburger-menu");
const NavMenu = document.querySelector(".nav-menu");

HamburgerMenu.addEventListener("click", MenuMobile);

function MenuMobile() {
    HamburgerMenu.classList.toggle("active");
    NavMenu.classList.toggle("active");
}


const CloseLink = document.querySelectorAll(".close-link");

CloseLink.forEach(n => n.addEventListener("click", CloseMenu));

function CloseMenu() {
    HamburgerMenu.classList.remove("active");
    NavMenu.classList.remove("active");
}
