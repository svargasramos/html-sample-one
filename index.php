<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="shortcut icon" type="image/jpg" href="./password.png"/>
    <title>Home</title>

</head>
<body>

    <?php require("./components/chat.php")?>

    <!--Inicia Cabezote-->

        <?php require("./components/header.php")?>

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
    <?php require("./components/fotter.php")?>
    <!--Cierra pie de pagina-->

</body>
</html>