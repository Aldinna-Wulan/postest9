<?php
$jum;
if(isset($_GET["submit"])) {
    $teks = $_GET["teks"];
    $jum = strlen($teks);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postest 9 </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="card card-l">
        <div id="Kotak-title"></div>
            <h2>Input Kalimat</h2>
            <form action="#" method="GET">
                <textarea name="teks" id="text" cols="30" rows="6" placeholder="texthere" class="inputan"></textarea>
                <button type="submit" name="submit" class="btn">Proses</button>
            </form>
        </div>
        <?php if(isset($_GET["submit"])) :?>
        <div class="card card-r">
            <p id="title">Kalimat yang di inputkan</p>
            <div class="display">
                <h4><?= $_GET["teks"]; ?></h4>
            </div>
            <div class="text_b">
                <p>Banyak karakter : <?= $jum ?></p>
                <p id="date">Tanggal dibuat : <?php echo date("l")." , ".date("d-m-y") . ", ".date("h:i:s a"). " waktu setempat"; ?></p>
            </div>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>