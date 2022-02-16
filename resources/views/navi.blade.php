<link href="{{ asset('css/navi.css') }}" media="all" rel="stylesheet" type="text/css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
    if(!isset($_COOKIE['sessionID'])){
        setcookie('sessionID',csrf_token(), time()+(86400*30));
    }
?>
<header>
    <div class="logo">
    <h1><a href="/">Logo</a></h1>
    </div>
    <nav>
        <ul class="nav-menu">
            <li class="nav-item"><a href="/" class="close-link">Home</a></li>
            <li class="nav-item"><a href="/category" class="close-link">Kategorie</a></li>
            <li class="nav-item"><a href="/about" class="close-link">O nas</a></li>
            <li class="nav-item"><a href="/statute" class="close-link">Regulamin</a></li>
            <li class="nav-item"><a href="/" class="close-link">Kontakt</a></li>
        </ul>
    </nav>
    <div class="links">
        <a href="/cart" id="cartNumber"><i class="ri-shopping-cart-line"></i>
            <p id="cart-total">
                @if($itemsQuantity)
                    {{ array_sum($itemsQuantity) }}
                @else
                    0
                @endif
            </p>
        </a>
        <a href="/account"><i class="ri-account-circle-fill"></i></a>
    </div>
    <div class="hamburger-menu">
        <span class="bar-menu"></span>
        <span class="bar-menu"></span>
        <span class="bar-menu"></span>
    </div>
</header>
