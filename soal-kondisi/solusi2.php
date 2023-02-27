<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL 2</title>
</head>

<body>
    <center>
        <h1>Menentukan Kategori Berat Badan Seseorang Berdasarkan Indeks Massa Tubuh</h1>
    </center>

    <br>

    <form method="post" action=""> 
    <h1> Masukkan Indeks Massa Tubuh =
        <input type="text" name="indeks">
        <input type="submit" name="submit" value="Cek" /> 
    </h1>
    </form> 

<?php
    if(isset($_POST['submit']))
    {
        $bmi = $_POST['indeks'];

        if ($bmi < 18.5)
        {
            echo "<h2> Indeks $bmi Menunjukkan Berat Badan Kurang </h2>"; 
        }

        else if ($bmi >= 18.5 && $bmi < 25)
        {
            echo "<h2> Indeks $bmi Menunjukkan Berat Badan Normal </h2>"; 
        }

        else if ($bmi >= 25 && $bmi < 30)
        {
            echo "<h2> Indeks $bmi Menunjukkan Berat Badan Berlebih </h2>"; 
        }

        else if ($bmi >= 30)
        {
            echo "<h2> Indeks $bmi Menunjukkan Obesitas </h2>"; 
        }
    }    
?>
</body>
</html>