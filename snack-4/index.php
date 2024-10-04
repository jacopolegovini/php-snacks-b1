<?php
include "./data.php";

$bestStudents = [];
$bestStudentsInClass = [];
$bestStudentsInClasses = [];


// Filtriamo esclusivamente gli studenti con media superiore a 6.
foreach ($classi as $classElementsValue) {
    foreach ($classElementsValue as $classMember) {
        if ($classMember['voto_medio'] >= 6) {
            array_push($bestStudents, $classMember);
        }
    }
}

array_push($bestStudentsInClass, $bestStudents);
array_push($bestStudentsInClasses, $bestStudents);

$classi = $bestStudentsInClasses;

?>

<!-- Classe 1A" => [
        [
            "id" => 1,
            "nome" => "Marco",
            "cognome" => "Rossi",
            "anni" => 23,
            "voto_medio" => 8.5,
            "linguaggio_preferito" => "PHP",
            "immagine" => "https://source.unsplash.com/random/200x200?person", -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <div class="classe">
            <?php foreach ($classi as $className => $classElementsValue) { ?>
                <h3><?= $className; ?></h3>
                <ul>
                    <?php foreach ($classElementsValue as $classMember) {  ?>
                        <li>
                            <?= $classMember['id'] ?>
                            <ul>
                                <?php foreach ($classMember as $classElementKey => $classElementValue) { ?>
                                    <li>
                                        <?php
                                        echo $classElementValue;
                                        ?>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </div>
    </main>

</body>

</html>