<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        *{
            margin: 0;
            padding: 0;
            list-style: none;
        }

        header{
            position: relative;
            margin:20px auto;
            width: 1000px;
            height: 120px;
            background: #444;

        }

        #logo, .logo__flex{

            position: absolute;
            top: 30px;
            left:30px;
            width: 200px;
            height: 60px;
            background: #ccc;

        }

        .redes{

            position: absolute;
            width: 42px;
            height: 42px;
            background: #000;   
            border-radius: 100%;

        }
        .header__flex{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo__flex{
            position: inherit;
            top: 0;
        }

        .wrapper__redes__flex{
            display: flex;
            margin-right: 15px;
        }

        .redes_flex{
            position: inherit;
            margin: 5px;
        }

        #icono1{
            top: 42px;
            right: 120px;
        }

        #icono2{
            top: 42px;
            right: 69px;
        }

        #icono3{
            top: 42px;
            right: 19px;
        }

        .header__redes--icono1{
            background-color: red;
        }


        nav{

            position: relative;
            margin: auto;
            width: 1000px;
            height: 48px;
            
        }

        .botones{

            float:left;
            width: 196px;
            margin: 0px 2px;
            height: 48px;
            background: #333;


        }

        #top{

            position: relative;
            margin:20px auto;
            width: 1000px;
            height: 192px;
             
        }


        #top ul{

            width: 1010px;
            height: 192px;
            
        }

        #top ul li{

            float: left;
            width: 326px;
            height: 192px;
            background: black;
            margin-right: 10px;           

}

        section{

            position: relative;
            margin: auto;
            width: 1000px;
            height: 453px;
            background: #aaa;
        }

        aside#izq{

            position: absolute;
            left: 0;
            top: 0;
            width: 200px;
            height: 453px;
            background: #888;

        }

        article{

            position: absolute;
            left: 200px;
            top: 0;
            width: 600px;
            height: 453px;
            background: #aaa;

        }

        aside#der{

            position: absolute;
            right: 0;
            top: 0;
            width: 200px;
            height: 453px;
            background: #888;

}


        footer{

            position: relative;
            margin:20px auto;
            width: 1000px;
            height: 70px;
            background: #888;

        }

     

    </style>

</head>
<body>
    
    <!--Inicia Cabezote-->

    <header>

        <div id="logo">logotipo</div>

        <div id="icono1" class="redes estaEsMiClase header__redes--icono1" mi-atributo="Saul"></div>
        <div id="icono2" class="redes esta_es_mi_clase header__redes--icono1"></div>
        <div id="icono3" class="redes"></div>

    </header>
    <header class="header__flex">

        <div class="logo__flex"></div>

        <div class="wrapper__redes__flex">
            <div class="redes redes_flex"></div>
            <div class="redes redes_flex"></div>
            <div class="redes redes_flex"></div>
            <div class="redes redes_flex"></div>
            <div class="redes redes_flex"></div>
        </div>

    </header>

    <!--cierra Cabezote-->

    <!--Inicia barra de navegacion-->

    <nav>

        <ul>

            <li class="botones"></li>
            <li class="botones"></li>
            <li class="botones"></li>
            <li class="botones"></li>
            <li class="botones"></li>

        </ul>

    </nav>

    <!--Cierra barra de navegacion-->

    <!--Inicia parte superior-->

    <div id="top">

        <ul>

            <li></li>
            <li></li>
            <li></li>

        </ul>

    </div>

    <!--Cierra parte superior-->

    <!--Inicia Seccion-->

    <section>

        <aside id="izq"></aside>
        <article></article>
        <aside id="der"></aside>

    </section>

    <!--Cierra Seccion-->

    <!--Inicia pie de pagina-->

    <footer></footer>

    <!--Cierra pie de pagina-->

</body>
</html>