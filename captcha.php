<?php 

	class Captcha {
		public function getCaptcha($SecretKey){
			$respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=(ACA VA LA CLAVE PRIVADA)&response={$SecretKey}");
			$retorno = json_decode($respuesta);
			return $retorno;
		}
	}

	function envioMensaje() {
		if(isset($_POST['email'])) {
			$email= htmlentities($_POST['email'], ENT_QUOTES);
			$ObjCaptcha =new Captcha();
			$retorno = $ObjCaptcha->getCaptcha($_POST['g-recaptcha-response']);

			if($email === "") {
				echo 'El campo Email es obligatorio!';
			}elseif($retorno->succes == true && $retorno->score > 0.5) {
				//echo "Mensaje enviado exitosamente!";
			}else{
				echo 'Eres un robot!';
			}
		}

	}

	include("send.php");

 ?>



<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BIENVENIDO A CHEMPO COMPANY ::: ABRASIVOS Y QUIMICOS</title>
	<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=XXXX"><!-- EN 'URL=' VA LA URL DEL INICIO -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <!-- Template CSS -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/png">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<link href="//fonts.googleapis.com/css?family=Noto+Sans+JP:100,300,400,500,700&display=swap" rel="stylesheet">
    <!-- Template CSS -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body class="bg-cont2">

<style>

	

	.modal {
		width: 70%;
		height: 300px;
		position: absolute;
		left: 50%;
		top: 50%; 
		margin-left: -150px;
		margin-top: -150px;
	}

	.modal {
		position: fixed;
		left: 50%;
	}

.modal {
		background-color: rgba(230, 230, 255, 0.6);
       margin:0 auto;
       display:table;
       position: absolute;
       left: 0;
       right:0;
       top: 50%; 
       border: 6px solid rgba(0, 0, 80, 0.2);
	   border-radius: 20px;
       -webkit-transform:translateY(-50%);
       -moz-transform:translateY(-50%);
       -ms-transform:translateY(-50%);
       -o-transform:translateY(-50%);
       transform:translateY(-50%);
    }

	.modal {
		text-align: center;
		padding: 0!important;
	}

	.modal:before {
		content: '';
		display: inline-block;
		height: 100%;
		vertical-align: middle;
		margin-right: -4px;
	}

	.modal-dialog {
		display: inline-block;
		text-align: left;
		vertical-align: middle;
	}


</style>

<div class="modal" >
    <div class="body">
        <div class="content">
		<h5 class="txt-w3_agile text-uppercase" data-aos="fade-down" style="color: rgb(85, 228, 80);"> <i class="fas fa-check-circle"></i>&nbsp  su consulta se ha enviado correctamente</h5>
		
		 <small class="text-muted" style="font-size: 1.3rem;">A la brevedad será contestada</small>
        </div>
    </div>
</div>
<style>
    .modal {display:table;}
    .body {display:table-cell; vertical-align:middle; text-align:center;}
</style>

</body>
</html>