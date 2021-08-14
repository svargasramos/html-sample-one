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
    <link rel="shortcut icon" type="image/ico" href="./password.ico"/>
    <title>Contacto</title>

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

        <aside id="der">

            <h1>Contacto</h1>

            <form>

                <input type="email" placeholder="email" name="email">

                <textarea name="message" id="message" rows="10"></textarea>

                <input type="submit" value="enviar">

            </form>

        </aside>

    </section>

    <!--Cierra Seccion-->

    <!--Inicia pie de pagina-->
    <?php require("./components/footer.php")?>
    <!--Cierra pie de pagina-->

</body>
</html>