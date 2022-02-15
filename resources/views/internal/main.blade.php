@include('navi')
<link href="{{ asset('css/main.css') }}" media="all" rel="stylesheet" type="text/css" />
<button onclick="topFunction()" id="btn-top"><i class="ri-arrow-up-line"></i></button>
<div class="container contact" data-aos="fade-zoom" data-aos-duration="1000">
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
            <a href="/addToCart/1">OK</a>
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
