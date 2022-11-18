<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CyberInterPro API Test</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!--link rel="stylesheet" href="css/style.css" /-->
		<meta charset="utf-8">
		<link rel="stylesheet" href="../front/css/main1.css">
    	<link rel="stylesheet" href="css/request.css">
    	<link rel="stylesheet" href="../front/css/menu.css">
		<link rel="stylesheet" href="../front/css/barCert.css">
		<script src="js/request.js"></script>
	</head>
	<body onload="Step3()">
		<?php
		    include('../front/verificar-login.php');
			include('../front/conectbd.php');
			include ('../front/menu.php');
			include ('../front/ProgressBarCert.html');
		?>
	
		<?php

			if(isset($_GET['nome']))
			{
				$name=$_GET['nome'];
				$fpname = fopen('name.txt', 'w');
				#$fpname = fopen($name.date('m-d-Y-s_hi').'.txt', 'a');
				fwrite($fpname, $name);
				fclose($fpname);
				
				$cpf=$_GET['cpf'];
				$fpcpf = fopen('cpf.txt', 'w');
				fwrite($fpcpf, $cpf);
				fclose($fpcpf);
				
				$senha=$_GET['senha'];
				$fpsenha = fopen('senha.txt', 'w');
				fwrite($fpsenha, $senha);
				fclose($fpsenha);
			}
		
			// echo "<pre>";
			$response = Shell_Exec('powershell -InputFormat none -ExecutionPolicy ByPass -NoProfile -Command "& { . \"C:\xampp\htdocs\cyberinterpro\aws\test.ps1\"; }"');
			// echo $response;
			// echo "</pre>";
			
			$filename = $name . '_' . $cpf . '.p12';
			// echo "<a href='http://localhost/cyberinterpro/aws/files/$filename'>Certificado</a>";
			// echo "&nbsp;&nbsp;&nbsp;";
			// echo "<a href='http://localhost/cyberinterpro/aws/crl/cyberinterproonline.crl'>LCR</a>";
			// echo "&nbsp;&nbsp;&nbsp;";
			// echo "<a href='http://localhost/cyberinterpro/aws/chain/CyberInterProChain.p7b'>Cadeia</a>";
			
		?>
	<section>
		<div id="container" class="d-flex text-center justify-content-center align-items-center">
			<div id="centralizar"  >	
				<p class="" id="frase1">Seu Certificado Digital foi gerado com <span>sucesso!</span></p>
				<p class="" id="frase2">Clique abaixo e faça o download do certificado e da cadeia.</p>
				
				<a href="cadastro.html" class="btn btn-primary rounded-pill entrar_text  d-md-inline-block d-flex flex-sm-column btn_land mb-md-0 mb-2 me-md-2" id="btn_cad">Cadastre-se</a>
                <a href="login.html" class="btn btn-primary rounded-pill entrar_text  d-md-inline-block d-flex flex-sm-column btn_land" id="btn_cad">Entrar</a>

			</div>
		</div>
	</section>
	<!-- <?php
		// echo "<a href='http://localhost/cyberinterpro/aws/files/$filename' class="btn btn-primary rounded-pill entrar_text  d-md-inline-block d-flex flex-sm-column btn_land mb-md-0 mb-2 me-md-2" id="btn_cad">Cadastre-se</a>";
		// echo "<a href="login.html" class="btn btn-primary rounded-pill entrar_text  d-md-inline-block d-flex flex-sm-column btn_land" id="btn_cad">Entrar</a>";
	?> -->
	</body>
</html>