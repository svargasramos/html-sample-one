<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">

    <title>Document</title>
    
    <style>

        *{
            margin: 0;
            padding: 0;
            list-style: none;
            font-family: sans-serif;
        }

        #chat{

            position: fixed;
            width: 250px;
            height: 40px;
            bottom: 0;
            right: 20px;
            background: magenta;
            z-index: 1;
            color: white;
            text-align: center;
            line-height: 40px;
            font-family: 'Audiowide', cursive;
            font-size: 20px;
            border-radius: 20px 20px 0 0;
            cursor: pointer;
        }

        header{
            position: relative;
            margin:20px auto;
            width: 1000px;
            height: 120px;
        }

        #logo, .logo__flex{

            position: absolute;
            top: 30px;
            left:30px;
            width: 200px;
            height: 60px;
            font-size: 50px;
            text-align: center;
            line-height: 60px;
            font-family: 'Audiowide', cursive;
        }

        .redes{

            position: absolute;
            width: 42px;
            height: 42px;
            background: #ccc;   
            border-radius: 100%;
            text-align: center;
            line-height: 42px;
            color: white;

        }

        #icono1{
            top: 42px;
            right: 120px;
            background: blue;
        }

        #icono2{
            top: 42px;
            right: 69px;
            background: green;
        }

        #icono3{
            top: 42px;
            right: 19px;
            background: red;
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
            background:rgb(100, 0, 255);
            color: white;
            text-align: center;
            line-height: 48px;
            font-family: 'Audiowide', cursive;
        }

        a .botones:hover{

            background: rgba(100, 0, 255,.4);
        }

        a .botones:active{

background: rgba(255, 0, 100, 1);
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
            margin-right: 10px;           
            text-align: center;

        }

        #top ul li img{
            border-radius: 100%;
            height: 100px;
        }

        #top ul li h1{
            font-family: 'Audiowide', cursive;  
        }

        #top ul li p{
            font-size: 14px;
            width: 75%;
            margin: 10px;
        }


        section{

            position: relative;
            margin: auto;
            width: 1000px;
            height: 453px;
        }

        aside#izq{

            position: absolute;
            left: 0;
            top: 0;
            width: 200px;
            height: 453px;
        }

        #izq ul li{
            background-color: #aaa;
            padding: 10px;
            margin: 2px 10px;
            list-style: square;
            list-style-position: inside;
            list-style-image: url("./img/bullet.jpg");

            }

            #izq ul li a{

                text-decoration: none;
            }

        article{

            position: absolute;
            left: 200px;
            top: 0;
            width: 600px;
            height: 453px;
        }

        article h1{

            font-family: 'Audiowide', cursive;  
            font-size: 40px;
            margin: 20px;
        }

        article p img{

            float: left;
            margin-right: 20px;
        }

        article p{

            margin: 5px 20px;
            font-size: 14px;
            text-align: justify;
        }

        aside#der{

            position: absolute;
            right: 0;
            top: 0;
            width: 200px;
            height: 453px; 

        }

        #der h1{
            width: 200px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            background:rgb(100, 0, 255);
            color: white;
            margin-bottom: 5px;

        }

        #der input{

            padding: 10px;
            margin: 5px 0;
            width: 176px;
        }

        #der input[type="text"]{
            background: url('./img/Usuario.png');
            background-repeat: no-repeat;
            background-position-x: 98%;
            background-position-y: 3px;
        }

        #der input[type="password"]{
            background: url('./img/contraseña.png');
            background-repeat: no-repeat;
            background-position-x: 98%;
            background-position-y: 3px;
        }

        #der input[type="email"]{
            background: url('./img/email.png');
            background-repeat: no-repeat;
            background-position-x: 98%;
            background-position-y: 3px;
        }


        #der input[type="submit"]{

            width: 200px;
            background: rgba(100, 0, 100,.5);
            border: 0;
        }

        footer{

            position: relative;
            margin:20px auto;
            width: 1000px;
            height: 70px;
            background:rgb(100, 0, 255);
            text-align: center;
            line-height: 70px;
            color: white;
            
        }

    
        @media (max-width: 1000px) {
            body{
                background-color: skyblue;
            }
            #chat{
                width: 100vw;
                background: #f60;
                right: 0;
            }
            header{
                display: flex;
                justify-content: space-between;
                flex-wrap: wrap;
            }


        }

    </style>

</head>
<body>

    <div id="chat">chat</div>
    
    <!--Inicia Cabezote-->

    <header>

        <div id="logo">Logotipo</div>

        <div id="icono1" class="redes">x</div>
        <div id="icono2" class="redes">x</div>
        <div id="icono3" class="redes">x</div>

    </header>

    <!--cierra Cabezote-->

    <!--Inicia barra de navegacion-->

    <nav>

        <ul>

            <a href="#"><li class="botones">Boton 1</li></a>
            <a href="#"><li class="botones">Boton 2</li></a>
            <a href="#"><li class="botones">Boton 3</li></a>
            <a href="#"><li class="botones">Boton 4</li></a>
            <a href="#"><li class="botones">Boton 5</li></a>

        </ul>

    </nav>

    <!--Cierra barra de navegacion-->

    <!--Inicia parte superior-->

    <div id="top">

        <ul>

            <li>
                <img src="./img/web.webp" width="100" />
                <h1>lorem ipsum</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </li>
            <li>
              <img src="./img/tipos-de-paisaje-natural.jpg" width="100" />  
              <h1>lorem ipsum</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </li>
            <li>
                <img src="./img/paisaje1.jfif" width="100"/>
                <h1>lorem ipsum</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </li>

        </ul>

    </div>

    <!--Cierra parte superior-->

    <!--Inicia Seccion-->

    <section>

        <aside id="izq">
            <ul>
    
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
                <li><a href="#">Link 4</a></li>
                <li><a href="http://www.google.com">google</a></li>
    
            </ul>
        </aside>

        <article>
            <h1>Lorem Impsum</h1>
            <p><img src="./img/paisaje1.jfif" width="250">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia quaerat cumque, modi eum sed numquam eos porro temporibus at neque, dolor sapiente ut minus accusamus consectetur placeat tempore aliquam nobis?</p>
        </article>

        <aside id="der">

            <h1>Ingreso</h1>

            <form>

                <input type="text" placeholder="Usuario">
                
                <input type="password" placeholder="Contraseña">

                <input type="email" placeholder="email">

                <input type="submit" value="enviar">

            </form>

        </aside>

    </section>

    <!--Cierra Seccion-->

    <!--Inicia pie de pagina-->

    <footer>
        &COPY; Todos los derechos reservados
        <!--http://www.ascil.cl/htmlcodes.htm-->
    </footer>

    <!--Cierra pie de pagina-->

</body>
</html>