<?php
$uploaddir = 'certificado/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
    rename("certificado/{$_FILES['userfile']['name']}", "certificado/userpfx.pfx");
} else {
    echo "Possible file upload attack!\n";
}

header('Location: inserir-certificado.php');
?>