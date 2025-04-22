


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<form method="POST" action="index.php">
<label for="username">Username:</label>
<input type="text" id="username" name="username" required><br><br>

<label for="email">Email:</label>
<input type="email" id="email" name="email" required><br><br>

<input type="submit" value="Submit">
</form> 


<?php
$username=$_POST['username'];
$email=$_POST['email'];
if(!preg_match("/^[a-zA-Z]*$/", $username)){
    echo "username is not valid.<br/>";
}
else if(!filter_var(value: $email,filter: FILTER_VALIDATE_EMAIL)){
    echo "Invalid email format.<br/>";
}
else{
    echo "Username: ".$username."<br/> and email: ".$email."";
}
?>
</body>
</html>



