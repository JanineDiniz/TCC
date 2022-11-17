<?php
$uploaddir = 'certificado/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
    rename("certificado/{$_FILES['userfile']['name']}", "certificado/userpfx.pfx");
    //Script NPM
    $response = Shell_Exec('powershell -InputFormat none -ExecutionPolicy ByPass -NoProfile -Command "& { . \"C:\wamp64\www\cyberinterpro\front\npmrun.ps1\"; }"');
    echo $response;
} else {
    echo "Possible file upload attack!\n";
}

// header('Location: baixar-certificado.php');
?>