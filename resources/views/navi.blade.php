<link href="{{ asset('css/navi.css') }}" media="all" rel="stylesheet" type="text/css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
