<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL 3</title>
</head>

<body>
    <center>
        <h1>Menentukan Bilangan Prima</h1>
    </center>

    <br>

    <form method="post" action=""> 
    <h1> Masukkan Bilangan =
        <input type="text" name="bilangan">
        <input type="submit" name="submit" value="Cek" /> 
    </h1>
    </form> 

<?php
    if(isset($_POST['submit']))
    {
        $prima = $_POST['bilangan'];
        
        if($prima == 2 || $prima == 3)
        {
            echo "<h2> Bilangan $prima Adalah Bilangan Prima </h2>";
        }

        else if($prima % 2 == 0 || $prima % 3 == 0)
        {
            echo "<h2> Bilangan $prima Bukan Bilangan Prima </h2>";
        }

        else 
        {
            echo "<h2> Bilangan $prima Adalah Bilangan Prima </h2>";
        }
    }    
?>
</body>
</html>