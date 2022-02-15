<link href="{{ asset('css/navi.css') }}" media="all" rel="stylesheet" type="text/css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div class="navbar">
    <h1><a href="/">Website Logo</a></h1>
    <div class="links">
        <ul class="nav-menu">
            <li class="nav-item"><a href="" class="close-link" id="active">Home</a></li>
            <li class="nav-item"><a href="" class="close-link">Kategorie</a></li>
            <li class="nav-item"><a href="" class="close-link">O nas</a></li>
            <li class="nav-item"><a href="" class="close-link">Regulamin</a></li>
            <li class="nav-item"><a href="" class="close-link">Kontakt</a></li>
        </ul>
    </div>
    <div class="hamburger-menu">
        <span class="bar-menu"></span>
        <span class="bar-menu"></span>
        <span class="bar-menu"></span>
    </div>
    <div class="links-2">
        <a href="/cart"><i class="ri-shopping-cart-line"></i></a>
        <p id="cart-total">
            @if($cart)
            {{ $cart->item1Quantity+$cart->item2Quantity }}
            @else
                0
            @endif
        </p>
        <a href="/account"><i class="ri-account-circle-fill"></i></a>
    </div>
</div>