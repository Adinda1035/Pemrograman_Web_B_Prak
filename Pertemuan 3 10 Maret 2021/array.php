<?php

    $mhs=[
        "nama"=>"Adinda",
        "nim"=>"192410101035",
        "usia"=>"20"
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar array</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Usia</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $mhs['nama'] ?></td>
                <td><?php echo $mhs['nim'] ?></td>
                <!-- shortcut echo -->
                <td><?= $mhs['usia'] ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>