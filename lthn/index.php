<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <input type="text" name="input">    
    <button type="submit" name="kirim">kirim</button>
    </form>
</body>
</html>
<?php
  if(isset($_POST["kirim"])){
    echo $_POST["input"];
  };
    
?>