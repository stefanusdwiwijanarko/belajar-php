<?php

echo $_POST['nama'];
echo "<br/>";
echo $_POST['password'];

else if ($_GET['P'] == "gambar") { //tampil gambar
    $size = getimagesize($_FILES['berkas']['tnp_name']);
    $image = "data;".$size['mine'].";base64,".
            base64_encode(file_get_contents[$_FILES['berkas']['tmp_name']])};
    echo "<image src='".$image."' width='720'>
}
?>