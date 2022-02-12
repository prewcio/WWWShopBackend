@include('navi')
<style>
    .content {
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .content input {
        font-size: 16px;
        display: flex;
        flex-direction: column;
        width: 450px;
        height: 35px;
        margin-top: 10px;
        background-color: #E0E0E0;
        color: #3D3D3D;
        outline: 0;
        border: none;
        padding: 10px;
    }

    .content button {
        font-size: 16px;
        background-color: var(--color-gold);
        color: var(--color-white);
        border: none;
        outline: 0;
        width: 450px;
        height: 35px;
        text-align: center;
        margin: 10px 0px 10px 0px;
        cursor: pointer;
    }

    .content label {
        font-weight: 500;
        font-size: 16px;
    }

    .content p {
        color: var(--color-black);
    }
</style>
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

