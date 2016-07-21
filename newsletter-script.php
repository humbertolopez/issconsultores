<?php
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$url = $_POST['url'];
	if(isset($_POST['submit']) && $nombre != "" && $correo != '')
	{
		require 'phpmailer/PHPMailerAutoload.php';
		$mail = new PHPMailer;		
		$mail->setFrom("contacto@issconsultores.com.mx","ISS Consultores, nuevo registro newsletter");
		$mail->addReplyTo($correo,$nombre);
		$mail->addAddress('web@merkategia.com');
		$mail->Subject = 'Nuevo registro newsletter';
		$mail->isHTML(true);
		$mail->Body = '
			<html>
				<head>
					<title>Nuevo registro de newsletter</title>
				</head>
				<body>
					<table style="border: 0; border-collapse: collapse; width: 410px; margin: auto;">
						<tr>
							<td colspan="2" style="padding: 10px; text-align: center;">
								<img src="http://imagencomunicacionimpresa.net/issconsultores/wp-content/themes/issconsultores/images/iss-consultores-logo.png">
								<h1 style="color: #41414;">Nuevo registro newsletter en ISS Consultores</h1>
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
		header('Location: '.$url.'?success');
	}
?>