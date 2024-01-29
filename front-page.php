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

	$selected_departamento = get_theme_mod( 'departamento_select' );
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

		<div class="Main-Article">

			<div class="Container">

				<div class="MA-Flex">
					<div class="MA-Cards owl-carousel owl-theme owl-carousel6">
						<?php
						$args = array(
							'post_type' => 'post',
							'posts_per_page' => 3,
							'orderby' => 'date',
							'order' => 'DESC',
						);

						$latest_posts = new WP_Query($args);

						if ($latest_posts->have_posts()) :
							while ($latest_posts->have_posts()) : $latest_posts->the_post();
						?>
								<div class="item">
									<div class=" MA-Dots">

											<p class="upper-orange"><?php the_title(); ?></p>
											<div>
												<?php if (has_post_thumbnail()) : ?>
													<div class="back-img"><?php the_post_thumbnail('medium');  ?></div>
												<?php endif; ?>
											</div>
											<div class="under-words post-excerpt">
												<p><?php the_excerpt(); ?></p>
											</div>
										
									</div>
								</div>
						<?php
							endwhile;
							wp_reset_postdata(); // Reset the query
						else :
							echo 'No posts found.';
						endif;
						?>
					</div>

					
		
					<div class="MA-Qote">
							<div class="Two-btns">
								<div class="left-btn-MA">
									<input type="submit" value="Red Asistencial">
								</div>
			
								<div class="right-btn-MA two-btn-color">
									<input type="submit" value="Punto de Atención">
								</div>
							</div>
			
							<div class="Mid-Line"> 
								Consulta Rapidamente tu red asistencial
							</div>
			
							<div class="first-btn-div">
			
								<label for="Departamento">Departamento:</label><br>
			
			
								<select name="Departamento" id="Departamento" class="select-size">
									<option value="Departamento" id="Departamento"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/forma4copia3.png" ></option>
									
									<option value="Departamento" id="Departamento">Departamento</option>
									
									<option value="Departamento" id="Departamento">Departamento</option>
									
									<option value="Departamento" id="Departamento">Departamento</option>
								</select> <br>
			
								<label for="Ciudad">Ciudad:</label><br>
			
								<select name="Ciudad" id="Ciudad" class="select-size" class="select-size">
									<option value="Ciudad" id="Ciudad"></option>
									<option value="Ciudad" id="Ciudad">Ciudad</option>
								</select>
			
								<label for="Selecciones Red">Selecciones Red:</label><br>
			
								<select name="Selecciones" id="Selecciones" class="select-size">
									<option value="Selecciones" id="Selecciones"></option>
									<option value="Selecciones" id="Selecciones">Selecciones Red:</option>
								</select>
			
								<label for="Selecciones">Selecciones un Punto:</label><br>
			
								<select name="Selecciones" id="Selecciones" class="select-size">
									<option value="Selecciones" id="Selecciones"></option>
									<option value="Selecciones" id="Selecciones">Selecciones un Punto:</option>
								</select>
			
								<div class="select-btn">
									<a href="#">BUSCAR</a>
								</div>
			
							</div>
			
							
			
							<div class="second-btn-div">
								<label for="Departamento">SecondButton:</label><br>
			
			
								<select name="Departamento" id="Departamento" class="select-size">
									<option value="Departamento" id="Departamento">testing<img src="<?php echo get_template_directory_uri(); ?>/assets/images/forma4copia3.png" ></option>
									
									<option value="Departamento" id="Departamento">Sucess</option>
									
									<option value="Departamento" id="Departamento">Working</option>
									
									<option value="Departamento" id="Departamento">Random</option>
								</select> <br>
			
								<label for="Ciudad">Fine:</label><br>
			
								<select name="Ciudad" id="Ciudad" class="select-size" class="select-size">
									<option value="Ciudad" id="Ciudad">Fine</option>
								</select>
			
								<label for="Selecciones Red">Need Work:</label><br>
			
								<select name="Selecciones" id="Selecciones" class="select-size">
									<option value="Selecciones" id="Selecciones">Selecciones Red:</option>
								</select>
			
								<label for="Selecciones">Socond One Last:</label><br>
			
								<select name="Selecciones" id="Selecciones" class="select-size">
									<option value="Selecciones" id="Selecciones">Selecciones un Punto:</option>
								</select>
			
								<div class="select-btn">
									<a href="#">BUSCAR</a>
								</div>
							</div>
					</div>

				</div>

			</div>

    	</div>

		<div class="Under-Article">

			<div class="Container">

				<div class="Sliders-Hub">

					<div class="slider-hub-area">

						<div class="owl-carousel owl-theme owl-carousel2">
						<?php
						$args_array = array(
							'posts_per_page' => -1,
							'post_type'      => 'sliders',
							'post_status'    => 'publish',
							'orderby'        => 'post_type',
								'order'          => 'DESC'
						);
						$get_sliders_posts = get_posts( $args_array );

						if ( $get_sliders_posts ) {
							foreach ( $get_sliders_posts as $post ) :
								setup_postdata( $post );
								?>
									
									<div class="item">
									<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
										<div class="SA-Slider">
											
											<img src="<?php echo $featured_img_url; ?>" alt="Image">
										</div>
										
									</div>								
							<?php
							endforeach; 
							wp_reset_postdata();
						}
						?>
								
							
							
		
						</div> 
		
					</div>
		
					<div class="SA-Text">
		
						<h2>Noticias</h2>
		
						<h3>INFORMACIÓN IMPORTANTE PARA</h3>
		
						<h3>PENSIONADOS ARL</h3><br>
		
						<pre>
