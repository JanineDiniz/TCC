<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/assinatura.css">
    <link rel="stylesheet" href="css/main1.css">
    <title> Assinatura </title>
</head>
<body>
    <?php
        include "menu-jan.html";
    ?>
    <section id="assinatura">
        <div class="container pt-md-0 pt-5 pb-0" >
            <div class="row-as mt-3">
                <div class="col-md-12 col-sm-12 align-self-center" id="titulo">
                    <h1 class="titulo">Assinatura de Arquivos</h1>
                </div>
                <div class="col-md-12 col-sm-12 align-self-center" id="etapas-jan">
                </div>
                <div class="col-md-12 col-sm-12 align-self-center" id="esc-arquivo">
                <div class="input-group input-group-sm mb-3">
                <input type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                </div>
            </div>
        </div>
    </section>
    <?php   
        include "footer.html";
    ?>
</body>
</html>