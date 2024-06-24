@extends('layouts.app')
<style>
    * {
        margin: 0;
        border: 0px solid red;
    }

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

    h2 {
        color: #5a8b94;
        font-family: "Koulen";
        font-size: 22px;
    }

    section {
        font-family: "Lexend Exa", sans-serif;
        font-weight: 600;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    section h3 {
        margin-bottom: 4vh;
    }

    .produtos {
        margin-top: 2vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .Adicionar {
        margin-left: 40vh;
        width: 3vh;
    }

.produtosGrid {
	display: flex;
	justify-content: center;
	align-items: center;
	width: fit-content;
	flex-wrap: wrap;
	margin: 0 10vh;
	gap: 2vh;
}

.produtosGrid > div {
	width: 30vh;
	height: 30vh;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: space-around;
	padding: 5px;
	background-color: #fff;
	overflow: hidden;
	border: 3px solid #5A8B94;
	border-radius: 1vh;
	position: relative;
}

.produtosGrid div img {
	width: 100%;
	height: 100%;
	object-fit: cover;
}

.produtosGrid div p {
	padding: 0;
	margin: 0;
}

#item-titulo {
	display: flex;
}

.produtosGrid div #informacoes {
	width: 100%;
	height: 50%;
	display: flex;
	flex-direction: row;
	justify-content: space-around;
	align-items: flex-end;
}

#item-hover {
	position: absolute;
	bottom: 0;
	left: 0;
	right: 0;
	background-color: #F29A24;
	overflow: hidden;
	width: 100%;
	height: 0;
	transition: height 0.5s ease;
	visibility: hidden; 
	z-index: 1;
	display: flex;
	flex-direction: column; 
	align-items: center;
	justify-content: space-between;
}

#item-hover p {
	white-space: nowrap; 
	color: white;
	font-size: 20px;
	position: relative;
}

.produtosGrid > div:hover #item-hover {
	height: 100%;
	visibility: visible;
}

    .setas {
        display: flex;
        justify-content: end;
        margin: 3vh;
    }

    .setas a {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .setas svg {
        margin: 1vh;
        width: 30%;
    }

    footer {
        background-color: #2a2f3a;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin-top: 2vh;
        padding: 2vh;
    }

    footer h3 {
        font-family: "Koulen";
        font-weight: 300;
        font-size: 35px;
        color: white;
    }

    .integrantes {
        flex-wrap: wrap;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 5vh;
    }

    .integrantes div {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .integrantes div img {
        width: 100%;
    }

    .integrantes div p {
        font-family: "Lexend Exa", sans-serif;
        color: #ece0d3;
    }

    footer>.integrantes~h3 {
        margin: 1vh;
    }

    @media screen and (max-width: 576px) {

        /*mobile*/
        header img {
            width: 30%;
            margin-right: 2vh;
        }

        h1 {
            font-size: 30px;
        }

        h2 {
            font-size: 17px;
        }

        article {
            display: none;
        }

        section h3 {
            margin-top: 4vh;
        }

        .Adicionar {
            margin-left: 25vh;
            width: 3vh;
        }

        .integrantes div img {
            width: 50%;
        }

        .integrantes div p {
            font-size: 20px;
        }

        .produtosGrid {
            margin: 0 1vh 0 1vh;
        }

        .produtosGrid div {
            min-width: 20vh;
            min-height: 20vh;
        }

        footer>.integrantes~h3 {
            font-size: 30px;
        }
    }

    @media screen and (min-width: 577px) and (max-width: 768px) {

        /*tablet*/
        article {
            flex-wrap: nowrap;
            width: fit-content;
        }

        article div {
            width: calc(30%);
            height: calc(30%);
        }

        section h3 {
            font-size: 22px;
        }

        .produtosGrid div {
            width: 20vh;
            height: 20vh;
        }
    }

    @media screen and (min-width: 769px) and (max-width: 1200px) {
        /*PC*/
    }

</style>
@section('conteudo')
    <header>

        <img src="Logo Cansei SVG.svg" alt="LogoMarca Cansei" width="20%" class="Logo">

        <div>
            <h2>Cansado dos seus produtos?</h2>
            <h1>DESCUBRA NOVOS!</h1>
        </div>

    </header>

    <section>

        <div class="produtos">
            <h3>Produtos</h3>
            <a href="/create" class="Adicionar"><svg viewBox="0 0 32 32" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#F29A24">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <title>plus</title>
                        <desc>Created with Sketch Beta.</desc>
                        <defs> </defs>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                            sketch:type="MSPage">
                            <g id="Icon-Set-Filled" sketch:type="MSLayerGroup"
                                transform="translate(-362.000000, -1037.000000)" fill="#F29A24">
                                <path
                                    d="M390,1049 L382,1049 L382,1041 C382,1038.79 380.209,1037 378,1037 C375.791,1037 374,1038.79 374,1041 L374,1049 L366,1049 C363.791,1049 362,1050.79 362,1053 C362,1055.21 363.791,1057 366,1057 L374,1057 L374,1065 C374,1067.21 375.791,1069 378,1069 C380.209,1069 382,1067.21 382,1065 L382,1057 L390,1057 C392.209,1057 394,1055.21 394,1053 C394,1050.79 392.209,1049 390,1049"
                                    id="plus" sketch:type="MSShapeGroup"> </path>
                            </g>
                        </g>
                    </g>
                </svg></a>
        </div>

        <div class="produtosGrid">
            @foreach ($resultados as $item)
                <div>
                    <img src="{{ asset('storage/images/'.$item->imageName) }}" class="imagem_produto" alt="Product Image">
                    
                        <div id="item-hover">
                        <p id="item-titulo">{{$item->titulo}}</p>
                        <p id="item-descricao">Descrição: {{$item->desc}}</p>
                            <p id="item-preco">R$ {{ number_format($item->preco, 2, ',', '.') }}</p>
                            <p id="item-tipo">tipo: {{ $item->tipo == 1 ? 'usado' : 'novo' }}</p>
                        </div>
                </div>
            @endforeach
        </div>

        <div class="setas">
            <a href=""><svg viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg"
                    transform="matrix(-1, 0, 0, 1, 0, 0)">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC"
                        stroke-width="0.144"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g id="Arrow / Arrow_Circle_Right">
                            <path id="Vector"
                                d="M13 15L16 12M16 12L13 9M16 12H8M21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21C16.9706 21 21 16.9706 21 12Z"
                                stroke="#EF674D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </g>
                </svg></a>
            <a href=""><svg viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg"
                    transform="matrix(1, 0, 0, 1, 0, 0)">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC"
                        stroke-width="0.144"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g id="Arrow / Arrow_Circle_Right">
                            <path id="Vector"
                                d="M13 15L16 12M16 12L13 9M16 12H8M21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21C16.9706 21 21 16.9706 21 12Z"
                                stroke="#EF674D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </g>
                </svg></a>
        </div>

    </section>

    <footer>

        <h3>G R U P O:</h3>

        <div class="integrantes">

            <div>
                <img src="MembroAlice.png" alt="Alice">
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
@endsection
