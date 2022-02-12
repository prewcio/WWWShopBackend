<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;0,900;1,700&display=swap');
    :root {
        --color-gold: #DFBD69;
        --color-black: #000;
        --color-white: #FFF;
        --color-gray: #8D8D8D;
    }
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
        overflow-x: hidden;
        scroll-behavior: smooth;
        transition: 0.3s;
    }

    footer{
        background-color: var(--color-gold);
        padding: 20px;
        color: var(--color-white);
        font-size: 14px;
        position: fixed;
        width: 100%;
        bottom: 0;
    }
    footer p {
        margin-left: 150px;
    }
    @media screen and (max-width: 768px) {
        footer {
            background-color: var(--color-gold);
            padding: 20px;
            color: var(--color-white);
            font-size: 14px;
        }

        footer p {
            margin-left: 0px;
            text-align: center;
        }
    }
</style>

<footer>
    <div>
        <p>&copy; <script>var CurrentYear = new Date().getFullYear();document.write(CurrentYear)</script> Nazwa firmy Wszelkie prawa zastrzeżone</p>
    </div>
</footer>
