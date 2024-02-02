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

	$slider_textarea = get_option('slider_textarea');

	$ServicesNumber = get_option('services_number', 1);

	$ServicesNumberOne = get_option('service_b_number', 1);
?>
		<div class="Main-hero">

			<div class="owl-carousel owl-theme owl-carousel1">

				<?php for ($i = 1; $i <= $storedNumber; $i++) { ?>

				<div class="item">
					
					
					
				<div class="Hero" style="background-image: url('<?php echo (get_option('upload_secondary_image' . $i)) ? esc_url(get_option('upload_secondary_image' . $i)) : get_template_directory_uri() . '/assets/images/rectangle4copia4.png'; ?> ">

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
											<img src="<?php echo (get_option('upload_first_icon' . $iy)) ? esc_url(get_option('upload_first_icon' . $iy)) : get_template_directory_uri() . '/assets/images/frame.png'; ?> ">
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
			
								<form id="myForm2" action="<?php echo esc_attr( admin_url('admin-post.php') ); ?>" method="POST">
								
								<input type="hidden" name="action" value="<?php echo esc_attr( 'save_my_custom_form2' ); ?>" />

									<label for="Departamento">Departamento:</label><br>
				
				
									<select name="Departamento" id="Departamento" class="select-size">
										<option value="Departamento" ><img src="<?php echo get_template_directory_uri(); ?>/assets/images/forma4copia3.png" ></option>
										
										<option value="Departamento" >Departamento</option>
										
										<option value="2nd_Departamento" >Departamento</option>
										
										<option value="3rd_Departamento" >Departamento</option>
									</select> <br>
				
									<label for="Ciudad">Ciudad:</label><br>
				
									<select name="Ciudad" id="Ciudad" class="select-size">
										<option value="1st_Ciudad" >1st_Ciudad</option>
										<option value="Ciudad" >Ciudad</option>
									</select>
				
									<label for="SeleccionesRed">Selecciones Red:</label><br>
				
									<select name="SeleccionesRed" id="SeleccionesRed" class="select-size">
										<option value="Selecciones" >Selecciones</option>
										<option value="Selecciones Red:" >Selecciones Red:</option>
									</select>
				
									<label for="Selecciones">Selecciones un Punto:</label><br>
				
									<select name="Selecciones" id="Selecciones" class="select-size">
										<option value="Selecciones" >Selecciones</option>
										<option value="Selecciones un Punto:" >Selecciones un Punto:</option>
									</select>
				
									<div class="select-btn">
										<button type="submit">BUSCAR</button>
									</div>
								</form>
							</div>
			
							<?php

							?>
			
							<div class="second-btn-div">
								<form id="myForm3" action="<?php echo esc_attr( admin_url('admin-post.php') ); ?>" method="POST">
									<input type="hidden" name="action" value="<?php echo esc_attr('save_my_custom_form3'); ?>"/>
									
									<label for="Departamento">SecondButton:</label><br>
				
				
									<select name="Departamento" id="Departamento" class="select-size">
										<option value="testing" >testing<img src="<?php echo get_template_directory_uri(); ?>/assets/images/forma4copia3.png" ></option>
										
										<option value="Sucess" >Sucess</option>
										
										<option value="Working" >Working</option>
										
										<option value="Random" >Random</option>
									</select> <br>
				
									<label for="Ciudad">Fine:</label><br>
				
									<select name="Ciudad" id="Ciudad" class="select-size" >
										<option value="Fine" >Fine</option>
									</select>
				
									<label for="SeleccionesRed">Need Work:</label><br>
				
									<select name="SeleccionesRed" id="SeleccionesRed" class="select-size">
										<option value="Selecciones Red:" >Selecciones Red:</option>
									</select>
				
									<label for="Selecciones">Socond One Last:</label><br>
				
									<select name="Selecciones" id="Selecciones" class="select-size">
										<option value="Selecciones un Punto:" >Selecciones un Punto:</option>
									</select>
				
									<div class="select-btn">
										<button type="submit">BUSCAR</button>
									</div>
								</form>	
							</div>
					</div>

				</div>

			</div>

    	</div>

		<div class="Under-Article">

			<div class="Container">
				<?php  ?>

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
						$get_sliders_posts = new WP_Query( $args_array );

						if ( $get_sliders_posts ) {
							foreach ( $get_sliders_posts as $post ) :
								setup_postdata( $post );
								?>
									
									<div class="item">
									<?php $featured_img_url = get_the_post_thumbnail_url(); ?>
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

					<form id="newsletter-form" method="POST" action="<?php echo esc_attr(admin_url('admin-post.php')); ?>">
						<input type="hidden" name="action" value="newsletter_form">

						<div class="newsletter">
							<p>NewsLetter</p>
							<input type="email" name="email" placeholder="E-mail" required>
							<button type="submit">ENVIAR</button>
						</div>
					</form>
	
				</div>
			

				<div class="slider-iframe">

					<div class="slider-f-flex">

						<div class="slider-f">

							<div class="owl-carousel owl-theme owl-carousel4">
		
								<div class="item">
		
									<p><?php echo"$slider_textarea"; ?> </p>
		
								</div>
		
								<div class="item">
		
									<p> BANNER SLIDER </p>
		
								</div>
		
								<div class="item">
		
									<p> <?php echo"$slider_textarea"; ?> </p>
		
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

						<div><blockquote class="twitter-tweet"> <a href="https://twitter.com/username/status/807811447862468608"></a> </blockquote></div>

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

		<div class="contact-foot">

			<div class="Container">

				<div class="contact-details">

					<div class="contact-icons">

						<div class="contact-side-logo">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/vectorial-bottom.png" alt="Bottom-Side-logo">
						</div>

						<div class="contact-main-icons">

							<div class="top-contact-icons">

								<?php for ($i = 1; $i <= $ServicesNumber; $i++) { ?>
									<div class="top-icon1">
										<img src="<?php echo (get_option('services_icons' . $i)) ? esc_url(get_option('services_icons' . $i)) : get_template_directory_uri() . '/assets/images/objetointeligentevectorial-2.png'; ?>" >
										<p><?php echo (get_option('top_p_s_text' . $i)) ? esc_attr(get_option('top_p_s_text' . $i)) :  "CONTRATACIÓN" ?> </p>
										<h3><?php echo (get_option('botton_h_s_text' . $i)) ? esc_attr(get_option('botton_h_s_text' . $i)) : "CONTÁCTO" ?></h3>
									</div>
								<?php
								}
								?>	

							</div>

							<div class="bottom-contact-icons">


								<?php for ($i = 1; $i <= $ServicesNumberOne; $i++) { ?>
									<div class="bottom-icon1">
										<img src="<?php echo (get_option('service_bottom_icon' . $i)) ? esc_url(get_option('service_bottom_icon' . $i)) : get_template_directory_uri() . '/assets/images/objetointeligentevectorial-2.png'; ?>" >
										<p><?php echo (get_option('bottom_f_p_text' . $i)) ? esc_attr(get_option('bottom_f_p_text' . $i)) :  "CONTRATACIÓN" ?> </p>
										<h3><?php echo (get_option('bottom_f_h_text' . $i)) ? esc_attr(get_option('bottom_f_h_text' . $i)) : "CONTÁCTO" ?></h3>
									</div>
								
								<?php
								}
								?>	

							</div>

						</div>

					</div>

					<div class="contact-links">

						<div class="call-number">

							<div class="call-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/call.png" alt="Call-Icon">
							</div>

							<div class="numbers-action">

								<p><?php echo do_shortcode('[wpb-text text="Líneas de atención"]'); ?></p>
								<p><?php echo do_shortcode('[wpb-text text="Comunicate a nivel nacional"]'); ?></p>
								<a href="tel:+1-8000-111-170"><?php echo do_shortcode('[wpb-phone tel="01-20000-111-170"]'); ?></a>
								<p><?php echo do_shortcode('[wpb-text text="En Bogotá"]'); ?></p>
								<a href="tel:330-7000"><?php echo do_shortcode('[wpb-phone tel="330-7000"]'); ?></a>
							</div>

						</div>

						<div class="location-address">

							<div class="location-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/frame13.png" alt="Location-Icon">
							</div>

							<div class="address-site">
								<h3><?php echo do_shortcode('[wpb-text text="Puntos de Atención"]'); ?></h3>
								<p><?php echo do_shortcode('[wpb-text text="Ubica el punto de atención más cercano"]'); ?></p>
							</div>

						</div>

						<div class="group-text">

							<div class="group-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/frame-2.png" alt="Group-Icon">
							</div>

							<div class="group-name">
								<h3><?php echo do_shortcode('[wpb-text text="Directorio de Funcionarios"]'); ?></h3>
							</div>

						</div>

						<div class="one-man-info">

							<div class="one-man-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/frame-3.png" alt="PostMan-Icon">
							</div>

							<div class="one-man-text">

								<h3><?php echo do_shortcode('[wpb-text text="Línea Ética"]'); ?></h3>
								<span><?php echo do_shortcode('[wpb-text text="Presenta aquí tu caso"]'); ?></span>
								<span><?php echo do_shortcode('[wpb-text text="de fraude o corrupción"]'); ?></span><br>
								<a href="tel:+1-8000-112-870"><?php echo do_shortcode('[wpb-phone tel="01-8000-112-875"]'); ?></a>
								<h4><?php echo do_shortcode('[wpb-text text="Correo electronico"]'); ?></h4><br><br>

								<div class="first-mail-id">
									<div class="first-mail-icon">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail.png" alt="Mail-Icon">
									</div>
									<div class="first-mail-link">
										<a href="mailto:servicioalcliente@positiva.gov.co"><?php echo do_shortcode('[wpb-text text="servicioalcliente@positiva.gov.co"]'); ?></a>
									</div>
								</div>

								<div class="second-mail-id">
									<div class="second-mail-icon">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail.png" alt="Mail-Icon">
									</div>
									<div class="second-mail-link">
										<a href="mailto:notijicacionesjudiciales@popositiva.gov.co"><?php echo do_shortcode('[wpb-text text="notijicacionesjudiciales@popositiva.gov.co"]'); ?></a>
									</div>
								</div>

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