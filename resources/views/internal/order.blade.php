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
{{--        @for($i = 0; $i<sizeof($items); $i++)--}}
{{--            @if($itemsQuantity[$i]>0)--}}
{{--                <div class="box-element">--}}
{{--                    <div class="cart-row">--}}
{{--                        <div style="flex:2"><img src="{{ $items[$i]->productImg }}" alt="Stół" class="row-image"/></div>--}}
{{--                        <div style="flex:2">--}}
{{--                            <p>{{ $items[$i]->productName }}</p>--}}
{{--                        </div>--}}
{{--                        <div style="flex:1">--}}
{{--                            <p><span id="price">{{ $items[$i]->productPrice }}</span> PLN</p>--}}
{{--                        </div>--}}
{{--                        <div style="flex:1">--}}
{{--                            <p class="quantity" id="qua">{{ $itemsQuantity[$i] }}</p>--}}
{{--                            <div class="quantity">--}}
{{--                                <img class="chg-quantity" src="{{asset('img/arrow_up.png')}}" onclick="window.location.href = '{{ url('/addToCart/'.$items[$i]->id) }}'">--}}
{{--                                <img class=" chg-quantity" src="{{asset('img/arrow_down.png')}}" onclick="window.location.href = '{{ url('/removeFromCart/'.$items[$i]->id) }}'">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div style=" flex:1">--}}
{{--                            <p><span name="final-price">{{ $items[$i]->productPrice*$itemsQuantity[$i] }}</span> PLN</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        @endfor--}}
        @if($cart!=null)
            @for($i = 0; $i<sizeof($items); $i++)
        <div class="sum-item">
                    <div class="item-info">
                        <img src="{{ $items[$i]->productImg }}" height="100px">
                        <h3>{{ $items[$i]->productName }}</h3>
                        <br><br>
                        <span class="quan">{{ $itemsQuantity[$i] }} szt.</span>
                        <span class="price">{{ number_format($items[$i]->productPrice,2) }} PLN</span>
                    </div>

        </div>
        @endfor
        @else
            <p>Brak produktów w koszyku</p>
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
            <h3>Wartość koszyka: 0 zł</h3>
            <h3>Dostawa: 0,00 zł</h3>
        </div>
        <div class="sum-item">
            <h3>Do zapłaty: <strong>0,00 zł</strong></h3>
        </div>

    </div>
</div>
@include('footer')

