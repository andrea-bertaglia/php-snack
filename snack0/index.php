<?php

$students = [
    [
        'name' => 'Michele',
        'lastname' => 'Papagni',
        'votes' => [8, 5, 7, 6]
    ],
    [
        'name' => 'Fabio',
        'lastname' => 'Forghieri',
        'votes' => [10, 2, 4]
    ],
    [
        'name' => 'Roberto',
        'lastname' => 'Marazzini',
        'votes' => [2, 8]
    ]
];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack</title>
</head>

<body>
    <h1>SNACK #0</h1>
    <?php foreach ($students as $student) { ?>
        <ul>
            <li>Nome: <?php echo $student["name"] ?></li>
            <li>Cognome: <?php echo $student["lastname"] ?></li>
            <li>Media voti: <?php echo number_format(round((array_sum($student["votes"]) / count($student["votes"])), 1), 2) ?></li>
        </ul>
    <?php } ?>
</body>

</html>