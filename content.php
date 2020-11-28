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
    <form enctype="multipart/form-data" method="POST" action="result.php">
        <div>
            <input type="text" name="sitename"><br>
            <input type="file" name="kekimage"><br>
            <button type="submit">Далее...</button>
        </div>
    </form>
</body>
</html>
