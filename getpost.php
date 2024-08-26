<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form action="testform.php" method="get">

        Name: <input type="text" name="name" id=""><br><br>
        Age: <input type="text" name="age" id=""><br><br>
        <input type="submit" value="submit" name="save">
        </form>-->

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

        Name: <input type="text" name="name" id=""><br><br>
        Age: <input type="text" name="age" id=""><br><br>
        <input type="submit" value="submit" name="save">
    </form>

    <?php 
    if(isset($_POST['save'])){

        echo $_POST['name']."<br>";
echo $_POST['age'];
    }
    
    ?>
</body>


</html>