<?php
    // $_POST['nama'] = 'Adinda Tri awaw';
    // var_dump($_POST);
    // if (isset($_POST['submitbtn'])){
    //     echo 'Data terkirim';
        // var_dump($_POST);
  
    // if (isset($_POST['submitbtn'])) {
    //     if (strlen($_POST['nama']) > 0) {
    //         echo "data terkirim";
    //     } else {
    //         echo "Isi nama terlebih dahulu";
    //     }
    // }

    $luas = 0;
    $volume = 0;

    if (isset($_POST['submitbtn'])) {
        $diameter = $_POST['diameter'];
        $tinggi = $_POST['tinggi'];
        $r = $diameter / 2;

        $luas = 3.14 *$diameter *$tinggi;
        $volume = 3.14 * $r * $r * $tinggi;
        echo "Diameter $diameter <br>";
        echo "Tinggi $tinggi <br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        
        <!-- <input type="text" name='diameter' value=''><br>
        <button name='submitbtn'>Submit</button> -->
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name='submitbtn'>Hitung</button>

        <hr>
    </form>
    <ul>
            <li>Luas Selimut : <?php echo $luas;?></li>
            <li>Volume :  <?php echo $luas;?></li>
        </ul>

</body>
</html>