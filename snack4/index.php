<?php
$array = [];

for ($i = 0; count($array) < 15; $i++) {

    $num = rand(1, 100);
    if (!in_array($num, $array)) {
        $array[] = $num;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack #4</title>
</head>

<body>
    <h2>Lista</h2>
    <ul>
        <?php foreach ($array as $index => $elem) { ?>
            <li><?php echo ($index + 1) . '° numero: ' . $elem ?></li>
        <?php } ?>

    </ul>
</body>

</html>