<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP COOKIES</title>
</head>
<body>
    <form action="POST">
        <input type="text" name="username" value="Khadka" placeholder="Enter your name"><br><br>
        <input type="email" name="email" value="        
            
    </form>
    Khadka khadka boy
    <?php
    session_start();
    $_SESSION['username']="Khadka";
    $_SESSION['email']="Khadka@gmail.com";
    echo "Session variables are set.<br/>";
    ?>
    <?php
    session_unset(); // Unset all session variables
    session_destroy();
    ?>
</body>
</html>