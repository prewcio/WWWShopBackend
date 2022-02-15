@include('navi')
<link href="{{ asset('css/account.css') }}" media="all" rel="stylesheet" type="text/css" />
@if(isset($_COOKIE['sessionID']))
    <div class="content">
        <h1>Moje Konto</h1><br>
        <h1>Imię i Nazwisko</h1>
        <p>{{ $customer->firstName }} {{ $customer->lastName }}</p>
        <h1>Adres E-Mail</h1>
        <p>{{ $customer->email }}</p>
        <a href="/logout">Wyloguj się</a>
    </div>
@endif
@include('footer')

