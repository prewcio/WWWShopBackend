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
    </div>
</div>
@include('footer')

