<?php
	//añadir thumbnails
	add_theme_support('post-thumbnails');
	//thumb para single curso 
	add_image_size('curso-img',680,240,array('center','top'));
	add_image_size('curso-indiv',300,300,array('center','top'));
	add_image_size('blog-cat-page',450,350,array('center','top'));
	add_image_size('cap-slider',9999,500,array('center','top'));
	//campos extra
	function extrafields(){
		add_meta_box('extrafields','Detalles del curso','extrafields_callback','post');
	}
	add_action('add_meta_boxes','extrafields');
	//crea un formulario nuevo en admin con los campos extra
	function extrafields_callback($post){
		wp_nonce_field(plugin_basename(__FILE__),'fechascap_nonce');
		?>
			<p>
				<label class="extra" for="fechascap">Fechas</label>
				<input type="text" class="issfield" name="fechascap" value="<?php echo get_post_meta($post->ID,'_fechascap',true); ?>">
			</p>
			<p class="howto">Añade las fechas en que este curso se llevará a cabo. Si el campo se queda vacío, aparecerá “Fecha por definir”.</p>
			<p>
				<label class="extra" for="precionormal">Precio Normal</label>
				<input type="text" class="issfield" name="precionormal" value="<?php echo get_post_meta($post->ID,'_precionormal',true); ?>">
			</p>
			<p class="howto">Escribe aquí el precio normal para el curso. Si este campo se deja vacío, se mostrará “Precio por definir”. No hace falta escribir + IVA, eso se agrega automáticamente.</p>
			<p>			
				<label class="extra" for="precioespecial">Precio Especial</label>
				<input type="text" class="issfield" name="precioespecial" value="<?php echo get_post_meta($post->ID,'_precioespecial',true); ?>">
			</p>
			<p class="howto">Escribe aquí el precio de promoción para el curso, si lo tiene. Si escribes aquí un precio, el precio normal aparecerá tachado. No hace falta escribir + IVA, eso se agrega automáticamente.
			</p>
			<p>
				<label class="extra" for="preciopaypal">Precio neto PayPal</label>
				<input type="text" class="issfield" name="preciopaypal" value="<?php echo get_post_meta($post->ID,'_preciopaypal',true); ?>">
			</p>
			<p class="howto">En este campo se coloca el precio neto por persona a pagarse a través de PayPal.</p>
			<p>
				<label class="extra" for="lugar">Lugar</label>
				<input type="text" class="issfield" name="lugar" value="<?php echo get_post_meta($post->ID,'_lugar',true); ?>">
			</p>
			<p class="howto">Aquí escribe el lugar donde se celebrará el curso. Si este campo se deja vacío, se mostrará “Lugar por definir”.
			</p>
			<p>
				<label class="extra" for="duracion">Duración</label>
				<input type="text" class="issfield" name="duracion" value="<?php echo get_post_meta($post->ID,'_duracion',true); ?>">
			</p>
			<p class="howto">El número de horas que dura este curso. Si se deja vacío este campo, aparecerá “Por definir”.</p>
			<h2 class="ben">Beneficios</h2>
			<p>
				<input type="checkbox" name="manual" value="true" <?php $manualset = get_post_meta($post->ID,'_manual',true); if($manualset == 'true'){echo 'checked';} ?>>
				<label for="manual">Manual del participante</label>
			</p>
			<p>				
				<input type="checkbox" name="acceso" value="true" <?php $accesoset = get_post_meta($post->ID,'_acceso',true); if($accesoset == 'true'){echo 'checked';} ?>>
				<label for="acceso">Acceso a las presentaciones y materiales en el archivo electrónico</label>
			</p>
			<p>
				<input type="checkbox" name="compartir" value="true" <?php $compartirset = get_post_meta($post->ID,'_compartir',true); if($compartirset == 'true'){echo 'checked';} ?>>
				<label for="compartir">Compartir las experiencias con profesionales de diversas disciplinas</label>
			</p>
			<p>
				<input type="checkbox" name="coffeebreak" value="true" <?php $coffeebreakset = get_post_meta($post->ID,'_coffeebreak',true); if($coffeebreakset == 'true'){echo 'checked';} ?>>
				<label for="coffeebreak">Coffee break mañana y tarde</label>
			</p>
			<p>
				<input type="checkbox" name="estacionamiento" value="true" <?php $estacionamientoset = get_post_meta($post->ID,'_estacionamiento',true); if($estacionamientoset == 'true'){echo 'checked';} ?>>
				<label for="estacionamiento">Estacionamiento</label>
			</p>
			<p>
				<input type="checkbox" name="diploma" value="true" <?php $diplomaset = get_post_meta($post->ID,'_diploma',true); if($diplomaset == 'true'){echo 'checked';} ?>>
				<label for="diploma">Diploma de participación</label>
			</p>
			<p>
				<input type="checkbox" name="comida" value="true" <?php $comidaset = get_post_meta($post->ID,'_comida',true); if($comidaset == 'true'){echo 'checked';} ?>>
				<label for="comida">Comida de medio día</label>
			</p>
			<p>
				<input id="pdftemario" type="text" name="pdftemario" value="<?php echo get_post_meta($post->ID,'_pdftemario',true); ?>">
				<input type="button" id="upload_pdftemario" value="Sube el temario en PDF">
			</p>
		<?php
	}
	//guarda todos los campos extra
	function extrafields_save($post_id){
		$extrafields = array(
				'_fechascap' => sanitize_text_field($_POST['fechascap']),
				'_precionormal' => sanitize_text_field($_POST['precionormal']),
				'_precioespecial' => sanitize_text_field($_POST['precioespecial']),
				'_preciopaypal' => sanitize_text_field($_POST['preciopaypal']),
				'_lugar' => sanitize_text_field($_POST['lugar']),
				'_duracion' => sanitize_text_field($_POST['duracion']),
				'_manual' => sanitize_text_field($_POST['manual']),
				'_acceso' => sanitize_text_field($_POST['acceso']),
				'_compartir' => sanitize_text_field($_POST['compartir']),
				'_coffeebreak' => sanitize_text_field($_POST['coffeebreak']),
				'_estacionamiento' => sanitize_text_field($_POST['estacionamiento']),
				'_diploma' => sanitize_text_field($_POST['diploma']),
				'_comida' => sanitize_text_field($_POST['comida']),
				'_pdftemario' => sanitize_text_field($_POST['pdftemario']),
			);
		foreach ($extrafields as $metakey => $data) {
			update_post_meta($post_id,$metakey,$data);
		}
	}
	add_action('save_post','extrafields_save');
	//estilo para los campos en admin
	function field_style()
	{
		echo
		'
		<style>			
			.issfield {
				width: 100%;
			}
			.extra {
				font-weight: bold;
			}
			#extrafields h2.ben {
				font-size: 14px;
				padding: 8px 0px;
				margin: 0;
				line-height: 1.4;
				font-weight: bold;
			}
		</style>
		';
	}
	add_action('admin_head','field_style');
	//editor box nuevo para añadir "este curso está dirigido a..."
	//mostrar el editor
	class dirigido_editor {
		function __construct(){
			add_action('edit_page_form',array($this,'curso_dirigido'));
			add_action('edit_form_advanced',array($this,'curso_dirigido'));
			add_action('save_post',array($this,'guardar_dirigido'));			
		}
		//mostrar el editor
		function curso_dirigido($post){
			wp_nonce_field('curso_dirigido','curso_dirigido_nonce');
			$content = get_post_meta($post->ID,'_dirigido',true);
			wp_editor($content,'cursodirigido',array(
				'textarea_name' => 'cursodirigido',
				'media_buttons' => false,
			));
		}
		//guardar el contenido del editor
		function guardar_dirigido($post_id){
			//revisa si el nonce se ha enviado
			if(!isset($_POST['curso_dirigido_nonce'])) {
				return $post_id;
			}
			//checa si el nonce es válido
			if(!wp_verify_nonce($_POST['curso_dirigido_nonce'],'curso_dirigido')) {
				return $post_id;
			}
			//no guarde en autosave
			if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
				return $post_id;
			}
			//checar permisos
			if('page' === get_post_type($post_id)) {
				if(!current_user_can('edit_page',$post_id)){
					return $post_id;
				}
			} else {
				if(!current_user_can('edit_post',$post_id)) {
					return $post_id;
				}
			}
			//limpiar contenido
			$sane_content = wp_kses_post($_POST['cursodirigido']);
			//guardar contenido 
			update_post_meta($post_id,'_dirigido',$sane_content);
		}		
	}
	$inicia_elgon = new dirigido_editor();
	// quitar autop
	remove_filter( 'the_excerpt', 'wpautop' );
	// script para carga de temario
	function subetemariopdf()
	{
		wp_enqueue_script('media-upload');
		wp_enqueue_script('thickbox');
		wp_register_script('sube-pdf',get_template_directory_uri().'/js/sube-pdf.js',array('jquery','media-upload','thickbox'));
		wp_enqueue_script('sube-pdf');
	}
	function my_admin_styles()
	{
		wp_enqueue_style('thickbox');
	}
	add_action('admin_print_scripts','subetemariopdf');
	add_action('admin_print_styles','my_admin_styles');
	// procesar datos de usuario
	function save_iss_userdata()
	{
		global $current_user;
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
			'_usertel' => sanitize_text_field($_POST['usertel']),
			'user_email' => sanitize_text_field($_POST['useremail']),
			//datos de empresa
			'_razon' => sanitize_text_field($_POST['nombrefiscal']),
			'_buscalle' => sanitize_text_field($_POST['buscallenum']),
			'_buscolonia' => sanitize_text_field($_POST['buscolonia']),
			'_busciudad' => sanitize_text_field($_POST['busciudad']),
			'_busestado' => sanitize_text_field($_POST['busestado']),
			'_buscp' => sanitize_text_field($_POST['buscp']),
			'_busrfc' => sanitize_text_field($_POST['rfc']),
			'_bustel' => sanitize_text_field($_POST['bustel']),
			'_busemail' => sanitize_text_field($_POST['busemail']),
		);		
		$checkDatosusuario = array_filter($datosdeusuario);
		$msg = array();
		//
		if(isset($_POST['submit-iss-userdata']) && wp_verify_nonce($_POST['iss_nonce'],'submit-iss-userdata-nonce'))
		{
			if(!empty($checkDatosusuario))
			{
				foreach ($datosdeusuario as $key => $valor)
				{
				update_user_meta($current_user->ID,$key,$valor);
				}
				$msg[] = 'Tus datos se han guardado exitosamente';
			}
			else
			{
				$msg[] = 'Necesitas llenar todos los datos, todos los campos son obligatorios.';
			}
		}
		else
		{
			$msg[] = 'Ocurrió un error desconocido. Por favor, intenta más tarde.';
		}
	}
	add_action('init','save_iss_userdata');
	//mostrar datos de usuario en admin
	function show_iss_user_profile($user)
	{
		//datos de usuario
		$nombre = get_the_author_meta('first_name',$user->ID);
		$apellidopaterno = get_the_author_meta('last_name',$user->ID);
		$apellidomaterno = get_the_author_meta('_apellidom',$user->ID);
		$usercalle = get_the_author_meta('_usercalle',$user->ID);
		$usercolonia = get_the_author_meta('_usercolonia',$user->ID);
		$userciudad = get_the_author_meta('_userciudad',$user->ID);
		$userestado = get_the_author_meta('_userestado',$user->ID);
		$usercp = get_the_author_meta('_usercp',$user->ID);
		//datos de empresa
		$razon = get_the_author_meta('_razon',$user->ID);
		$buscalle = get_the_author_meta('_buscalle',$user->ID);
		$buscolonia = get_the_author_meta('_buscolonia',$user->ID);
		$busciudad = get_the_author_meta('_busciudad',$user->ID);
		$busestado = get_the_author_meta('_busestado',$user->ID);
		$buscp = get_the_author_meta('_buscp',$user->ID);
		$busrfc = get_the_author_meta('_busrfc',$user->ID);
		?>
			<h3>Datos del cliente</h3>
			<table class="form-table">
				<tbody>
					<tr>
						<th><label for="nombre">Nombre(s)</label></th>
						<td><input type="text" value="<?php echo esc_attr($nombre); ?>" name="nombre"></td>
					</tr>
					<tr>
						<th><label for="apellidopaterno">Apellido paterno</label></th>
						<td><input type="text" value="<?php echo esc_attr($apellidopaterno); ?>" name="apellidopaterno"></td>
					</tr>
					<tr>
						<th><label for="apellidomaterno">Apellido materno</label></th>
						<td><input type="text" value="<?php echo esc_attr($apellidomaterno); ?>" name="apellidomaterno"></td>
					</tr>
					<tr>
						<th><label for="usercalle">Calle y número</label></th>
						<td><input type="text" for="usercalle" value="<?php echo esc_attr($usercalle); ?>"></td>
					</tr>
					<tr>
						<th><label for="usercolonia">Colonia</label></th>
						<td><input type="text" for="usercolonia" value="<?php echo esc_attr($usercolonia); ?>"></td>
					</tr>
					<tr>
						<th><label for="userciudad">Ciudad</label></th>
						<td><input type="text" for="userciudad" value="<?php echo esc_attr($userciudad); ?>"></td>
					</tr>
					<tr>
						<th><label for="userestado">Estado</label></th>
						<td>
							<select name="userestado">
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
						</td>
					</tr>
					<tr>
						<th><label for="usercp">Código postal</label></th>
						<td><input type="text" name="usercp" value="<?php echo esc_attr($usercp); ?>"></td>
					</tr>
				</tbody>
			</table>
			<h3>Datos de facturación</h3>
			<table class="form-table">
				<tbody>
					<tr>
						<th><label for="razon">Razón social</label></th>
						<td><input type="text" value="<?php echo esc_attr($razon); ?>" name="razon"></td>
					</tr>
					<tr>
						<th><label for="buscalle">Calle y número</label></th>
						<td><input type="text" for="buscalle" value="<?php echo esc_attr($buscalle); ?>"></td>
					</tr>
					<tr>
						<th><label for="buscolonia">Colonia</label></th>
						<td><input type="text" for="buscolonia" value="<?php echo esc_attr($buscolonia); ?>"></td>
					</tr>
					<tr>
						<th><label for="busciudad">Ciudad</label></th>
						<td><input type="text" for="busciudad" value="<?php echo esc_attr($busciudad); ?>"></td>
					</tr>
					<tr>
						<th><label for="busestado">Estado</label></th>
						<td>
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
						</td>
					</tr>
					<tr>
						<th><label for="buscp">Código postal</label></th>
						<td><input type="text" name="buscp" value="<?php echo esc_attr($buscp); ?>"></td>
					</tr>
				</tbody>
			</table>
		<?php
	}// fin function show iss user profile
	add_action('show_user_profile','show_iss_user_profile');
	add_action('edit_user_profile','show_iss_user_profile');
?>