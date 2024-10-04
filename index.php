<?php

if (isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["age"])) {

    $name = $_GET["name"];
    $email = $_GET["email"];
    $age = $_GET["age"];

    if (strlen($name) > 3 && str_contains($email, '.') && str_contains($email, '@') && is_numeric($age)) {
        echo 'Accesso riuscito';
    } else {
        echo 'Accesso negato';
    }
} else {
    echo '';
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
            <input type="text" name="email" placeholder="Inserisci la tua email">
            <input type="text" name="age" placeholder="Inserisci la tua età">
            <button>Entra</button>
        </form>
    </main>
</body>

</html>