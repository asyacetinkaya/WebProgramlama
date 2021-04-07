<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Programlama</title>
    <style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    }
    th, td {
    padding: 5px;
    text-align: left;    
    }
    </style>
</head>
<body>
<?php 
$Ad ="Asya";
$Soyad ="Çetinkaya";
$Okul = "Aydın Adnan Menderes Üniversitesi";
$Numara ="206001053";
?>
    <table style="width:100%">
    <tr>
        <th>Ad</th>
        <th>Soyad</th>
        <th>Okul</th>
        <th>Numara</th>
    </tr>
    <tr>
        <td><?php echo $Ad ?></td>
        <td><?php echo $Soyad ?></td>
        <td><?php echo $Okul ?></td>
        <td><?php echo $Numara ?></td>
    </tr>
    </table>
</body>
</html>