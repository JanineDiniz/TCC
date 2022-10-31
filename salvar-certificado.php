<?php

include('conectbd.php');

$userfis = strtolower($_POST['userfis']);
$senhafis = $_POST['senhafis'];
$cpf = $_POST['cpf'];
$userjuri = strtolower($_POST['userjuri']);
$senhajuri = $_POST['senhajuri'];
$cnpj = $_POST['cnpj'];
$datah = date('Y/m/d');
$datav = date('Y/m/d', strtotime($datah. ' + 3 years'));

 if(empty($_POST['cnpj'])) {


    $stmt = $pdo->prepare("insert into tbcertificado values (null, 'Fisico', '$userfis', '$cpf', '$cnpj' , md5('$senhafis'),'$datah', '$datav', null)");
    $stmt ->execute();
    header("location:certificado.php");

}
 else {
    $stmt = $pdo->prepare("insert into tbcertificado values (null, 'Juridico', '$userjuri', '$cpf' ,'$cnpj', md5('$senhajuri'),'$datah', '$datav', null)");
    $stmt ->execute();
    header("location:certificado.php");
}


?>