<?php

if (isset($_GET["name"])) {

    $name = $_GET["name"];

    if (strlen($name) > 3) {
        echo 'Accesso riuscito';
    } else {
        echo 'Accesso negato';
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <form action="" method="GET">
            <input type="text" name="name" placeholder="Inserisci il nome">
            <input type="email" name="email" placeholder="Inserisci la tua mail">
            <input type="number" name="age" placeholder="Inserisci la tua età">
            <button>Entra</button>
        </form>
    </main>
</body>

</html>