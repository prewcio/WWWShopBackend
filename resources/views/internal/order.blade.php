@include('navi')
<link href="{{ asset('css/order.css') }}" media="all" rel="stylesheet" type="text/css" />
<div class="content">
    <div class="form">
        <form action="{{ action('OrdersController@order') }}">
            <br><br><br><br><br>
            <h1 class="account">Konto</h1>
            <input type="email" placeholder="Adres E-mail" required>

            <h1 class="deliver">Dostawa</h1>
            <div class="delivery">
                <label for="kurier">
                <input type="radio" name="dostawa" id="kurier" value="kurier" required>
                    <div class="item">
                        <span>Kurier - InPost</span>
                        <i class="ri-truck-line"></i>
                    </div>
                </label>
                <label for="osobisty">
                <input type="radio" name="dostawa" id="osobisty" value="osobisty" required>
                    <div class="item">
                        <span>Odbiór Osobisty</span>
                        <i class="ri-home-2-line"></i>
                    </div>
                </label>
            </div>

            <h1 class="payment">Płatność</h1>
            <div class="pay">
                <label for="dotpay">
                <input type="radio" name="payment" id="dotpay" value="dotpay" required>
                    <div class="item">
                        <span>Płatność online</span>
                        <img src="{{ asset('img/dotpay.png') }}" alt="dotpay" height="25px">
                    </div>
                </label>
                <label for="payu">
                <input type="radio" name="payment" id="payu" value="payu" required>
                    <div class="item">
                        <span>Płatność online</span>
                        <img src="{{ asset('img/payu.png') }}" alt="PayU" height="35px">
                    </div>
                </label>
            </div>
        </form>
    </div>
    <div class="summary">
        @if($cart)
            @if($cart->item1Quantity>0)
                <div class="sum-item">
                        <div class="item-info">
                            <img src="{{ $product1->productImg }}" alt="Stół" height="100px">
                            <h3>{{ $product1->productName }}</h3>
                            <p><span class="quan">{{ $cart->item1Quantity }} szt.</span><span class="price">{{ $cart->item1Quantity*$product1->productPrice }} zł</span></p>
                        </div>
                </div>
            @endif
            @if($cart->item2Quantity>0)
                <div class="sum-item">

                        <div class="item-info">
                            <img src="{{ $product2->productImg }}" alt="Stół" height="100px">
                            <h3>{{ $product2->productName }}</h3>
                            <p><span class="quan">{{ $cart->item2Quantity }} szt.</span><span class="price">{{ $cart->item2Quantity*$product2->productPrice }} zł</span></p>
                        </div>
                </div>
            @endif
        @endif
        <div class="sum-item">
            <h3>Sposób płatności:</h3>
            <p id="payment-type">BRAK</p>
            <h3>Sposób dostawy:</h3>
            <p id="delivery-type">BRAK</p>
            <h3>Zamówienie wyślemy:</h3>
            <p>Gdy zaksięgujemy płatność.<br>Potwierdzenie wysyłki dostaniesz mailem</p>
        </div>
        <div class="sum-item">
            <h3>Wartość koszyka: {{ ($cart->item2Quantity*$product2->productPrice) + ($cart->item1Quantity*$product1->productPrice) }} zł</h3>
            <h3>Dostawa: 0,00 zł</h3>
        </div>
        <div class="sum-item">
            <h3>Do zapłaty: <strong>0,00 zł</strong></h3>
        </div>

    </div>
</div>
@include('footer')

