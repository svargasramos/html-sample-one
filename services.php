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
    <title>Servicios</title>

</head>
<body>

    <?php require("./components/chat.php")?>

    <!--Inicia Cabezote-->

        <?php require("./components/header.php")?>

    <!--Cierra barra de navegacion-->

    <main
		style="
			background:rgb(91, 194, 96);
			height: calc(100vh - 380px);
			padding: 50px;
			border: solid 40px #f60;
			margin: 100px;
			border-radius: 30px;
			display: flex;
			justify-content: space-around;
			align-items: center;
		">
		<div
			style="
				background: red;
				height: 200px;
				width: 200px;
				padding: 20px;
				border: solid 10px #000;
				color: blue;
				display: flex;
				justify-content: center;
				align-items: center;
			">
			Pagina Principal
		</div>
		<div
			style="
				background: red;
				height: 200px;
				width: 200px;
				padding: 20px;
				border: solid 10px #000;
				color: blue;
				display: flex;
				justify-content: center;
				align-items: center;
			">
			Pagina Principal
		</div>
		<div
			style="
				background: red;
				height: 200px;
				width: 200px;
				padding: 20px;
				border: solid 10px #000;
				color: blue;
				display: flex;
				justify-content: center;
				align-items: center;
			">
			Pagina Principal
		</div>
	</main>	

    <!--Inicia pie de pagina-->
    <?php require("./components/footer.php")?>
    <!--Cierra pie de pagina-->

</body>
</html>