@include('navi')
<style>
    .content {
        margin: 100px 0px 0px 20px;
        color: var(--color-gold);
    }

    .content h1 {
        font-weight: 600;
        font-size: 2.5rem;
    }

    .content p {
        font-size: 1.5rem;
    }
    @media screen and (max-width: 768px) {
        .content h1 {
            font-size: 2em;
        }

        .content p {
            font-size: 1.3rem;
        }
    }
    .content a {
        font-size: 2rem;
        color: var(--color-gold);
        text-decoration: none;
        font-weight: 600;
    }
    .content a:visited {
        color: var(--color-gold);
        text-decoration: none;
    }
    .content a:hover {
        text-decoration: underline;
    }
</style>
@if(isset($_COOKIE['sessionID']))
    <div class="content">
        <h1>Moje Konto</h1><br>
        <h1>Imię i Nazwisko</h1>
        <p>{{ $customer->firstName }} {{ $customer->lastName }}</p>
        <h1>Adres E-Mail</h1>
        <p>{{ $customer->email }}</p>
        <a href="/logout">Wyloguj Zjeba</a>
    </div>
@endif
@include('footer')

