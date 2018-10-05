<?php
/**
 * Created by PhpStorm.
 * User: hisha
 * Date: 05/10/18
 * Time: 10:25
 */
?>

<!DOCTYPE html>
<html>
<head> ... </head>
<body>
<section>
    <h1>Items</h1>
    <ul>
        <?php foreach ($toutesmesvaleurs as $valeurs) : ?>
            <li><?= $valeurs['title'] ?></li>
        <?php endforeach ?>
    </ul>
</section>
</body>
</html>
