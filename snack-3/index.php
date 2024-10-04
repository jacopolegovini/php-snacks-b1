<?php
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];
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
        <div class="db">
            <div class="teachers">
                <?php
                foreach ($db as $element) {
                    foreach ($element as $teachers) { ?>
                        <li>
                            <?php foreach ($teachers as $contact) {

                                echo $contact . ' ';
                            } ?>
                        </li>
                <?php }
                } ?>
            </div>
            <div class="pm">
                <?php
                foreach ($db as $element) {
                    foreach ($element as $pm) {
                        foreach ($pm as $contact) {
                            echo $contact;
                        }
                    }
                }
                ?>
            </div>
        </div>
    </main>
</body>

</html>

<style>
    .db {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .teachers {
        background-color: lightgray;

    }

    .pm {
        background-color: green;
    }
</style>