<?php

$nama = "Wijanarko";

//$data = array('Avanza', 'Lamborghini', 'Tesla', 'Xenia', 'Xpander', 'Rubicon');

//echo $data[5];

/*
foreach($data as $value) {
    echo $value."<br>";
}
*/

// PERCABANGAN //

/*
if ($nama == "Stefanus") {
    echo $nama." adalah orang BWI";
} else if ($nama == "Dwi") {
    echo $nama." bukan orag BWI";
} else {
    echo $nama. " dari mana ya?";
}
*/

/*
switch($nama) {
    case "Stefanus";
        $pesan = $nama." adalah orang BWI";
    break;
    case "Dwi";
        $pesan = $nama." berasal dari pulau Jawa";
    break;
    default:
        $pesan = $nama." dari mana ya?";

}

echo $pesan;
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input nama dan diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(!empty($_POST['submit'] == "Submit")) {

            switch($_POST)
        }
    ?>
</body>
</html>