<?php
    if(isset($_POST["send"])){
        $bny = $_POST["input1"];
        echo "$bny";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="input1">
        <input type="submit" value="Submit" name="send">
    </form>
</body>
</html>