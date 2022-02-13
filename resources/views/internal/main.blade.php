@include('navi')
<link href="{{ asset('css/main.css') }}" media="all" rel="stylesheet" type="text/css" />
<div class="container container-0">
    <div class="split">
        <div class="text text-0">
            <h1>{{ $product1->productName }}</h1>
            <p>{{ $product1->productDesc }}</p>
            <h2>{{ $product1->productPrice }}</h2>
            <button><a href="#product">Zobacz Ofertę &#x2193;</a></button>
        </div>
        <div class="picture container-0">
            <img src="{{ $product1->productImg }}" alt="Zdjęcie złotego stołu z rybkami">
        </div>
    </div>
</div>
<div class="socials">
    <i class="ri-facebook-fill"></i>
    <i class="ri-instagram-fill"></i>
    <i class="ri-twitter-fill"></i>
</div>
<div class="container" id="product">
    <div class="split">
        <div class="picture container-1">
            <img src="{{ $product2->productImg }}" alt="Zdjęcie złotego stołu z rybkami">
        </div>
        <div class="text text-2">
            <h1>{{ $product1->productName }}</h1>
            <p>{{ $product1->productDesc }}</p>
            <h2>{{ $product1->productPrice }}</h2>
            <button><a>Dodaj do koszyka</a></button>
        </div>
    </div>
</div>
<div class="container">
    <div class="split">
        <div class="text text-1">
            <h1>{{ $product2->productName }}</h1>
            <p>{{ $product2->productDesc }}</p>
            <h2>{{ $product2->productPrice }}</h2>
            <button><a>Dodaj do koszyka</a></button>
        </div>
        <div class="picture container-2">
            <img src="{{ $product1->productImg }}" alt="Zdjęcie złotego stołu z rybkami">
        </div>
    </div>
</div>
<div class="container contact">
    <div class="split">
        <div class="contactForm">
            <form action="{{ url('/sendMessage') }}" method="POST">
                @csrf
                <input type="text" name="name" id="name" placeholder="Imie i Nazwisko" required>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <input type="tel" name="phone" id="phone" placeholder="Numer Telefonu" required>
                <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Wiadomosc" required></textarea><br>
                <button type="submit">Wyślij</button>
                @if(Session::has('sent'))
                    @if(Session::get('sent')==1)
                        <p style="color:green">Wiadomość wysłana!</p>
                    @endif
                @endif
            </form>
        </div>
        <div class="contact-us">
            <h1>Kontakt do nas</h1>
            <p>Lorem ipsum</p>
            <p>Lorem ipsum</p>
            <p>Lorem ipsum</p>
            <p>Lorem ipsum</p>
            <i class="ri-facebook-fill"></i>
            <i class="ri-instagram-fill"></i>
            <i class="ri-twitter-fill"></i>
        </div>
    </div>
</div>
@include('footer')


<div data-aos="zoom-in" data-aos-duration="1000">

</div>
