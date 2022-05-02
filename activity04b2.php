<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    session_start();
        if(isset($_POST['name'])){
            $_SESSION['myname'] = $_POST['name'];
            $fullname = $_SESSION['myname'];
            echo 'Hello, I am ' . $fullname;
        }
        echo '<br />';
        if(isset($_POST['pass'])){
            $password = 'qwerty';

            if( ! strcmp($password, $_POST['pass'])) {
                // run statements here if the two strings are EQUAL
                echo '<a href="activity04b3.php">Delete the session</a>';
            } else {
                // run statements here if the two string are DIFFERENT
            echo '<a href="activity04b1.php">Back to Main Page</a>';
        }
        }
    ?>
</body>
</html>