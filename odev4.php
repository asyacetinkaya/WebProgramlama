<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>100e kadar çift ve tek olan sayılar</title>
</head>
<body>
    <?php 
    $tekSayilar=0;
    $ciftSayilar=0;
    for($i =0;$i <=100;$i++){
        if($i%2==0){
            echo "$i Çift<br>";
            $ciftSayilar++;
        }
        else{
            echo "$i Tek<br>";
            $tekSayilar++;
        }
    }
    echo " Çift Sayı Sayısı = $ciftSayilar<br>";
    echo " Tek Sayı Sayısı = $tekSayilar<br>";
    ?>
</body>
</html>