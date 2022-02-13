<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;0,900;1,700&display=swap');
    :root {
        --color-gold: #DFBD69;
        --color-black: #000;
        --color-white: #FFF;
        --color-gray: #8D8D8D;
    }
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
        overflow-x: hidden;
        scroll-behavior: smooth;
        transition: 0.3s;
    }

    i {
        font-size: 40px;
    }

    .navul a {
        color: var(--color-white);
    }

    .navul a:visited {
        color: var(--color-white);
    }

    .navbar {
        color: var(--color-white);
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: 0.5s;
        padding: 10px 30px;
        flex-wrap: wrap;
        position: absolute;
        background-color: var(--color-gold);
    }

    .navbar a {
        color: var(--color-white);
        text-decoration: none;
    }

    .navbar h1 {
        font-weight: 500;
    }

    .navbar a:visited {
        color: var(--color-white);
    }

    .navbar ul {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .navbar ul li {
        position: relative;
        list-style: none;
    }

    .navbar ul li a {
        position: relative;
        margin: 0 5px;
        text-decoration: none;
    }

    #cart-total {
        position: absolute;
        top: 0;
        display: block;
        text-align: center;
        color: #fff;
        background-color: red;
        width: 20px;
        height: 20px;
        border-radius: 100%;
        font-size: 14px;
    }
    @media screen and (max-width: 768px) {

        i {
            font-size: 35px;
        }
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
<div class="navbar">
    <h1><a href="/">Website Logo</a></h1>
    <ul class="navul" id="navul">
        <li><a href="/cart"><i class="ri-shopping-cart-line"></i></a></li>
        <p id="cart-total">
            @if($cart)
            {{ $cart->item1Quantity+$cart->item2Quantity }}
            @else
                0
            @endif
        </p>
        <li><a href="/account"><i class="ri-account-circle-fill"></i></a></li>
    </ul>
</div>
