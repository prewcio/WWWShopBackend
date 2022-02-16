@include('navi')
<link href="{{ asset('css/contact.css') }}" media="all" rel="stylesheet" type="text/css" />
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
    <div class="split">
        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=1215&height=400&hl=en&q=plac%20Defilad%201%20Warszawa+()&t=&z=13&ie=UTF8&iwloc=B&output=embed"></iframe>
    </div>
</div>
@include('footer')
