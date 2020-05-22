<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Include y require</title>
    <style>
        #container{width: 500px; margin: 150px auto;background-color: #A58511; }
        #footer{background-color: #1C5D9E; padding: 10px; color: white;}
        #menu{background-color: #5D1C9E; padding: 10px; color: white;}
        h3{text-align: center;}
    </style>

</head>
<body>
    <div id="container">
        <?php
        include("menu.php");
        ?>


    <h3>Contenido Principal</h3>
        <?php
        include("footer.php");
        ?>


    </div>
</body>
</html>
