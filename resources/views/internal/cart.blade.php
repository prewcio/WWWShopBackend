@include('navi')
<link href="{{ asset('css/cart.css') }}" media="all" rel="stylesheet" type="text/css" />
<div class="content">
    <div class="row">
        <div class="box-element">
            <div class="shop-btn">
                <div class="space-btn btn-wd"><a href="/">&#x2190; Kontynuj zakupy</a></div>
            </div>
            <br>
            <hr>
            <br>
            <div class="space">
                <div><h5><strong>Produkty:
                    @if($itemsQuantity)
                        {{ array_sum($itemsQuantity) }}
                    @else
                        0
                    @endif</strong></h5>
                </div>
                <div>
                    <h5>Razem: <strong><span name="final-price">
                                @php
                                    $sum = 0;
                                @endphp
                                @for($i = 0; $i<sizeof($items); $i++)
                                    @php
                                        $sum = $sum+($items[$i]->productPrice*$itemsQuantity[$i])
                                    @endphp
                                @endfor
                                {{ $sum }}
                            </span> PLN</strong></h5>
                </div>
                <div class="space-btn"><a href="/order">Potwierdzenie</a></div>
            </div>
        </div><br>
        @if($itemsQuantity>0)
            @for($i = 0; $i<sizeof($items); $i++)
                @if($itemsQuantity[$i]>0)
                <div class="box-element">
                    <div class="cart-row">
                        <div style="flex:2"><img src="{{ $items[$i]->productImg }}" alt="Stół" class="row-image"/></div>
                        <div style="flex:2">
                            <p>{{ $items[$i]->productName }}</p>
                        </div>
                        <div style="flex:1">
                            <p><span id="price">{{ $items[$i]->productPrice }}</span> PLN</p>
                        </div>
                        <div style="flex:1">
                            <p class="quantity" id="qua">{{ $itemsQuantity[$i] }}</p>
                            <div class="quantity">
                                <img class="chg-quantity" src="{{asset('img/arrow_up.png')}}" onclick="window.location.href = '{{ url('/addToCart/'.$items[$i]->id) }}'">
                                <img class=" chg-quantity" src="{{asset('img/arrow_down.png')}}" onclick="window.location.href = '{{ url('/removeFromCart/'.$items[$i]->id) }}'">
                            </div>
                        </div>
                        <div style=" flex:1">
                            <p><span name="final-price">{{ $items[$i]->productPrice*$itemsQuantity[$i] }}</span> PLN</p>
                        </div>
                    </div>
                </div>
                @endif
            @endfor
        @endif
        <br>
    </div>
</div>
@include('footer')

