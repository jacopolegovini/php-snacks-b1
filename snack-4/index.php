<?php
include "./data.php";

// ! Codice per filtrare esclusivamente gli studenti con voti superiori al 6.
$bestStudents = [];
$bestStudentsInClass = [];
$bestStudentsInClasses = [];

$pickedProgrammingLanguagesSingleStudent = [];
$pickedProgrammingLanguagesSingleClass = [];
$pickedProgrammingLanguages = [];


// foreach ($classi as $classElementsValue) {
//     foreach ($classElementsValue as $classMember) {
//         if ($classMember['voto_medio'] >= 6) {
//             array_push($bestStudents, $classMember);
//         }
//     }
// }

// array_push($bestStudentsInClass, $bestStudents);
// array_push($bestStudentsInClasses, $bestStudents);

// $classi = $bestStudentsInClasses;


// ! Filtro per voto massimo.
if (isset($_GET['maxVote'])) {
    foreach ($classi as $classElementsValue) {
        foreach ($classElementsValue as $classMember) {
            if ($classMember['voto_medio'] <= $_GET['maxVote']) {
                array_push($bestStudents, $classMember);
            }
        }
    }

    array_push($bestStudentsInClass, $bestStudents);
    array_push($bestStudentsInClasses, $bestStudents);

    if (count($bestStudents) > 1) {
        $classi = $bestStudentsInClasses;
    }
}


// ! Filtro per linguaggio di programmazione preferito.
if (isset($_GET['programmingLanguage'])) {
    foreach ($classi as $classElementsValue) {
        foreach ($classElementsValue as $classMember) {
            if (str_contains($classMember['linguaggio_preferito'], $_GET['programmingLanguage'])) {
                array_push($pickedProgrammingLanguagesSingleStudent, $classMember);
            }
        }
    }

    array_push($pickedProgrammingLanguagesSingleClass, $pickedProgrammingLanguagesSingleStudent);
    array_push($pickedProgrammingLanguages, $pickedProgrammingLanguagesSingleStudent);

    $classi = $pickedProgrammingLanguages;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <div class="title">
            <h1>
                Classi anno scolastico 24/25
            </h1>
        </div>

        <!-- Form -->
        <h3>Filtro</h3>
        <form action="" method="GET">
            <label for="maxVote">Cerca per voto massimo</label>
            <input type="number" min=0 max=10 name="maxVote">
            <br>
            <label for="programmingLanguage">Cerca per linguaggio di programmazione preferito</label>
            <input type="text" name="programmingLanguage">
            <button>Filtra</button>
        </form>

        <!-- Cicli elenco classi e studenti -->
        <div class="classe">
            <?php foreach ($classi as $className => $classElementsValue) { ?>
                <h2><?= $className !== 0 ? $className : ''; ?></h2>
                <ul>
                    <?php foreach ($classElementsValue as $classMember) {  ?>
                        <li class="student-number">
                            <h4>Studente: <?= $classMember['id'] ?></h4>
                            <ul>
                                <?php foreach ($classMember as $classElementKey => $classElementValue) { ?>
                                    <li>
                                        <?php $classElementKeyUpperCase = ucfirst($classElementKey);
                                        $classElementKeyComplete = str_replace('_', ' ', $classElementKeyUpperCase);
                                        echo "{$classElementKeyComplete}: {$classElementValue}";
                                        ?>
                                    </li>

                                <?php } ?>
                                <hr>
                            </ul>
                        </li>
                    <?php } ?>
                </ul>
                <hr>
            <?php } ?>
        </div>
    </main>

</body>

</html>