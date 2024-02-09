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

function services_blank_callback() {
    ?>
      <br>
    <?php
}

// --------------------------------Footer Top Services Icon
function footer_services_callback() {
    global $ServicesNumber;
    ?>
    <form method="post">
        <input type="number" id="services_number" name="services_number" value="<?php echo esc_attr($ServicesNumber); ?>" min="1">
        <!-- Buttons for incrementing and decrementing -->
        <button type="submit" name="increment2">+</button>
        <button type="submit" name="decrement2">-</button>
    </form>
    <?php
}

$ServicesNumber = get_option('services_number', 1);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if + button is clicked
    if (isset($_POST['increment2']) && $ServicesNumber <= 2) {
        $ServicesNumber++;
    }
    // Check if - button is clicked
    elseif (isset($_POST['decrement2']) && $ServicesNumber > 1) {
        $ServicesNumber--;
    }

    // Update the stored number in the database
    update_option('services_number', $ServicesNumber);
}

function services_images_callback($args) {
    $ServicesNumber = $args['service_number'];
    $services_icons = get_option('services_icons' . $ServicesNumber, '');

    ?>
    <input type="text" id="services_icons<?php echo $ServicesNumber; ?>" name="services_icons<?php echo $ServicesNumber; ?>" value="<?php echo esc_url($services_icons); ?>" />
    <button class="button" id="services_icons_btn<?php echo $ServicesNumber; ?>">Select Icon</button>
    

    <script>
        jQuery(document).ready(function ($) {
            // Open media uploader when the button is clicked
            $('#services_icons_btn<?php echo $ServicesNumber; ?>').click(function (e) {
                e.preventDefault();
                var custom_uploader = wp.media({
                    title: 'Select Image',
                    button: {
                        text: 'Select'
                    },
                    multiple: false  
                });

                custom_uploader.on('select', function () {
                    var attachment = custom_uploader.state().get('selection').first().toJSON();
                    $('#services_icons<?php echo $ServicesNumber; ?>').val(attachment.url);
                });

                custom_uploader.open();
            });
        });
    </script>

<?php
}
function services_top_p_callback($args) {
    $service_number = $args['service_number'];
    $top_p_s_text = get_option('top_p_s_text' . $service_number, '');
    
    ?>   
        <input type="text" name="top_p_s_text<?php echo $service_number; ?>" value="<?php echo esc_attr($top_p_s_text); ?>" placeholder="P tag Text">
    <?php
}

function services_bottom_h_callback($args) {
    $service_number = $args['service_number'];
    $botton_h_s_text = get_option('botton_h_s_text' . $service_number, '');

    ?>
        <input type="text" name="botton_h_s_text<?php echo $service_number; ?>" value="<?php echo esc_attr($botton_h_s_text); ?>" placeholder="H tag Text">
    <?php
}

// --------------------------------Footer Bottom Services Icon
function services_b_blank_callback() {
    ?>
        <br>
    <?php
}

function footer_b_services_callback() {
    global $ServicesNumberOne;
    ?>
    <form method="post">
        <input type="number" id="service_b_number" name="service_b_number" value="<?php echo esc_attr($ServicesNumberOne); ?>" min="1">
        <!-- Buttons for incrementing and decrementing -->
        <button type="submit" name="increment3">+</button>
        <button type="submit" name="decrement3">-</button>
    </form>
    <?php
}

$ServicesNumberOne = get_option('service_b_number', 1);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if + button is clicked
    if (isset($_POST['increment3']) && $ServicesNumberOne <= 2) {
        $ServicesNumberOne++;
    }
    // Check if - button is clicked
    elseif (isset($_POST['decrement3']) && $ServicesNumberOne > 1) {
        $ServicesNumberOne--;
    }

    // Update the stored number in the database
    update_option('service_b_number', $ServicesNumberOne);
}

