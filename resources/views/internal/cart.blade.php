@include('navi')
<link href="{{ asset('css/cart.css') }}" media="all" rel="stylesheet" type="text/css" />
<!-- <div class="content">
<div class="row">
    @if( $cart )
        @if( $cart->item1Quantity > 0)
        <div class="box-element">
            <img src="{{ $product1->productImg }}" alt="Stół" width="100px"/>
            <h3>Nazwa:</h3><p>{{ $product1->productName }}</p>
            <h3>Cena za szt:</h3><p>{{ $product1->productPrice }}</p>
            <h3>Ilosc:</h3><p>{{ $cart->item1Quantity }}</p>
            <h3>Cena koncowa:</h3><p>{{ $product1->productPrice*$cart->item1Quantity }}</p>
        </div>
        @endif
        @if( $cart->item2Quantity > 0)
        <div class="box-element">
            <img src="{{ $product2->productImg }}" alt="Stół" width="100px">
            <h3>Nazwa:</h3><p>{{ $product2->productName }}</p>
            <h3>Cena za szt:</h3><p>{{ $product2->productPrice }}</p>
            <h3>Ilosc:</h3><p>{{ $cart->item2Quantity }}</p>
            <h3>Cena koncowa:</h3><p>{{ $product2->productPrice*$cart->item2Quantity }}</p>
        </div>
        @endif
    @endif
</div>
</div> -->

<div class="content">
    <div class="row">
        <div class="box-element">
            <div class="shop-btn">
                <a href="/">&#x2190; Kontynuj zakupy</a>
            </div>
            <br>
            <hr>
            <br>
            <div class="space">
                <div>
                    <h5>Produkty: <strong>            
                        @if($cart)
                        {{ $cart->item1Quantity+$cart->item2Quantity }}
                        @else
                            0
                        @endif
        </strong></h5>
                </div>
                <div>
                    <h5>Razem: <strong><span name="final-price">{{ $product1->productPrice }}</span> PLN</strong></h5>
                </div>
                <div class="space-btn"><a>Potwierdzenie</a></div>
            </div>
        </div>

        <br>
        @if( $cart )
        @if( $cart->item1Quantity > 0)
        <div class="box-element">
            <div class="cart-row">
                <div style="flex:2"></div>
                <div style="flex:2"><strong>Produkt</strong></div>
                <div style="flex:1"><strong>Cena</strong></div>
                <div style="flex:1"><strong>Ilość</strong></div>
                <div style="flex:1"><strong>Razem</strong></div>
            </div>

            <div class="cart-row">
                <div style="flex:2"><img src="{{ $product1->productImg }}" alt="Stół" width="100px"/></div>
                <div style="flex:2">
                    <p>{{ $product1->productName }}</p>
                </div>
                <div style="flex:1">
                    <p><span id="price">{{ $product1->productPrice }}</span> PLN</p>
                </div>
                <div style="flex:1">
                    <p class="quantity" id="qua">{{ $cart->item1Quantity }}</p>
                    <div class="quantity">
                        <img class="chg-quantity" src="{{asset('img/arrow_up.png')}}" id="qua-up">
                        <img class=" chg-quantity" src="{{asset('img/arrow_down.png')}}" id="qua-down">
                    </div>
                </div>
                <div style=" flex:1">
                    <p><span name="final-price">{{ $product1->productPrice }}</span> PLN</p>
                </div>
            </div>
            </div>
            @endif
            <br>
            @if( $cart->item2Quantity > 0)
            <div class="box-element">
            <div class="cart-row">
                <div style="flex:2"></div>
                <div style="flex:2"><strong>Produkt</strong></div>
                <div style="flex:1"><strong>Cena</strong></div>
                <div style="flex:1"><strong>Ilość</strong></div>
                <div style="flex:1"><strong>Razem</strong></div>
            </div>

            <div class="cart-row">
                <div style="flex:2"><img src="{{ $product2->productImg }}" alt="Stół" width="100px"/></div>
                <div style="flex:2">
                    <p>{{ $product2->productName }}</p>
                </div>
                <div style="flex:1">
                    <p><span id="price">{{ $product2->productPrice }}</span> PLN</p>
                </div>
                <div style="flex:1">
                    <p class="quantity" id="qua">{{ $cart->item2Quantity }}</p>
                    <div class="quantity">
                        <img class="chg-quantity" src="{{asset('img/arrow_up.png')}}" id="qua-up">
                        <img class=" chg-quantity" src="{{asset('img/arrow_down.png')}}" id="qua-down">
                    </div>
                </div>
                <div style=" flex:1">
                    <p><span name="final-price">{{ $product2->productPrice }}</span> PLN</p>
                </div>
            </div>
        @endif
    @endif
    </div>
</div>
@include('footer')

