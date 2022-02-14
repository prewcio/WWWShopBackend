@include('navi')
<link href="{{ asset('css/order.css') }}" media="all" rel="stylesheet" type="text/css" />
<div class="content">
    <form action="{{ action('OrdersController@order') }}">
        <br><br><br><br><br>
        <h1 class="account">Konto</h1>
        <input type="email" placeholder="Adres E-mail" required>

        <h1 class="deliver">Dostawa</h1>
        <div class="delivery">
            <label for="kurier">
            <input type="radio" name="dostawa" id="kurier" value="kurier" required><span>Kurier Inpost</span></label>
            <label for="osobisty">
            <input type="radio" name="dostawa" id="osobisty" value="osobisty" required><span>Odbiór Osobisty</span></label>
        </div>

        <h1 class="payment">Płatność</h1>
        <div class="pay">
            <label for="dotpay">
            <input type="radio" name="payment" id="dotpay" value="dotpay" required><span>Płatność Online - dotpay</span></label>
            <label for="payu">
            <input type="radio" name="payment" id="payu" value="payu" required><span>Płatność Online - PayU</span></label>
        </div>
    </form>
</div>
@include('footer')