function bottom_service_icon_callback($args) {
    $ServicesNumberOne = $args['service_b_number'];
    $services_btm_icons = get_option('service_bottom_icon' . $ServicesNumberOne, '');

    ?>
    <input type="text" id="service_bottom_icon<?php echo $ServicesNumberOne; ?>" name="service_bottom_icon<?php echo $ServicesNumberOne; ?>" value="<?php echo esc_url($services_btm_icons); ?>" />
    <button class="button" id="services_btm_btn<?php echo $ServicesNumberOne; ?>">Select Icon</button>
    

    <script>
        jQuery(document).ready(function ($) {
            // Open media uploader when the button is clicked
            $('#services_btm_btn<?php echo $ServicesNumberOne; ?>').click(function (e) {
                e.preventDefault();
                var custom_uploader = wp.media({
                    title: 'Select Image',
                    button: {
                        text: 'Select'
                    },
                    multiple: false  
                });

                custom_uploader.on('select', function () {
                    var attachment = custom_uploader.state().get('selection').first().toJSON();
                    $('#service_bottom_icon<?php echo $ServicesNumberOne; ?>').val(attachment.url);
                });

                custom_uploader.open();
            });
        });
    </script>

<?php
}

function bottom_f_p_text_callback($args) {
    $service_b_number = $args['service_b_number'];
    $bottom_f_p_text = get_option('bottom_f_p_text' . $service_b_number, '');
    
    ?>   
        <input type="text" name="bottom_f_p_text<?php echo $service_b_number; ?>" value="<?php echo esc_attr($bottom_f_p_text); ?>" placeholder="P tag Text">
    <?php
}

function bottom_f_h_text_callback($args) {
    $service_b_number = $args['service_b_number'];
    $bottom_f_h_text = get_option('bottom_f_h_text' . $service_b_number, '');

    ?>
        <input type="text" name="bottom_f_h_text<?php echo $service_b_number; ?>" value="<?php echo esc_attr($bottom_f_h_text); ?>" placeholder="H tag Text">
    <?php
}

function footer_left_logo_callback() {
    $footer_side_logo = get_option('footer_side_logo', '');

    ?>
    <input type="text" id="footer_side_logo" name="footer_side_logo" value="<?php echo esc_url($footer_side_logo); ?>" />
    <button class="button" id="footer_side_logo_id">Select logo</button>
    

    <script>
        jQuery(document).ready(function ($) {
            // Open media uploader when the button is clicked
            $('#footer_side_logo_id').click(function (e) {
                e.preventDefault();
                var custom_uploader = wp.media({
                    title: 'Select Image',
                    button: {
                        text: 'Select'
                    },
                    multiple: false  
                });

                custom_uploader.on('select', function () {
                    var attachment = custom_uploader.state().get('selection').first().toJSON();
                    $('#footer_side_logo').val(attachment.url);
                });

                custom_uploader.open();
            });
        });
    </script>

<?php
}

function footer_text_firstline_callback() {
	?>	
		<input type="text" name="footer_text_firstline" value="<?php echo get_option('footer_text_firstline'); ?>" placeholder="1st line footer">	
	<?php
}

function footer_text_secondline_callback() {
	?>	
		<input type="text" name="footer_text_secondline" value="<?php echo get_option('footer_text_secondline'); ?>" placeholder="2n line footer">	
	<?php
}

function Bottom_end_logo_callback() {
    $Bottom_end_logo = get_option("Bottom_end_logo","");
    ?>
        <input type="text" name="Bottom_end_logo" id="Bottom_end_logo" value="<?php echo esc_url($Bottom_end_logo) ?>"/>
        <button class="button" id="bottom_end_logo_id">Upload footer logo</button>

        <script>
            jQuery(document).ready(function($) {

                $('#bottom_end_logo_id').click(function(e) {
                    e.preventDefault();
                    var custom_uploader = wp.media({
                        title: 'Select Image',
                        button: {
                            text: 'Select',
                        },
                        multiple: false
                    });
                    custom_uploader.on('select', function() {
                        var attachment = custom_uploader.state().get('selection').first().toJSON();
                        $('#Bottom_end_logo').val(attachment.url);
                    })
                    custom_uploader.open();
                })
            })
        </script>
    <?php
}



?>