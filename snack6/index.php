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
    <title>PHP Snack #6</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php foreach ($db as $role => $list) { ?>
        <ul class="<?php echo $role; ?>">
            <h2><?php echo strtoupper($role); ?></h2>
            <?php foreach ($list as $person) { ?>
                <li><?php echo $person['name'] . ' ' . $person['lastname'] ?></li>
            <?php } ?>
        </ul>
    <?php } ?>
</body>

</html>