@extends('layouts.app')
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: "Lexend Exa", sans-serif;
        font-weight: 600;
        background-color: #ece0d3;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    button {
        background-color: #5a8b94;
        color: white;
        width: 28vh;
        height: 6vh;
        font-size: 2.5vh;
        border-radius: 10vh;
        border: none;
        font-family: "Lexend Exa", sans-serif;
        cursor: pointer;
    }

    button:hover {
        background-color: white;
        color: #5a8b94;
        border: 1px solid;
        border-color: #5a8b94;
    }

    #logo {
        margin-top: 12vh;
    }

    #h2-slogan {
        font-family: "Koulen";
        color: #5a8b94;
        font-size: 4.5vh;
    }

    #h3-explain {
        color: #2a2f3a;
        font-size: 3vh;
    }

    @media screen and (max-width: 576px) {
        /*mobile*/

        img {
            width: 50%;
        }

        #divider {
            width: 70%;
        }
    }

    @media screen and (min-width: 577px) and (max-width: 768px) {

        /*tablet*/
        img {
            width: 50%;
        }

        #divider {
            width: 80%;
        }
    }
</style>
@section('conteudo')
    <div class="container">
        <div class="overlay">
            <img src="Logo.png" alt="Logo" id="logo">
            <h2 id="h2-slogan">Cansado dos seus produtos? descubra novos!</h2>
            <img src="Divider.png" alt="Divider" id="divider">
            <h3 id="h3-explain">anuncie aqui seus produtos antigos<br>
                de boa qualidade e adquira novos!
            </h3>
            <a href="/produtos"><button>Clique aqui!</button></a>
        </div>
    </div>
@endsection
