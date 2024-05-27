<?php

$matches = [
    [
        "home_team" => "Olimpia Milano",
        "away_team" => "Cantù",
        "home_points" => 88,
        "away_points" => 76
    ],
    [
        "home_team" => "Dinamo Sassari",
        "away_team" => "Fortitudo Bologna",
        "home_points" => 102,
        "away_points" => 95
    ],
    [
        "home_team" => "Virtus Bologna",
        "away_team" => "Dolomiti Energia Trento",
        "home_points" => 110,
        "away_points" => 108
    ],
    [
        "home_team" => "Virtus Roma",
        "away_team" => "Aquila Basket Trento",
        "home_points" => 99,
        "away_points" => 101
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack #1</title>
</head>

<body>
    <h1>Risultati partite</h1>
    <ul>
        <?php foreach ($matches as $match) { ?>
            <li><?php echo $match["home_team"] ?> - <?php echo $match["away_team"] ?> | <?php echo $match["home_points"] ?>-<?php echo $match["away_points"] ?> </li>
        <?php } ?>
    </ul>
</body>

</html>