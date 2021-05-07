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
    //
    function helo(){
        echo "hello world";
        echo "<br>";
    }
    //panggilan
    helo();
    echo "<br>";

    //function dengan parameter
    function nama ($nama, $alamat){
        echo "hello nama saya adalah $nama, alamat saya di $alamat";
    }
    nama("suci", "bogor");
    echo "<br>";

    //function dengan return
    echo "<br>";
    function tambah ($nilai1, $nilai2){
        return $nilai1 + $nilai2;
    }
    echo tambah (10,8);

    ?>
</body>
</html>