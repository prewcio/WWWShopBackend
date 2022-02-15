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
                <div>
                    <h5>Produkty: <strong>
                            {{ array_sum($itemsQuantity) }}
                       @foreach($items as $item)
                       @endforeach
        </strong></h5>
                </div>
                <div>
                    <h5>Razem: <strong><span name="final-price"></span> PLN</strong></h5>
                </div>
                <div class="space-btn"><a href="/order">Potwierdzenie</a></div>
            </div>
        </div>

        <br>
    </div>
</div>
@include('footer')

