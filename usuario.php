<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/usuario.css">
    <link rel="stylesheet" href="css/main1.css">
</head>
<body>
    <?php
        include "menu.html";
    ?>
    <section id="assinatura">
        <div class="container pt-md-0 pt-5 pb-0" >
            <div class="row-as">
                <div class="col-md-11 col-sm-11 align-self-center mt-4" id="titulo">
                    <div class="d-inline" >
                        <h1 class="titulo d-inline-flex ">Seu perfil</h1>
                    </div>
                    <div class="d-inline"id="alterar-senha">
                        <a class="d-inline nav-link chave" href="perfil.html">
                        <img src="assets/Grupo 188.png" alt="" srcset="" class="mt-1">
                        Alterar Senha</a>
                    </div>
                </div>
                <div class="col-md-11 col-sm-11 info shadow p-2 mb-5 bg-body rounded" id="info-basico">
                    <h3 class="titulo2 d-inline-flex ms-2">Informações Básicas</h3>
                    <ul class="info-text list-group">
                        <li class="list-group-item m-2 d-inline ">Foto: <img src="assets/Icon awesome-user-circle.png" class="info-usu"></li>
                        <li class="list-group-item m-2 d-inline"> Nome: <h1 class="d-inline info-usu">Nome do usuário</h1>
                        </li>
                        <li class="list-group-item m-2 d-inline">País: <h1 class="d-inline info-usu"> Brasil</h1></li>
                    </ul>
                </div>
                <div class="col-md-11 col-sm-11 info shadow p-2 mb-5  bg-body rounded" id="info-contato">
                    <h3 class="titulo2 d-inline-flex ms-2">Informações de Contato</h3>
                    <ul class="info-text list-group">
                        <li class="list-group-item m-2 d-inline">Email: <h1 class="d-inline info-usu">Example@gmail.com</h1></li>
                        <li class="list-group-item m-2 d-inline">Telefone: <h1 class="d-inline info-usu">(XX)XXXXX-XXXX</h1></li>
                    </ul>
                </div>
            </div> 
        </div>
    </section>
    <?php   
        include "footer.html";
    ?>
</body>
</html>