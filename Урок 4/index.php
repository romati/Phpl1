<?php
$big_image = "img/img_max";
$small_image = "img/img_min";

$files = array_slice(scandir($big_image), 2);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF8">
    <title>Фотогалерея</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="">
        <div class="h_1">
            <h1>Фотогалерея</h1>
        </div>
        <div class="container">
            <?php
            for ($i = 0; $i < count($files); $i++) { ?>
                <a rel="gallery" href="<?= $big_image . "/" . $files[$i] ?>" target="_blank"><img src="<?= $small_image . "/" . $files[$i] ?>" alt="" /></a>
            <?php } ?>
        </div>
    </div>

</body>

</html>