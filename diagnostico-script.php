<?php
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$tamano = $_POST['tamanoempresa'];
	$servicio = $_POST['serviciointeres'];
	$mensaje = $_POST['mensaje'];
	$url = $_POST['url'];
	if(isset($_POST['submit']) && $nombre != "" && $correo != '' && $tamano != '' && $servicio != '' && $mensaje != '')
	{
		require 'phpmailer/PHPMailerAutoload.php';
		$mail = new PHPMailer;		
		$mail->setFrom("contacto@issconsultores.com.mx","ISS Consultores, nueva solicitud");
		$mail->addReplyTo($correo,$nombre);
		$mail->addAddress('web@merkategia.com');
		$mail->Subject = 'ISS Consultores, nueva solicitud';
		$mail->isHTML(true);
		$mail->CharSet = 'UTF-8';
		$mail->Body = '
			<html>
				<head>
					<title>ISS Consultores, nueva solicitud</title>
				</head>
				<body>
					<table style="border: 0; border-collapse: collapse; width: 410px; margin: auto;">
						<tr>
							<td colspan="2" style="padding: 10px; text-align: center;">
								<img src="http://imagencomunicacionimpresa.net/issconsultores/wp-content/themes/issconsultores/images/iss-consultores-logo.png">
								<h1 style="color: #41414;">Nueva solicitud de cotización ISS Consultores</h1>
							</td>
						</tr>
						<tr>
							<td style="padding: 10px;">Nombre</td>
							<td style="padding: 10px;">'.$nombre.'</td>
						</tr>
						<tr>
							<td style="padding: 10px;">E-mail</td>
							<td style="padding: 10px;">'.$correo.'</td>
						</tr>
						<tr>
							<td style="padding: 10px;">Tamaño de empresa</td>
							<td style="padding: 10px;">'.$tamano.'</td>
						</tr>
						<tr>
							<td style="padding: 10px;">Servicio de interés</td>
							<td style="padding: 10px;">'.$servicio.'</td>
						</tr>
						<tr>
							<td style="padding: 10px;">Mensaje</td>
							<td style="padding: 10px;">'.$mensaje.'</td>
						</tr>
					</table>
				</body>
			</html>
		';		
		if(!$mail->send())
		{
			//header('Location: https://secure112.inmotionhosting.com/~merkat5/applebees/landing-menu/index.php?no-mail');
			echo "Mailer Error: " . $mail->ErrorInfo;
		}		
		else
		{
			header('Location: '.$url.'?success');
		}
	}
	else {
		header('Location: '.$url.'?error');
	}
?>