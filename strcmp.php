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
$passwordasli = "12345";
$passwordinput = "12345";
$cocok = strcmp($passwordasli, $passwordinput);
if ($cocok != 0)
  {
    echo "Password anda salah!";
  }
else
  {
    echo "Password anda benar.";
  }
?>


</body>
</html>