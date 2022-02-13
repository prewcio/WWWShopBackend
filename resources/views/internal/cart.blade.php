@include('navi')
<style>
    .content {
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .content input {
        font-size: 16px;
        display: flex;
        flex-direction: column;
        width: 450px;
        height: 35px;
        margin-top: 10px;
        background-color: #E0E0E0;
        color: #3D3D3D;
        outline: 0;
        border: none;
        padding: 10px;
    }

    .content button {
        font-size: 16px;
        background-color: var(--color-gold);
        color: var(--color-white);
        border: none;
        outline: 0;
        width: 450px;
        height: 35px;
        text-align: center;
        margin: 10px 0px 10px 0px;
        cursor: pointer;
    }

    .content label {
        font-weight: 500;
        font-size: 16px;
    }

    .content p {
        color: var(--color-black);
    }
</style>
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

