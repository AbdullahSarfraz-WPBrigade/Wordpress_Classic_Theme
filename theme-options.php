<?php

function my_custom_menu_page_callback($wp_customize) {
?>
	<div class="wrap">
		<h2>Edit Theme</h2>
		<span>
			<?php 
				settings_errors();
			?>
		</span>
		<p>Edit your Menu page without code</p>
	</div>


		<div>
			<form action="options.php" method="post">
				<?php
					settings_fields("section_one");
					do_settings_sections("theme-options");
					submit_button();
				?>
			</form>
		</div>

		
	
	

<?php

}

// working but not posting the data into Database

function secondary_image_callback($args) {
    $slide_number = $args['slide_number'];
	error_log('Check: ' . print_r($_POST, true));
    
    ?>
    <input type="text" id="upload_secondary_image<?php echo $slide_number; ?>" name="upload_secondary_image<?php echo $slide_number; ?>" value="<?php echo get_option('upload_secondary_image' . $slide_number); ?>" />
    <button class="button" id="upload_secondary_image_button<?php echo $slide_number; ?>">Select Image</button>
    <p class="description">Enter the URL of the image or use the button to upload/select an image.</p>

    <script>
        jQuery(document).ready(function ($) {
            // Open media uploader when the button is clicked
            $('#upload_secondary_image_button<?php echo $slide_number; ?>').click(function (e) {
                e.preventDefault();
                var custom_uploader = wp.media({
                    title: 'Select Image',
                    button: {
                        text: 'Select'
                    },
                    multiple: false  // Set this to true to allow multiple image selection
                });

                custom_uploader.on('select', function () {
                    var attachment = custom_uploader.state().get('selection').first().toJSON();
                    $('#upload_secondary_image<?php echo $slide_number; ?>').val(attachment.url);
                });

                custom_uploader.open();
            });
        });
    </script>
    <?php
}


function Ayuda_callback() {
	?>
		<input type="text" name="Ayuda_text" value="<?php echo get_option('Ayuda_text'); ?>" placeholder="Ayuda">
	<?php
}
	
function Mapa_callback() {
	?>	
		<input type="text" name="Mapa" value="<?php echo get_option('Mapa'); ?>" placeholder="Mapa del sitio">	
	<?php
}

function AAA_callback() {
	?>	
		<input type="text" name="AAA_button" value="<?php echo get_option('AAA_button'); ?>" placeholder="AAA">	
	<?php
}

function miercolo_callback() {
	?>	
		<input type="text" name="miercolo_text" value="<?php echo get_option('miercolo_text'); ?>" placeholder="miercolo">	
	<?php
}

function Proceso_callback() {
	?>	
		<input type="text" name="Proceso_text" value="<?php echo get_option('Proceso_text'); ?>" placeholder="Proceso">	
	<?php
}

function Iniciar_callback() {
	?>	
		<input type="text" name="Iniciar_text" value="<?php echo get_option('Iniciar_text'); ?>" placeholder="Iniciar">	
	<?php
	echo '<h4>-------------------------------------------------------------------------------------</h4>';
	echo '<h4>Slider Settings</h4>';
}



function GARANTIZA_callback() {
	?>	
		<input type="text" name="GARANTIZA_text" value="<?php echo get_option('GARANTIZA_text'); ?>" placeholder="GARANTIZA">	
	<?php
}



function EL_callback() {
	?>	
		<input type="text" name="EL_text" value="<?php echo get_option('EL_text'); ?>" placeholder="EL">	
	<?php
}


function BIENESTAR_callback() {
	?>	
		<input type="text" name="BIENESTAR_text" value="<?php echo get_option('BIENESTAR_text'); ?>" placeholder="BIENESTAR">	
	<?php
}


function DE_callback() {
	?>	
		<input type="text" name="DE_text" value="<?php echo get_option('DE_text'); ?>" placeholder="DE">	
	<?php
}


function EMPLEADOS_callback() {
	?>	
		<input type="text" name="EMPLEADOS_text" value="<?php echo get_option('EMPLEADOS_text'); ?>" placeholder="EMPLEADOS">	
	<?php
}


function CON_callback() {
	?>	
		<input type="text" name="CON_text" value="<?php echo get_option('CON_text'); ?>" placeholder="CON">	
	<?php
}


function POSITIVA_callback() {
	?>	
		<input type="text" name="POSITIVA_text" value="<?php echo get_option('POSITIVA_text'); ?>" placeholder="POSITIVA">	
	<?php
}
?>


