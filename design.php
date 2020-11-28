<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Creator</title>
</head>
<body>
    <?php
        echo $_SERVER["REQUEST_METHOD"];
    ?>
    <form method="GET" action="content.php">
        <h4>Выберете дизайн сайта:</h4>
        <div>
            <label><input type="radio" name="design" value="white" checked>Пустой и минималистичный!</label>
            <br><button type="submit">Далее...</button>
        </div>
    </form>
</body>
</html>
