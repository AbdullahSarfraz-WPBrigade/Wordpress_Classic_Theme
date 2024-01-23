<?php
    get_header();
	
?>

<?php
function display_under_head() {
    $GARANTIZA_text = get_option('GARANTIZA_text', '');
	$EL_text = get_option('EL_text','');
	$BIENESTAR_text = get_option('BIENESTAR_text','');
	$DE_text = get_option('DE_text','');
	$EMPLEADOS_text = get_option('EMPLEADOS_text','');
	$CON_text = get_option('CON_text','');
	$POSITIVA_text = get_option('POSITIVA_text','');

	$storedNumber = get_option('stored_number', 1);

	$LinkedNumber = get_option('linked_number', 1);

	$top_p_text = get_option('top_p_text', '');
	$bottom_h_text = get_option('bottom_h_text', '');
?>
		<div class="Main-hero">

			<div class="owl-carousel owl-theme owl-carousel1">

				<?php for ($i = 1; $i <= $storedNumber; $i++) { ?>

				<div class="item">
					
					
					
				<div class="Hero" style="background-image: url('<?php echo (get_option('upload_secondary_image' . $i)) ? esc_url(get_option('upload_secondary_image' . $i)) : get_template_directory_uri() . '/assets/images/rectangle4copia4.png'; ?>'); ">

						<div class="Container">

						<pre class="Hero-AllText">                      <span class="H-TOne"><?php echo"$GARANTIZA_text"; ?></span> <span class="H-TTwo"><?php echo"$EL_text"; ?></span> <span class="H-TOne"><?php echo"$BIENESTAR_text"; ?></span>
								<span class="H-TThree"><?php echo"$DE_text"; ?></span>
								<span class="H-TFour"><?php echo"$EMPLEADOS_text"; ?></span>
								<span class="H-TCON"><?php echo"$CON_text"; ?></span> <span class="H-TPos"><?php echo"$POSITIVA_text"; ?></span>

						</pre>
					
						</div>

					</div>

				</div>
					<?php } ?>

				

			</div>

			<div class="Hero-Cards">

						<div class="Container">

								<div class="Hero-Cards-flex owl-carousel owl-theme owl-carousel5" >
									<?php for($iy=1; $iy<=$LinkedNumber; $iy++) { ?>
									<div class="item">
										<div class="HC-One ">
											<img src="<?php echo (get_option('upload_first_icon' . $iy)) ? esc_url(get_option('upload_first_icon' . $iy)) : get_template_directory_uri() . '/assets/images/frame.png'; ?> ); ">
											<p><?php echo (get_option('top_p_text' . $iy)) ? esc_attr(get_option('top_p_text' . $iy)) : "Default P tag"; ?></p>
											<h4><?php echo (get_option('bottom_h_text' . $iy)) ? esc_attr(get_option('bottom_h_text' . $iy)) : "Default H"; ?></h4>
										</div>
									</div>    
									<?php
										}
									?>
										
									
											

								</div>

						</div>

			</div>

		</div>
<?php    

				}

?>

<?php
    get_sidebar();
    get_footer();

?>    