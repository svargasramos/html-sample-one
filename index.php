<!DOCTYPE html>
<html lang="en">

<head>
    <?php require("./components/head.php") ?>
    <title>Home</title>

</head>

<body>

    <?php require("./components/chat.php")
    ?>

    <?php require("./components/header.php") ?>

    <div id="top">

        <?php require('./components/about-content.php');
        ?>

    </div>

    <?php require('./home.php');
    ?>

    <?php require("./components/footer.php");
    ?>

</body>

</html>