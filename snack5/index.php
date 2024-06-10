<?php
$paragraph = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit ipsam quidem odio earum, eum vero voluptatum delectus sunt quos esse vel amet harum ipsa qui eos rem libero ipsa.
Modi quas velit at non ratione. Magnam odit fuga rerum ratione quae neque! Earum eligendi architecto recusandae rem beatae modi quisquam labore excepturi! Quidem nisi consequuntur reprehenderit autem!
Mollitia architecto illo commodi sit impedit, eligendi repellat nihil aliquam ab explicabo distinctio error voluptate molestias, accusamus dolor natus odio reiciendis tempora pariatur. Corporis esse rerum temporibus harum voluptatum eaque?
Rem, amet ad blanditiis modi voluptatum distinctio, error magnam alias, expedita excepturi corporis nam inventore cumque exercitationem? Nihil nemo vel totam corrupti dignissimos expedita dolore culpa facilis reiciendis sapiente. Voluptas!
Atque asperiores, vero debitis aliquam, ipsa sunt aspernatur perferendis, quos nulla modi perspiciatis natus! Aliquam doloremque hic eum sequi atque vero eligendi. Suscipit eos libero corporis eaque accusantium, veritatis saepe!
Deleniti unde ex atque voluptates expedita cumque suscipit excepturi quidem nemo! Voluptates, quia voluptatibus? Necessitatibus sequi maxime hic itaque delectus at consectetur earum natus. Quos labore provident quisquam vitae enim.
Amet maxime numquam laborum est doloremque omnis nam tempore, ea officia porro ut iure facilis neque dignissimos minima fugit quaerat. Pariatur soluta quisquam, voluptatibus laborum consequatur itaque adipisci exercitationem praesentium.
Totam similique, saepe ex exercitationem eos laboriosam quas eveniet atque pariatur. Voluptates molestiae exercitationem deserunt nemo numquam officia iste, tenetur, repellat sed qui fugiat autem ipsum quia magni facilis rerum?
Libero, excepturi iste? Quidem doloribus quaerat ratione minima aspernatur consequuntur ut rerum commodi amet, provident dolorum error. Nisi soluta qui tempora reprehenderit modi, aperiam ea ipsum minima quis! Voluptates, aspernatur.
Ea culpa praesentium esse possimus! Praesentium eum ipsam perspiciatis totam, temporibus commodi distinctio non accusantium possimus laudantium veniam sapiente debitis quae beatae unde recusandae alias modi iure sint in voluptatem!';

$paragraph_array = explode(".", $paragraph);
array_pop($paragraph_array);
// var_dump($paragraph_array);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack #5</title>
</head>

<body>
    <h2>Paragrafi</h2>
    <ul>
        <?php foreach ($paragraph_array as $paragraph_elem) { ?>
            <li><?php echo $paragraph_elem . '.' ?></li>
        <?php } ?>

    </ul>

</body>

</html>