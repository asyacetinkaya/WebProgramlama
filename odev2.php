<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yaş Durumu</title>
</head>
<body>
    <form action="" method="GET">
    <b>Yaş :</b>
    <input type="text" name="age" id=""><br>
    <input type="submit" value="Gönder">
    </form><br>
    <?php 
    if(isset($_GET['age']))
    {
        $yas = $_GET["age"];
        if($yas <18)
        {
            echo "Durum : 18 yaşından küçüksünüz";
        }
        else{
            echo "Durum : 18 yaşından büyüksünüz";
        }
    }
    else{
        echo "Durum : ";
    }
    ?>
</body>
</html>