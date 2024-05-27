<?php

$name = $_GET["name"] ?? "";
$mail = $_GET["mail"] ?? "";
$age = $_GET["age"] ?? "";
$result;

if (isset($name) && isset($mail) && isset($age)) {
    $result = "";

    if (strlen($name) >= 3) {
        if (strpos($mail, "@") && strpos($mail, ".")) {
            if (is_numeric($age)) {
                $result = "Accesso riuscito";
            }
        } else {
            $result = "Accesso negato";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack #2</title>
</head>

<body>
    <form action="index.php" method="GET">
        <label for="name">Nome</label>
        <input type="text" id="name" name="name" style="display: block; margin-bottom: 2em;">
        <label for="mail">Mail</label>
        <input type="text" id="mail" name="mail" style="display: block; margin-bottom: 2em;">
        <label for="age">Età</label>
        <input type="number" id="age" name="age" style="display: block; margin-bottom: 2em;">
        <button type="submit">Invia</button>
    </form>
    <h3><?php echo $result ?></h3>
</body>

</html>