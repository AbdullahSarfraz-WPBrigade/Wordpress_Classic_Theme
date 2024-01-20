<?php
    get_header();

?>

<?php
function display_gray_topline_testing() {
    $GARANTIZA_text = get_option('GARANTIZA_text', '');
	$EL_text = get_option('EL_text','');
	$BIENESTAR_text = get_option('BIENESTAR_text','');
	$DE_text = get_option('DE_text','');
	$EMPLEADOS_text = get_option('EMPLEADOS_text','');
	$CON_text = get_option('CON_text','');
	$POSITIVA_text = get_option('POSITIVA_text','');
?>
		<div class="Main-hero">

			<div class="owl-carousel owl-theme owl-carousel1">

				
				<div class="item">
					
				<?php for ($i = 1; $i <= 4; $i++) { ?>	
					
				<div class="Hero" style="background-image: url('<?php echo get_option('hero_slider_bacground_img' . $i); ?>');">

						<div class="Container">

						<pre class="Hero-AllText">                      <span class="H-TOne"><?php echo"$GARANTIZA_text"; ?></span> <span class="H-TTwo"><?php echo"$EL_text"; ?></span> <span class="H-TOne"><?php echo"$BIENESTAR_text"; ?></span>
								<span class="H-TThree"><?php echo"$DE_text"; ?></span>
								<span class="H-TFour"><?php echo"$EMPLEADOS_text"; ?></span>
								<span class="H-TCON"><?php echo"$CON_text"; ?></span> <span class="H-TPos"><?php echo"$POSITIVA_text"; ?></span>

						</pre>
					
						</div>

					</div>

				</div>

				<div class="item">

					<div class="Hero" style="background-image: url('<?php echo get_option('hero_slider_bacground_img' . $i); ?>'); ">

						<div class="Container">

						<pre class="Hero-AllText">                      <span class="H-TOne"><?php echo"$GARANTIZA_text"; ?></span> <span class="H-TTwo">EL</span> <span class="H-TOne">BIENESTAR</span>
								<span class="H-TThree">DE TUS</span>
								<span class="H-TFour">EMPLEADOS</span>
								<span class="H-TCON">CON</span> <span class="H-TPos">POSITIVA</span>

						</pre>

					
						</div>     

					</div>

				</div>

				<div class="item">

					<div class="Hero" style="background-image: url('<?php echo get_option('hero_slider_bacground_img' . $i); ?>');">

						<div class="Container">

						<pre class="Hero-AllText">                      <span class="H-TOne"><?php echo"$GARANTIZA_text"; ?></span> <span class="H-TTwo"><?php echo"$EL_text"; ?></span> <span class="H-TOne"><?php echo"$BIENESTAR_text"; ?></span>
								<span class="H-TThree"><?php echo"$DE_text"; ?></span>
								<span class="H-TFour"><?php echo"$EMPLEADOS_text"; ?></span>
								<span class="H-TCON"><?php echo"$CON_text"; ?></span> <span class="H-TPos"><?php echo"$POSITIVA_text"; ?></span>

						</pre>             
					
						</div>

					</div>

				</div>

				<div class="item">

					<div class="Hero" style="background-image: url('<?php echo get_option('hero_slider_bacground_img' . $i); } ?> ');">

						<div class="Container">

						<pre class="Hero-AllText">                      <span class="H-TOne"><?php echo"$GARANTIZA_text"; ?></span> <span class="H-TTwo"><?php echo"$EL_text"; ?></span> <span class="H-TOne"><?php echo"$BIENESTAR_text"; ?></span>
								<span class="H-TThree"><?php echo"$DE_text"; ?></span>
								<span class="H-TFour"><?php echo"$EMPLEADOS_text"; ?></span>
								<span class="H-TCON"><?php echo"$CON_text"; ?></span> <span class="H-TPos"><?php echo"$POSITIVA_text"; ?></span>

						</pre>
					
						</div>

					</div>

				</div>

			</div>

			<div class="Hero-Cards">

						<div class="Container">

								<div class="Hero-Cards-flex owl-carousel owl-theme owl-carousel5" >

									<div class="item">
										<div class="HC-One ">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/frame.png" alt="group-img">
											<p>RIESGOS LABORALES</p>
											<h4>ARL</h4>
										</div>
									</div>    
										
										
										<div class="item">
												<div class="HC-Two ">
													<p>
														Vida Individual <br>
														&ensp; Vida Grupo
													</p>
										
													<p>
														Accidentes <br>
														Personales
													</p>
										
													<input type="submit" value="VER MÁS">
												</div>
										</div>
											
										
										
											<div class="item">
												<div class="HC-Three ">
													<img src="<?php echo get_template_directory_uri(); ?>/assets/images/frame-1.png" alt="group-img">
													<p>SEGUROS</p>
													<h4>PERSONALES</h4>
												</div>
											</div>
											
										
											<div class="item">
												<div class="HC-Four">
													<img src="<?php echo get_template_directory_uri(); ?>/assets/images/frame-4.png" alt="group-img">
													<p>OTROS</p>
													<h4>SEGUROS</h4>
												</div>
											</div>
											

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