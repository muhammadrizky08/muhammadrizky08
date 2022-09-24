<?php
$negara = [  "Indonesia" => "D.K.I Jakarta",
             "Singapura" => "Singapura",
             "Malaysia" => "Kuala Lumpur",
             "Brunei" => "Bandar Seri Begawan",
             "Thailand" => "Bangkok",
             "Laos" => "Vientiane",
             "Filipina" => "Manila",
             "Myanmar" => "Naupyidaw"];
             //untuk memasukan value, kita harus membuat key yang merepresentasikan valuenya.
             //tanda "=>" dapat diartikan sebagai merijuk 
             //"key" => "value"
?>
<!DOCTYPE html>
<html> lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Associative</title>
    </head>
    <body>
        <?php foreach ($negara as $kota => $ibukota) : ?>
            <li><?php echo "$kota : $ibukota" ?></li>
        <?php endforeach ?>
    </body>
</html>
             


