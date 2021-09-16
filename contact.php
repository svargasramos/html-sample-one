<!DOCTYPE html>
<html lang="en">

<head>
    <?php require("./components/head.php")?>
    <title>Contact</title>
</head>

<body>

    <?php require("./components/chat.php")?>

    <!--Inicia Cabezote-->

    <?php require("./components/header.php")?>

    <!--Cierra barra de navegacion-->

    <form method="get">
        <section class="main contact">
            <!-- <br/>
            <hr/> -->
            <!--  -->
            <div class="contact-wrapper">
                <h2>Contact Us</h2>

                <div class="form-control">
                    <label>Your name</label>
                    <input type="text" name="name" />
                </div>

                <div class="form-control">
                    <label>Your email address</label>
                    <input type="email" name="email" />
                </div>

                <div class="form-control">
                    <label>Your message</label>
                    <!-- <textarea rows="5" cols="10"></textarea> -->
                    <textarea name="message"></textarea>
                </div>
                <input class="btn-send" type="submit" value="Enviar">
                <!-- <button class="btn-send">Enviar</button> -->
                <!-- <div class="btn-send" style="text-align: center">Enviar</div> -->
                <!-- <a href="www.google.com" class="btn-send">Enviar</a> -->

            </div>

            <!-- <img class="image" src="./img/diamond.svg"/> -->
        </section>
    </form>

    <!--Inicia pie de pagina-->
    <?php require("./components/footer.php")?>
    <!--Cierra pie de pagina-->

</body>

</html>