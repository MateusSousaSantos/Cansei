@extends('layouts.app')
<style>

body 
{
    margin: 0;
    padding: 0;
    font-family: "Lexend Exa", sans-serif;
    font-weight: 600;
    background-color: #ECE0D3;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
}

/* HEADER */

header {
    padding: 3vh;
    background-color: #ece0d3;
    display: flex;
    justify-content: space-between;
}
h1 {
    color: #5a8b94;
    font-family: "Koulen";
    font-size: 40px;
}
h2{
    color: #5a8b94;
    font-family: "Koulen";
    font-size: 22px;
}

/* SECTION */

#formulario{
    display: flex;
	flex-direction: row;
    text-align: left;
    align-items: left;
    
}

.container{
    font-family: "Lexend Exa", sans-serif;
    background-color: aliceblue;
    width: 100%;
    height: 70vh;
    display: flex;
	flex-direction: column;
    text-align: center;
    align-items: center;
    align-content: center;
}

form{
    align-content: center;
    align-items: center;
    align-self: center;
    justify-content: center;
    display: flex;
}

#titulo-section{
    font-family: "Lexend Exa", sans-serif;
    margin-top: 4vh;
}

#coluna1{
	display: flex;
	flex-direction: column;
    padding: 5vh;
}

#coluna2{
	display: flex;
	flex-direction: column;
    padding: 5vh;
}

#div-chekbox{
    margin-top: 2vh;
    margin-bottom: 1vh;
}

.label-check{
    display: inline-flex;
    align-items: center;
}

label{
    margin-top: 2vh;
    margin-bottom: 1vh;
}

.checkbox{
    position: relative;
    background-color: transparent;
    border-color: #5a8b94;
    border-style: solid;
    width: 3vh;
    height: 3vh;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

.checkbox:checked::before{
    content: '\2713';
    position: absolute;
    top: 0;
    left: 3px;
    font-size: 18px;
    color: #5a8b94;
}

input{
    background-color: transparent;
    border-color: #5a8b94;
    border-style: solid;
    border-width: 2.5px;
    border-radius: 0.5vh;
    height: 3vh;
}

textarea,.AdcImg{
    background-color: transparent;
    border-color: #5a8b94;
    border-style: solid;
    border-width: 2.5px;
    border-radius: 0.5vh;
    height: 20vh;
    width: 300px;
    height: 150px;
    max-width: 300px;
    max-height: 150px;
    min-width: 300px;
    min-height: 150px;
    resize: none;
}


button{
    height: 5vh;
    width: 18vh;
    font-size: 2vh;
    background-color: none;
    border-color: rgb(242, 154, 36);
    color: rgb(242, 154, 36);
    border: solid 2.5px;
    border-radius: 10vh;
    font-family: "Lexend Exa", sans-serif;
    cursor: pointer;
}

button:hover {
    background-color: rgb(242, 154, 36);
    color: #ffffff;
    border-color: #ffffff;
}

@media screen and (max-width: 576px) { /*mobile*/

    #formulario{
        display: flex;
        flex-direction: column;
        text-align: center;
        align-items: center;
    }

    .container{
        height: 135vh;
    }
    header img{
        width: 30%;
        margin-right: 2vh;
      }
      h1 {
        font-size: 30px;
      }
      h2{
        font-size: 17px;
      }
    
}

@media screen and (min-width: 577px) and (max-width: 768px) {/*tablet*/
    #formulario{
        display: flex;
        flex-direction: column;
        text-align: center;
        align-items: center;
    }

    .container{
        height: 150vh;
    }
}

footer{
    background-color: #2A2F3A;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 2vh;
    padding: 2vh;
  }
  footer h3{  
    font-family: "Koulen";
    font-weight: 300;
    font-size: 35px;
    color: white;
  }
  .integrantes{
    flex-wrap: wrap;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 5vh;
  }
  .integrantes div{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .integrantes div img{
    width: 100%;
  }
  .integrantes div p{
    font-family: "Lexend Exa", sans-serif;
    color: #ece0d3;
  }
  footer > .integrantes ~ h3{
    margin: 1vh;
  }
</style>

@section('conteudo')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@100..900&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Koulen' rel='stylesheet'>
    <link rel="stylesheet" href="formulario.css">
    <title>Formulário</title>
</head>

<body>

    <header>
        <img src="Logo Cansei SVG.svg" alt="LogoMarca Cansei" width="20%" class="Logo">
        <div>
            <h2>Cansado dos seus produtos?</h2>
            <h1>DESCUBRA NOVOS!</h1>
        </div>
    </header>

    <section class="container">
        <a href="/produtos"><svg width="25%" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg" transform="matrix(-1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.144"></g><g id="SVGRepo_iconCarrier"> <g id="Arrow / Arrow_Circle_Right"> <path id="Vector" d="M13 15L16 12M16 12L13 9M16 12H8M21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21C16.9706 21 21 16.9706 21 12Z" stroke="#EF674D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg></a>
        <h2 id="titulo-section">Crie aqui um anúncio para o seu produto!</h2>
        <form action="/store" method="post" enctype="multipart/form-data">
            @csrf
            <section id="formulario">
                <div id="coluna1">
                    <label for="foto:">Foto</label>
                    <input type="file" class="AdcImg"  accept="image/png, image/jpeg, image/gif"  id="image" name="image" />
                    <div id="div-chekbox">
                        <label class="label-check">Usado
                            <input type="checkbox" class="checkbox" id="tipo" name="tipo">
                        </label>
                    </div>
                </div>
                <div id="coluna2">
                    <label for="">Título:</label>
                    <input type="text" name="titulo" id="titulo">
                    <label for="">Preço:</label>
                    <input type="text" name="preco" id="preco">
                    <label for="">Descrição:</label>
                    <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
                </div>
            </section>
            <button>Enviar</button>
        </form>
    </section>

    <footer>
        <h3>G R U P O:</h3>
        <div class="integrantes">
            <div>
                <img src="MembroAlice.png" alt="Aslice">
                <p>Alice Lunardi</p>
            </div>
            <div>
                <img src="MembroAna.png" alt="Ana">
                <p>Ana Clara Lima</p>
            </div>
            <div>
                <img src="MembroHenrique.png" alt="Henrique">
                <p>Henrique Dayrell</p>
            </div>
            <div>
                <img src="MembroMateus.png" alt="Mateus">
                <p>Mateus de Sousa</p>
            </div>
            <div>
                <img src="MembroSophia.png" alt="Sophia">
                <p>Sophia Meirelles</p>
            </div>
        </div>
        <h3>3A1 - Projeto de DevWeb</h3>
    </footer>
</body>
@endsection