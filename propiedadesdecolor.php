<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>

    <style>

        /*http://html-color-codes.info/codigos-de-colores-hexadecimales/*/

        .grupo{
            width: 1000px;
            height: 500px;
            margin: auto;
            border: solid #f60 5px;
            padding: 30px;
            background-color: black;
        }
        .item{
            width: 150px;
            height: 150px;
            margin: 10px;
            border: dashed black;
            padding: 5px;
        }

        #c1{
            background: orange;
            overflow: hidden;
        }

        #c2{
            background: rgb(158, 33, 167, 0.78)
        }

        #c3{
            background: rgba(255, 255, 0, 0.5); /* 50% de transparencia */
        }

    </style>

</head>


<body>

    <div class="grupo">
        <div class="item" id="c1">Lorems ipsum dolor sit, amet consectetur adipisicing elit. Pariatur laboriosam amet officia temporibus vel illo repudiandae eius odit doloremque velit ducimus, accusamus excepturi iste laborum. Optio soluta expedita explicabo fugit.</div>
        <div class="item" id="c2"></div>
        <div class="item" id="c3"></div>
    </div>


</body>
</html>