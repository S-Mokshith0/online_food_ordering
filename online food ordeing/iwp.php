<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time form</title>
</head>

<body>
    <center>
        <form action="lab202.php" method="POST">
            Username : <input type="text" name="us">
            <br>
            Password : <input type="password" name="pw">
            <br>
            <input type="submit">
        </form>
    </center>

    <?php
        session_start();

        $_SESSION["start"] = time();
        $_SESSION["expire"] = $_SESSION["start"] + (0.1 * 60);
    ?>
</body>

</html>
