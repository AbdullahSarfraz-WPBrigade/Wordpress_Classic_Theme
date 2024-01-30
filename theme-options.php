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
			<form action="options.php" method="post" enctype="multipart/form-data">
				<?php
					settings_fields("section_one");
					do_settings_sections("theme-options");
					submit_button();
				?>
			</form>
		</div>

		
	
	

<?php

}

function secondary_image_callback($args) {
    $slide_number = $args['slide_number'];
    $upload_secondary_image = get_option('upload_secondary_image' . $slide_number, '');

    ?>
    <input type="text" id="upload_secondary_image<?php echo $slide_number; ?>" name="upload_secondary_image<?php echo $slide_number; ?>" value="<?php echo esc_url($upload_secondary_image); ?>" />
    <button class="button" id="upload_secondary_image_button<?php echo $slide_number; ?>">Select Image</button>
    <p class="description">Enter the URL OR upload/select an image</p>

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

function page_link_start_callback() {
	

}



function slider_callback() {
    global $storedNumber;
    ?>
    <form method="post">
        <input type="number" id="stored_number" name="stored_number" value="<?php echo esc_attr($storedNumber); ?>" min="1">
        <!-- Buttons for incrementing and decrementing -->
        <button type="submit" name="increment">+</button>
        <button type="submit" name="decrement">-</button>
    </form>
    <?php
	
}

$storedNumber = get_option('stored_number', 1);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if + button is clicked
    if (isset($_POST['increment'])) {
        $storedNumber++;
    }
    // Check if - button is clicked
    elseif (isset($_POST['decrement']) && $storedNumber > 1) {
        $storedNumber--;
    }

    // Update the stored number in the database
    update_option('stored_number', $storedNumber);
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
		<input type="text" name="AAA_button_Testing" value="<?php echo get_option('AAA_button'); ?>" placeholder="AAA">	
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

function page_link_callback() {
    global $LinkedNumber;
    ?>
    <form method="post">
        <input type="number" id="linked_number" name="linked_number" value="<?php echo esc_attr($LinkedNumber); ?>" min="1">
        <!-- Buttons for incrementing and decrementing -->
        <button type="submit" name="increment1">+</button>
        <button type="submit" name="decrement1">-</button>
    </form>
    <?php
	
}

$LinkedNumber = get_option('linked_number', 1);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if + button is clicked
    if (isset($_POST['increment1']) && $LinkedNumber <= 3) {
        $LinkedNumber++;
    }
    // Check if - button is clicked
    elseif (isset($_POST['decrement1']) && $LinkedNumber > 1) {
        $LinkedNumber--;
    }

    // Update the stored number in the database
    update_option('linked_number', $LinkedNumber);
}

function first_page_link_icon_callback($args) {
    $link_number = $args['link_number'];
    $iy = $args['link_number'];
    $upload_first_icon = get_option('upload_first_icon' . $link_number, '');

    ?>
    <input type="text" id="upload_first_icon<?php echo $link_number; ?>" name="upload_first_icon<?php echo $link_number; ?>" value="<?php echo esc_url($upload_first_icon); ?>" />
    <button class="button" id="upload_first_icon_btn<?php echo $link_number; ?>">Select Icon</button>
    

    <script>
        jQuery(document).ready(function ($) {
            // Open media uploader when the button is clicked
            $('#upload_first_icon_btn<?php echo $link_number; ?>').click(function (e) {
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
                    $('#upload_first_icon<?php echo $link_number; ?>').val(attachment.url);
                });

                custom_uploader.open();
            });
        });
    </script>		

<?php
     
	

}



function top_p_text_callback($args) {
    $link_number = $args['link_number'];
    $top_p_text = get_option('top_p_text' . $link_number, '');
    
    ?>
        
        <input type="text" name="top_p_text<?php echo $link_number; ?>" value="<?php echo esc_attr($top_p_text); ?>" placeholder="P tag Text">
    <?php

}

function bottom_h_text_callback($args) {
    $link_number = $args['link_number'];
    $bottom_h_text = get_option('bottom_h_text' . $link_number, '');
    ?>
        
        <input type="text" name="bottom_h_text<?php echo $link_number; ?>" value="<?php echo esc_attr($bottom_h_text); ?>" placeholder="H tag Text">
    <?php

}

function slider_text_area_callback() {
    ?>
        <br>
    <?php
}

function slider_textarea_callback() {
    ?>
    <textarea name="slider_textarea" placeholder="Enter your Text to show in the Slider" rows="4" cols="50"><?php echo esc_textarea(get_option('slider_textarea')); ?></textarea>
    <?php
}





?>