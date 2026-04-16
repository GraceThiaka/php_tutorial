<!DOCTYPE html>
<?php include_once('fun.php'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASIC PHP CALCULATOR</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" placeholder="Enter First Number" name="num1"><br><br>
        <input type="text" placeholder="Enter Second Number" name="num2"><br><br>
        <button name="addbtn">ADD</button>
        <button name="divbtn">DIVIDE</button>
       <?php echo divide(); ?>
    </form>
    
    
    
</body>
</html>