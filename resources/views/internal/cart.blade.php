@include('navi')
<link href="{{ asset('css/cart.css') }}" media="all" rel="stylesheet" type="text/css" />
<div class="content">
    @if( $cart )
        @if( $cart->item1Quantity > 0)
            <h3>Nazwa:</h3><p>{{ $product1->productName }}</p>
            <h3>Cena za szt:</h3><p>{{ $product1->productPrice }}</p>
            <h3>Ilosc:</h3><p>{{ $cart->item1Quantity }}</p>
            <h3>Cena koncowa:</h3><p>{{ $product1->productPrice*$cart->item1Quantity }}</p>
            <img src="{{ $product1->productImg }}" alt="Stół" width="100px"/>
        @endif
        @if( $cart->item2Quantity > 0)
                <h3>Nazwa:</h3><p>{{ $product2->productName }}</p>
                <h3>Cena za szt:</h3><p>{{ $product2->productPrice }}</p>
                <h3>Ilosc:</h3><p>{{ $cart->item2Quantity }}</p>
                <h3>Cena koncowa:</h3><p>{{ $product2->productPrice*$cart->item2Quantity }}</p>
                <img src="{{ $product2->productImg }}" alt="Stół" width="100px">
        @endif
    @endif
</div>
@include('footer')

