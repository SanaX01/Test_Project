<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Session</title>
</head>
<body>
    <?php 
        session_start();
        $_SESSION['myname'] = "";
    ?>
    <form action="activity04b2.php" method="post">
        <p>My ASdasdioqwyeo: <input type="text" name="name" ></p>
        
        <p>Password: <input type="password" name="pass"></p>
        <input type="submit" name="submit">
        <input type="Reset" name="reset">
    </form>
</body>
</html>