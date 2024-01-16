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


function Ayuda_callback() {
	?>
		<input type="text" name="Ayuda" value="<?php echo get_option('Ayuda'); ?>" placeholder="Ayuda">
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
}

?>



