<?php get_header(); ?>
<?php 	
	if(is_user_logged_in()) {
		$userid = get_current_user_id();
		$user = get_userdata($userid);
		//datos de usuario
		$nombre = get_user_meta($userid,'first_name',true);
		$apellidopaterno = get_user_meta($userid,'last_name',true);
		$apellidomaterno = get_user_meta($userid,'_apellidom',true);
		$usercalle = get_user_meta($userid,'_usercalle',true);
		$usercolonia = get_user_meta($userid,'_usercolonia',true);
		$userciudad = get_user_meta($userid,'_userciudad',true);
		$userestado = get_user_meta($userid,'_userestado',true);
		$usercp = get_user_meta($userid,'_usercp',true);
		$usertel = get_user_meta($userid,'_usertel',true);
		$useremail = $user->user_email;
		//datos de empresa
		$razon = get_user_meta($userid,'_razon',true);
		$buscalle = get_user_meta($userid,'_buscalle',true);
		$buscolonia = get_user_meta($userid,'_buscolonia',true);
		$busciudad = get_user_meta($userid,'_busciudad',true);
		$busestado = get_user_meta($userid,'_busestado',true);
		$buscp = get_user_meta($userid,'_buscp',true);
		$busrfc = get_user_meta($userid,'_busrfc',true);
		$bustel = get_user_meta($userid,'_bustel',true);
		$busemail = get_user_meta($userid,'_busemail',true);
		?>
			<section class="cont-top-datos">
			    <div class="top-datos">
			        <h2>Actualiza o agrega tus datos</h2>
			    </div>
			</section>			
			<section class="content-aviso">
				<?php
					if(sizeof($msg) > 0)
					{
						foreach ($msg as $singlemsg) {
							echo '<p>' .$msg. '</p>';
						}						
					}
				?>
				<form id="datosusuario" name="datosusuario" action="" method="POST">
					<fieldset>
						<legend>Datos personales</legend>
							<!-- nombres -->
							<label for="nombre">Nombre(s)</label>
							<input type="text" name="nombre" value="<?php echo $nombre; ?>">
							<!-- nombres -->
						<div class="third">
							<!-- apellidop -->
							<label for="apellidop">Apellido paterno</label>
							<input type="text" name="apellidop" value="<?php echo $apellidopaterno; ?>">
							<!-- apellidop -->
						</div>
						<div class="third">
							<!-- apellidom -->
							<label for="apellidom">Apellido materno</label>
							<input type="text" name="apellidom" value="<?php echo $apellidomaterno; ?>">
							<!-- apellidom -->
						</div>
						<div class="third">
							<!-- Calle y número -->
							<label for="callenum">Calle y número</label>
							<input type="text" name="callenum" value="<?php echo $usercalle; ?>">
							<!-- Calle y número -->
						</div>
						<div class="third">
							<!-- Colonia -->
							<label for="colonia">Colonia</label>
							<input type="text" name="colonia" value="<?php echo $usercolonia; ?>">
							<!-- Colonia -->
						</div>
						<div class="third">
						<!-- Ciudad -->
						<label for="ciudad">Ciudad</label>
						<input type="text" name="ciudad" value="<?php echo $userciudad; ?>">
						<!-- Ciudad -->
						</div>
						<div class="third">
							<!-- Estado -->
							<label for="estado">Estado</label>
							<select name="estado">
								<?php 
									$estados = array(
										"" => "Selecciona el estado",
										"Aguascalientes" => "Aguascalientes",
										"Baja California" => "Baja California",
										"Baja California Sur" => "Baja California Sur",
										"Campeche" => "Campeche",
										"Coahuila de Zaragoza" => "Coahuila de Zaragoza",
										"Colima" => "Colima",
										"Chiapas" => "Chiapas",
										"Chihuahua" => "Chihuahua",
										"Distrito Federal" => "Distrito Federal",
										"Durango" => "Durango",
										"Guanajuato" => "Guanajuato",
										"Guerrero" => "Guerrero",
										"Hidalgo" => "Hidalgo",
										"Jalisco" => "Jalisco",
										"México" => "México",
										"Michoacán de Ocampo" => "Michoacán de Ocampo",
										"Morelos" => "Morelos",
										"Nayarit" => "Nayarit",
										"Nuevo León" => "Nuevo León",
										"Oaxaca" => "Oaxaca",
										"Puebla" => "Puebla",
										"Querétaro" => "Querétaro",
										"Quintana Roo" => "Quintana Roo",
										"San Luis Potosí" => "San Luis Potosí",
										"Sinaloa" => "Sinaloa",
										"Sonora" => "Sonora",
										"Tabasco" => "Tabasco",
										"Tamaulipas" => "Tamaulipas",
										"Tlaxcala" => "Tlaxcala",
										"Veracruz de Ignacio de la Llave" => "Veracruz de Ignacio de la Llave",
										"Yucatán" => "Yucatán",
										"Zacatecas" => "Zacatecas",
									);
									foreach ($estados as $estado => $val) {
										?>
											<option value="<?php echo $estado; ?>" <?php echo ($userestado == $estado)? 'selected="selected"' : '' ?>><?php echo $val ?></option>
										<?php
									}
								?>
							</select>
							<!-- Estado -->
						</div>
						<div class="third">
							<!-- Código postal -->
							<label for="cp">Código postal</label>
							<input type="text" name="cp" value="<?php echo $usercp; ?>">
							<!-- Código postal -->
						</div>
						<div class="third">
							<!-- Teléfono -->
							<label for="usertel">Teléfono</label>
							<input type="text" name="usertel" value="<?php echo $usertel; ?>">
							<!-- Teléfono -->
						</div>
						<div class="third">
							<!-- Correo -->
							<label for="useremail">Correo electrónico</label>
							<input type="text" name="useremail" value="<?php echo $useremail; ?>">
							<!-- Correo -->
						</div>
						<p class="tip">Todos los campos son obligatorios</p>
					</fieldset>
					<fieldset>
						<legend>Datos para facturación</legend>
							<!-- nombres -->
							<label for="nombrefiscal">Nombre o razón social</label>
							<input type="text" name="nombrefiscal" value="<?php echo $razon; ?>">
							<!-- nombres -->		
							<div class="third">
								<!-- Calle y número -->
								<label for="callenum">Calle y número</label>
								<input type="text" name="buscallenum" value="<?php echo $buscalle; ?>">
								<!-- Calle y número -->
							</div>
							<div class="third">
								<!-- Colonia -->
								<label for="colonia">Colonia</label>
								<input type="text" name="buscolonia" value="<?php echo $buscolonia; ?>">
								<!-- Colonia -->
							</div>
							<div class="third">
								<!-- Ciudad -->
								<label for="ciudad">Ciudad</label>
								<input type="text" name="busciudad" value="<?php echo $busciudad; ?>">
								<!-- Ciudad -->
							</div>
							<div class="third">
								<!-- Estado -->
								<label for="estado">Estado</label>
								<select name="busestado">
									<?php 
										$estados = array(
											"" => "Selecciona el estado",
											"Aguascalientes" => "Aguascalientes",
											"Baja California" => "Baja California",
											"Baja California Sur" => "Baja California Sur",
											"Campeche" => "Campeche",
											"Coahuila de Zaragoza" => "Coahuila de Zaragoza",
											"Colima" => "Colima",
											"Chiapas" => "Chiapas",
											"Chihuahua" => "Chihuahua",
											"Distrito Federal" => "Distrito Federal",
											"Durango" => "Durango",
											"Guanajuato" => "Guanajuato",
											"Guerrero" => "Guerrero",
											"Hidalgo" => "Hidalgo",
											"Jalisco" => "Jalisco",
											"México" => "México",
											"Michoacán de Ocampo" => "Michoacán de Ocampo",
											"Morelos" => "Morelos",
											"Nayarit" => "Nayarit",
											"Nuevo León" => "Nuevo León",
											"Oaxaca" => "Oaxaca",
											"Puebla" => "Puebla",
											"Querétaro" => "Querétaro",
											"Quintana Roo" => "Quintana Roo",
											"San Luis Potosí" => "San Luis Potosí",
											"Sinaloa" => "Sinaloa",
											"Sonora" => "Sonora",
											"Tabasco" => "Tabasco",
											"Tamaulipas" => "Tamaulipas",
											"Tlaxcala" => "Tlaxcala",
											"Veracruz de Ignacio de la Llave" => "Veracruz de Ignacio de la Llave",
											"Yucatán" => "Yucatán",
											"Zacatecas" => "Zacatecas",
										);
										foreach ($estados as $estado => $val) {
											?>
											<option value="<?php echo $estado; ?>" <?php echo ($busestado == $estado)? 'selected="selected"' : '' ?>><?php echo $val ?></option>
											<?php
										}
									?>
								</select>		
								<!-- Estado -->
							</div>
							<div class="third">
								<!-- Código postal -->
								<label for="buscp">Código postal</label>
								<input type="text" name="buscp" value="<?php echo $buscp; ?>">
								<!-- Código postal -->
							</div>
							<div class="third">
								<!-- RFC -->
								<label for="rfc">RFC</label>
								<input type="text" name="rfc" value="<?php echo $busrfc; ?>">
								<!-- RFC -->
							</div>
							<div class="third">
								<!-- Teléfono -->
								<label for="bustel">Teléfono</label>
								<input type="text" name="bustel" value="<?php echo $bustel; ?>">
								<!-- Teléfono -->
							</div>
							<div class="third">
								<!-- Correo -->
								<label for="busemail">Correo electrónico</label>
								<input type="text" name="busemail" value="<?php echo $busemail; ?>">
								<!-- Correo -->
							</div>
							<p class="tip">Todos los campos son obligatorios</p>
					</fieldset>
					<div>
						<input class="btn-enviar" type="submit" value="Guardar tus datos" name="submit-iss-userdata">
						<input type="hidden" name="iss_nonce" value="<?php echo wp_create_nonce('submit-iss-userdata-nonce') ?>">	
					</div>
				</form>
			</section>
		<?php
	}
	else
	{
		?>
			<section class="content-login">
				<?php echo do_shortcode('[custom-login-form]'); ?>
			</section>
		<?php
	}
?>
<?php get_footer(); ?>