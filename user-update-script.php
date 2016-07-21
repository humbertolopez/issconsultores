<?php
	require_once('http://imagencomunicacionimpresa.net/issconsultores/pluggable.php');
	$userid = get_current_user_id();
	$datosdeusuario = array(
		//datos de usuario
		'first_name' => sanitize_text_field($_POST['nombre']),
		'last_name' => sanitize_text_field($_POST['apellidop']),
		'_apellidom' => sanitize_text_field($_POST['apellidom']),
		'_usercalle' => sanitize_text_field($_POST['callenum']),
		'_usercolonia' => sanitize_text_field($_POST['colonia']),
		'_userciudad' => sanitize_text_field($_POST['ciudad']),
		'_userestado' => sanitize_text_field($_POST['estado']),
		'_usercp' => sanitize_text_field($_POST['cp']),
		//datos de empresa
		'_razon' => sanitize_text_field($_POST['razon']),
		'_buscalle' => sanitize_text_field($_POST['buscallenum']),
		'_buscolonia' => sanitize_text_field($_POST['buscolonia']),
		'_busciudad' => sanitize_text_field($_POST['busciudad']),
		'_busestado' => sanitize_text_field($_POST['busestado']),
		'_buscp' => sanitize_text_field($_POST['buscp']),
		'_busrfc' => sanitize_text_field($_POST['rfc']),
	);
	//
	if(isset($_POST['submit']))
	{
		foreach ($datosdeusuario as $key => $valor) {
			update_user_meta($user_id,$key,$valor);
		}
	}
	else
	{
		echo 'Uy, falló!';
	}
?>