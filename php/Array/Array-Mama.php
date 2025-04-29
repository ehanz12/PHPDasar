<?php

$Names = ["Nomor 1", "Nomor 2", "Nomor 3", "Nomor 4", "Nomor 5"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh penggunaan Array di Php</title>
</head>
<style>
    *, html, body {
        padding: 0px;
        margin: 0px;
    }

    .container {
        width: 100%;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 20px;
    }

    .card {
        padding: 20px;
        background-color: red;
        color: white;
        border-radius: 20px;
        transition: .3s all;
    }

    .card:hover{
        background-color: blue;
        transform: scale(1.1);
    }
</style>
<body>
    <div class="container">
        <?php foreach($Names as $name) :  ?>
                <div class="card"><?=$name ?></div>
        <?php endforeach ?>    
    </div>
</body>
</html>