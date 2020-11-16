<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Фотогалерея</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <div class="h_1">
            <h1>Фотогалерея</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <a href="index.php">Назад в галерею</a>
            <?php
            include_once("config.php");

            $idImage = $_GET['id'];
            $sqlimg = "SELECT * FROM images WHERE id='$idImage'";
            if (mysqli_query($connect, $sqlimg)) {
                $images = mysqli_fetch_assoc(mysqli_query($connect, $sqlimg));
                $update = "UPDATE images SET Count=Count+1 WHERE id=$idimage";
                mysqli_query($connect, $update);
            }
            ?>

            <img src="<?= $images['Address_big'] ?>" alt="image<?= $idImage ?>">
            <h2>Количество просмотров: <?= ++$image['Count'] ?></h2>
        </div>
    </main>
</body>

</html>