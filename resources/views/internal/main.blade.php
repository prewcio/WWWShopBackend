@include('navi')
<style>
    .split {
        display: flex;
        flex-direction: column;
    }

    .container {
        margin-inline: auto;
        width: min(90%, 110rem);
        margin-left: auto;
        margin-right: auto;
        margin-top: 120px;
    }
    .contact {
        margin-bottom: 80px;
    }

    .contactForm {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .contactForm input {
        font-size: 16px;
        display: flex;
        flex-direction: column;
        width: 450px;
        height: 35px;
        margin-top: 10px;
        background-color: #E0E0E0;
        color: var(--color-gray);
        outline: 0;
        border: none;
        padding: 10px;
    }

    .contactForm textarea {
        padding: 10px;
        font-size: 16px;
        margin-top: 10px;
        width: 450px;
        background-color: #E0E0E0;
        color: var(--color-gray);
        outline: 0;
        border: none;
    }

    .contactForm button {
        font-size: 20px;
        background-color: var(--color-gold);
        color: var(--color-white);
        border: none;
        outline: 0;
        width: 450px;
        height: 35px;
        text-align: center;
        margin: 5px 0px 5px 0px;
        cursor: pointer;
    }

    .contact-us {
        text-align: center;
        margin-top: 100px;
    }

    .contact-us h1 {
        color: var(--color-black);
        font-weight: 500;
    }

    .contact-us p {
        font-size: 20px;
        color: var(--color-gray);
    }

    .contact-us i {
        color: var(--color-gold);
        font-size: 40px;
    }

    @media (min-width:40em) {
        .split {
            flex-direction: row;
        }

        .split>* {
            flex-basis: 100%;
        }

        .split>*+* {
            margin-left: 2em;
        }
    }

    @media (min-width: 560px) and (max-width: 1024px) {
        .split {
            flex-direction: column;
        }

        .split>* {
            flex-basis: 100%;
        }

        .split>*+* {
            margin-left: 2em;
        }
    }
    @media screen and (max-width: 768px) {
        .contactForm input {
            font-size: 16px;
            width: 350px;
        }

        .contactForm textarea {
            width: 350px;
            font-size: 16px;
        }

        .contactForm button {
            width: 350px;
            font-size: 16px;
        }

        .contact-us h1 {
            font-size: 26px;
        }

        .contact-us p {
            font-size: 18px;
        }

        .contact-us i {
            font-size: 35px;
        }
    }
</style>
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
