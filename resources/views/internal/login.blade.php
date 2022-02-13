@include('navi')
<link href="{{ asset('css/auth.css') }}" media="all" rel="stylesheet" type="text/css" />
<div class="content">
    <form action="{{ url('/loginCheck') }}" method="POST">
        @csrf
        <input type="email" name="email" id="email" placeholder="Email" required>
        <input type="password" name="password" id="password" placeholder="Hasło" required><br>
        <button type="submit">Zaloguj</button>
    </form>
    <span>Nie masz jeszcze konta? <a href="/register">Zarejestruj sie!</a></span>
    @if(Session::has('loginError'))
        @if(Session::get('loginError')==1)
            <p>Nie istniejesz gościu</p>
        @endif
        @if(Session::get('loginError')==2)
        <p>Błędne Hasło</p>
        @endif
    @endif
    @if(Session::has('regSuccess'))
        @if(Session::get('regSuccess')==1)
            <p>Zarejestrowano pomyślnie. Teraz się zaloguj.</p>
        @endif
    @endif
</div>
@include('footer')

