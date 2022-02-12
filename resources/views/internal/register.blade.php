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

