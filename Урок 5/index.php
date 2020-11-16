<head>
    <meta charset="UTF-8">
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
    <div class="container">
        <?php
        include_once("config.php");

        $sql = "select * from images ORDER BY Count DESC";
        $table = mysqli_query($connect, $sql);

        while ($data = mysqli_fetch_assoc($table)) : ?>
            <a href='images.php?id=<?= $data['id'] ?>'>
                <img src='<?= $data['adress_small'] ?>' alt='img"<?= $data['Name'] ?>'>
            </a> <?php endwhile; ?>
    </div>
</body>