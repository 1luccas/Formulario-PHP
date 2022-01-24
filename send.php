<?php 

if (isset($_POST['name']) && isset($_POST['empresa']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])) {

	$addressee = "info@chempocompany.com";
	$title = "Consulta desde CHEMPO COMPANY";

		$name = $_POST['name'];
		$empresa = $_POST['empresa'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];

		$text = "$name de $empresa \n";
		$text .= "Correo: $email \n";
		$text .= "Telefono: $phone \n";
		$text .= "Consulta: $message \n";

	mail($addressee, $title, $text);

}


?>