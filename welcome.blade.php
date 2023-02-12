<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Spotify</title>
    <style>
        nav {
            margin: 0;
            display: flex;
            justify-content: space-between;
            background-color: none;
            color: white;
            font-family: spotify-circular, Circular, Helvetica, Arial, sans-serif;
            width: 100%;
            height: 100%;
        }

        nav li {
            display: inline-block;
            float: right;
            font-size: 20px;
        }

        nav li a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: white;

        }

        nav h2 {
            font-size: 27px;
            float: left;
            margin-left: 15px;
            cursor: pointer;
        }

        nav li a:hover {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: rgb(47, 255, 0);

        }

        .main {
            background-color: #f037a5;
            height: 300px;
            margin: 0 auto;
            margin-top: 0px;
            display: block;
            justify-content: center;
            text-align: center;
            padding-top: 10px;



        }

        .Tit {
            font-size: 20px;
            color: white;
            margin: 0 auto;
            margin-top: 20px;
        }

        body {
            background-color: #0c0c0c;
            font-family: 'Roboto', sans-serif;
            display: block;
        }

        .sub {
            margin-top: 50px;
            color: white;
        }

        .btn1 {
            padding: 15px;
            border-radius: 25px;
            background-color: #000000;
            color: white;
            margin-right: 20px;
            width: 170px;
            font-size: 15px;
        }

        .btn2 {
            padding: 15px;
            border-radius: 25px;
            background-color: #f037a5;
            color: rgb(0, 0, 0);
            border: 1px solid white;
            width: 170px;
            font-size: 15px;
        }

        .planos {
            padding: 40px;
            color: white;

        }

        .btn1:hover {
            padding: 17px;
            border-radius: 25px;
            background-color: #000000;
            color: white;
            margin-right: 20px;
            width: 180px;
            transition: 300ms;
            font-size: 16px;
        }

        .btn2:hover {
            padding: 17px;
            border-radius: 25px;
            background-color: #f037a5;
            color: rgb(0, 0, 0);
            border: 1px solid white;
            width: 180px;
            transition: 300ms;
            font-size: 16px;
        }

        .main p {
            margin-top: 0px;
            color: white;
            font-size: 12px;
        }

        .Porque h1 {
            font-size: 35px;
            font-weight: bold;
            color: white;
            margin-top: 55px;
        }

        .Porque {
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .escolha {
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
        }

        .cards {
            display: flex;
            margin: 0 auto;
            width: 100%;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-bottom: 50px;
            border-radius: 20px;
        }

        .card {
            display: block;
            height: 500px;
            background-color: white;
            width: 500px;
            border-radius: 20px;
        }

        .container {
            display: flex;
            margin: 0 auto;
            width: 100%;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .destaque {
            font-size: 10px;
            margin-left: 5px;
        }

        .destaque p {
            font-size: 15px;
            margin-left: 5px;
            margin-top: 4px;
            border: 1px solid blue;
            padding: 4px;
            color: blue;
            width: 250px;
        }

        .destaque h2 {
            background-color: rgb(23, 23, 215);
            color: white;
            padding: 4px;
            width: 350px;
            margin-left: 5px;
        }

        .plan {
            background: none;
        }

        .bene ul {
            margin-top: 70px;
            list-style: outside;
        }

        .bene li {
            margin-bottom: 10px;
            float: left;
        }

        .cards input {
            width: 50%;
            margin-bottom: 10px;
            margin-top: 50px;
            padding: 10px;
            border-radius: 20px;
            color: white;
            background-color: #000000;
            font-size: 18px;
        }

        .cards input:hover {
            font-size: 20px;
            width: 55%;
            transition: 400ms;
        }
        footer img{
            width: 150px;
            height: 50px;
        }
        .footerul{
            color:white;
            display:flex;
            justify-content: center;
            text-align: center;
        }
        .footerul ul{
            list-style: none;
            margin-right:15%;
        }
        .footerul ul li{
            display:block;
            margin-bottom:10px;
            margin-top: 0px;
            color:white;
        }
        .footerul ul li:hover{
            display:block;
            margin-bottom:10px;
            margin-top: 0px;
            color:rgb(55, 206, 0);
        }
        .footerul ul h4{
            color:grey;
        }
        Footer p{
            color:rgb(140, 129, 129);
            text-align: center;
            margin-top:50px;
        }
    </style>

</head>

<body>
    <nav>
        <div>
            <img src="data:image/png;base64,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"
                style="height:40px;width:120px;float:left;margin-top:17px;margin-left:50px;">
        </div>

        <ul>
            <li><a href="">Baixar</a></li>
            <li><a href="">Suporte</a></li>
            <li><a href="">Premium</a></li>
        </ul>

        <ul>
            <li><a href="">Inscreva-se</a></li>
            <li><a href="">Entrar</a></li>
        </ul>
    </nav>
    <div class="main">
        <div class="Tit">
            <h1>Curta Nosso Premium</h1>
        </div>
        <div class="sub">
            <h2>Depois, pague somente R$ 19,90/mês. Cancele quando quiser.</h2>
        </div>
        <div class="planos">
            <input type="Submit" name="COMECE AGORA" value="COMECE AGORA" class="btn1">
            <input type="Submit" name="VER PLANOS" value="VER PLANOS" class="btn2">
        </div>
        <p>Promoção não serve para quem ja tem o spotify</p>
    </div>
    <div class="Porque">
        <div>
            <img src="./Foto.png" alt="" srcset="" style="height:100%;width:100%">
        </div>
    </div>
    <div class="container">
        <div class="escolha">
            <h2>Escolha seu plano Premium</h2>
            <p>Ouça sem limites no seu celular, alto-falante e em outros dispositivos.</p>
        </div>
    </div>
    <div class="cards">
        <div class="card">
            <div class="destaque">
                <h2>Faça uma assinatura e tenha 2 meses grátis</h2>
                <p>Pagamento único disponível</p>
            </div>
            <div class="plan">
                <h1>Individual</h1>
                <p>R$ 19,90/mês após o período da oferta,

                    1 conta</p>
            </div>
            <div class="bene">
                <ul>
                    <li>Ouça músicas sem anúncios</li>
                    <li>Ouça em qualquer lugar — até quando estiver offline</li>
                    <li>Ouça músicas na ordem que quiser</li>
                    <li>Faça um plano pré-pago ou uma assinatura</li>
                </ul>
            </div>
            <input type="button" value="Comece Agora">


        </div>
    </div>
    <div class="cards">
        <div class="card">
            <div class="destaque">
                <h2>Faça uma assinatura e tenha 2 meses grátis</h2>
                <p>Pagamento único disponível</p>
            </div>
            <div class="plan">
                <h1>Individual</h1>
                <p>R$ 19,90/mês após o período da oferta,

                    1 conta</p>
            </div>
            <div class="bene">
                <ul>
                    <li>Ouça músicas sem anúncios</li>
                    <li>Ouça em qualquer lugar — até quando estiver offline</li>
                    <li>Ouça músicas na ordem que quiser</li>
                    <li>Faça um plano pré-pago ou uma assinatura</li>
                </ul>
            </div>
            <input type="button" value="Comece Agora">


        </div>
    </div>
    <div class="cards">
        <div class="card">
            <div class="destaque">
                <h2>Faça uma assinatura e tenha 2 meses grátis</h2>
                <p>Pagamento único disponível</p>
            </div>
            <div class="plan">
                <h1>Individual</h1>
                <p>R$ 19,90/mês após o período da oferta,

                    1 conta</p>
            </div>
            <div class="bene">
                <ul>
                    <li>Ouça músicas sem anúncios</li>
                    <li>Ouça em qualquer lugar — até quando estiver offline</li>
                    <li>Ouça músicas na ordem que quiser</li>
                    <li>Faça um plano pré-pago ou uma assinatura</li>
                </ul>
            </div>
            <input type="button" value="Comece Agora">


        </div>
    </div>
    <div class="cards">
        <div class="card">
            <div class="destaque">
                <h2>Faça uma assinatura e tenha 2 meses grátis</h2>
                <p>Pagamento único disponível</p>
            </div>
            <div class="plan">
                <h1>Individual</h1>
                <p>R$ 19,90/mês após o período da oferta,

                    1 conta</p>
            </div>
            <div class="bene">
                <ul>
                    <li>Ouça músicas sem anúncios</li>
                    <li>Ouça em qualquer lugar — até quando estiver offline</li>
                    <li>Ouça músicas na ordem que quiser</li>
                    <li>Faça um plano pré-pago ou uma assinatura</li>
                </ul>
            </div>
            <input type="button" value="Comece Agora">

        </div>
    </div>
    <footer>
        <div>
            <div>
                <img src="data:image/png;base64,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" alt="" srcset="">
            </div>
            <div class="footerul">
                <div class="li1">
                    <ul>
                        <h4>Empresa</h4>
                        <li>Sobre</li>
                        <li>Empregos</li>
                        <li>For the Record</li>
                    </ul>
                </div>
                <div class="li2">
                    <ul>
                        <h4>Comunidade</h4>
                        <li>Para Artistas</li>
                        <li>Desenvolvedores</li>
                        <li>Publicidade</li>
                        <li>Investidores</li>
                        <li>Fornecedores</li>
                    </ul>
                </div>
                <div class="li3">
                    <ul>
                        <h4>Links úteis</h4>
                        <li>Suporte</li>
                        <li>Player da Web</li>
                        <li>Aplicativo móvel</li>
                    </ul>
                </div>
            </div>
        </div>
        <p>Copyryght by Guibeck_Gino</p>
    </footer>

</body>

</html>
