<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL 1</title>
</head>

<body>

    <center>
        <h1>Menentukan Tahun Kabisat</h1>
    </center>

    <br>

    <form method="post" action=""> 
    <h1> Masukkan Tahun =
        <input type="number" name="tahun">
        <input type="submit" name="submit" value="Cek" /> 
    </h1>
    </form> 

<?php
    if(isset($_POST['submit']))
    {
        $tahun = $_POST['tahun'];

        if (($tahun % 4 == 0 && $tahun % 100 != 0) || $tahun % 400 == 0)
        {
            echo "<h2> Tahun $tahun Adalah Tahun Kabisat </h2>"; 
        }

        else
        {
            echo "<h2> Tahun $tahun Bukan Tahun Kabisat </h2>"; 
        }
    }
?>
</body>
</html>