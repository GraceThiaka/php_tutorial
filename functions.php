<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNCTIONS</title>
</head>
<body>
    <form action ="functions.php" method ="POST">
        <input type="text" name="username" placeholder="usernname">
        <input type="password" name="password" placeholder="Enter password" required>
        <input type="submit" value="submit" name="submit">
</form>    
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $password = $_POST['password'];

    if($password==""){
        echo "<span style='color:red;'>password is required</>";
    }else{
        if(strlen($password)<6){
            echo "password length is too short";
        }else{
            echo "password is valid";
        }
    }
    
    $username = $_POST['username'];
    //echo "<script>alert('Welcome, $username');</script>";
}

?>