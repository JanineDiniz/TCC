<?php
include('verificar-login.php');
include('conectbd.php');
include ('menu.php');
include ('ProgressBarCert.html');
?>

<section>
		<div id="container" class="d-flex text-center justify-content-center align-items-center">
			<div id="centralizar"  >	
				<p class="" id="frase1">Seu Certificado Digital foi gerado com <span>sucesso!</span></p>
				<p class="" id="frase2">Clique abaixo e faça o download do certificado e da cadeia.</p>
				<?php 
				echo "<a href='http://localhost/cyberinterpro/aws/files/$filename ' class='btn btn-primary rounded-pill entrar_text  d-md-inline-block d-flex flex-sm-column btn_land mb-md-0 mb-2 me-md-2'>Baixar</a>"
				?>
				</div>
		</div>
</section>