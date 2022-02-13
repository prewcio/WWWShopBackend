@include('navi')
<link href="{{ asset('css/auth.css') }}" media="all" rel="stylesheet" type="text/css" />
<div class="content">
    <form action="{{ url('/registerUser') }}" method="POST">
        @csrf
        <input type="text" name="firstName" id="firstName" placeholder="Imie" required>
        <input type="text" name="lastName" id="lastName" placeholder="Nazwisko" required>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <input type="password" name="password" id="password" placeholder="Hasło" required>
        <input type="password" name="passwordVerify" id="passwordVerify" placeholder="Potwierdź Hasło" required>
        <button type="submit">Zarejestruj</button>
    </form>
    <span>Masz już konto? <a href="/login">Zaloguj sie!</a></span>
    @if(Session::has('loginError'))
        @if(Session::get('loginError')==1)
            <p>Chuju hasła się nie zgadzają kurwa</p>
        @endif
    @endif
</div>
@include('footer')