De 3.194 personas que han sido notificadas para la
realización de una valoración médica para verificar
el estado de invalidez, 1.867 pensionados aún no
acuden a esta citación, lo que puede generar la
suspensión en el pago de su mesada pensional.
						</pre>
		
						<div class="SA-Text-btn">
							<a href="#">VER MÁS NOTICIAS</a>
						</div>
		
					</div>
		
					<div class="feature-posts-slider">

						<div class="FP-Top">
							<p>EVENTS</p>
						</div>

						<div class="FP-Bottom">

							<div class="owl-carousel owl-theme owl-carousel3">

								<div class="item">
		
									<div class="FP-Post1">
			
										<div class="fp-post">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rectangle5copy6.png" alt="First-post-image">
										</div>
			
										<div class="fp-text">
											<a href="#">Game Event</a>
											<p>12th Dec, 2022</p>
											<p>12:00PM - 12:00AM</p>
										</div>
			
									</div>
			
									<div class="FP-Post2">
			
										<div class="fp-post">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rectangle5copy6(1).png" alt="First-post-image">
										</div>
			
										<div class="fp-text">
											<a href="#">Game Event</a>
											<p>12th Dec, 2022</p>
											<p>12:00PM - 12:00AM</p>
										</div>
			
									</div>
			
									<div class="FP-Post3">
			
										<div class="fp-post">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rectangle5copy6(2).png" alt="First-post-image">
										</div>
			
										<div class="fp-text">
											<a href="#">Game Event</a>
											<p>12th Dec, 2022</p>
											<p>12:00PM - 12:00AM</p>
										</div>
			
									</div>
			
							</div>

							<div class="item">
		
								<div class="FP-Post1">
		
									<div class="fp-post">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rectangle5copy6.png" alt="First-post-image">
									</div>
		
									<div class="fp-text">
										<a href="#">Game Event</a>
										<p>12th Dec, 2022</p>
										<p>12:00PM - 12:00AM</p>
									</div>
		
								</div>
		
								<div class="FP-Post2">
		
									<div class="fp-post">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rectangle5copy6(1).png" alt="First-post-image">
									</div>
		
									<div class="fp-text">
										<a href="#">Game Event</a>
										<p>12th Dec, 2022</p>
										<p>12:00PM - 12:00AM</p>
									</div>
		
								</div>
		
								<div class="FP-Post3">
		
									<div class="fp-post">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rectangle5copy6(2).png" alt="First-post-image">
									</div>
		
									<div class="fp-text">
										<a href="#">Game Event</a>
										<p>12th Dec, 2022</p>
										<p>12:00PM - 12:00AM</p>
									</div>
		
								</div>
		
						</div>

						<div class="item">
		
							<div class="FP-Post1">

								<div class="fp-post">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rectangle5copy6.png" alt="First-post-image">
								</div>

								<div class="fp-text">
									<a href="#">Game Event</a>
									<p>12th Dec, 2022</p>
									<p>12:00PM - 12:00AM</p>
								</div>

							</div>

							<div class="FP-Post2">

								<div class="fp-post">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rectangle5copy6(1).png" alt="First-post-image">
								</div>

								<div class="fp-text">
									<a href="#">Game Event</a>
									<p>12th Dec, 2022</p>
									<p>12:00PM - 12:00AM</p>
								</div>

							</div>

							<div class="FP-Post3">

								<div class="fp-post">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rectangle5copy6(2).png" alt="First-post-image">
								</div>

								<div class="fp-text">
									<a href="#">Game Event</a>
									<p>12th Dec, 2022</p>
									<p>12:00PM - 12:00AM</p>
								</div>

							</div>

					</div>
		
							</div>

							<div class="FP-B-Events">
								<a href="#">More Events</a>
							</div>

						</div>
										
					</div>

				</div>

				<div class="img-btn-news">

					<div class="img-w-btn">

						<div class="btn1and2">

							<div class="img-w-btn1">
								<a href="#">FOROS</a>
							</div>
		
							<div class="img-w-btn2">
								<a href="#">BLOGS</a>
							</div>
							
						</div>
					
					</div>

					<div class="newsletter">

						<p>NewsLetter</p>

						<input type="text" placeholder="E-mail">

						<a href="#">ENVIAR</a>

					</div>

				</div>
			

				<div class="slider-iframe">

					<div class="slider-f-flex">

						<div class="slider-f">

							<div class="owl-carousel owl-theme owl-carousel4">
		
								<div class="item">
		
									<p> BANNER SLIDER </p>
		
								</div>
		
								<div class="item">
		
									<p> BANNER SLIDER </p>
		
								</div>
		
								<div class="item">
		
									<p> BANNER SLIDER </p>
		
								</div>
		
							</div>
							
						</div>
						
						<div class="img1and2-date">

							<div class="img-date1">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/image1.png" alt="logo-image">
							</div>
			
							<div class="img-date2">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/trasparencia.png" >
							</div>
	
						</div>

					</div>

					<div class="twitter-iframe">

						<div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/capa4.png" alt="Twitter-Iframe"></div>

						<div class="img-date-evento">
							<div class="top-evento">
								<p>Evento</p>
							</div>
		
							<div class="date-evento">
								<input type="date">
							</div>
						</div>
		
						<div class="M-img-date1"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/trasparencia.png" >

							<div class="M-img-date2">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/image1.png" alt="logo-image">
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