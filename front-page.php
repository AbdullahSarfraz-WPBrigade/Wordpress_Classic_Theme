<?php
    get_header();

?>
<?php
function display_gray_topline() {

	$ayuda_text = get_option('Ayuda', '');
	$map_text = get_option('Mapa', '');
	$aaa_text = get_option('AAA_button','');
	$miercolo_text = get_option('miercolo_text', '');
	$proceso_text = get_option('Proceso_text', '');
	$iniciar_text = get_option('Iniciar_text', '');

	$inicio_text = get_theme_mod('inicio_text', '');
	$companyia_text = get_theme_mod('companyia_text', '');
	$ARL_text = get_theme_mod('ARL_text', '');
	$seguro_text = get_theme_mod('seguro_text', '');
	$Atencion_text = get_theme_mod('Atencion_text', '');

	$GARANTIZA_text = get_option('GARANTIZA_text', '');
	$EL_text = get_option('EL_text','');
	$BIENESTAR_text = get_option('BIENESTAR_text','');
	$DE_text = get_option('DE_text','');
	$EMPLEADOS_text = get_option('EMPLEADOS_text','');
	$CON_text = get_option('CON_text','');
	$POSITIVA_text = get_option('POSITIVA_text','');


	if(!empty($ayuda_text)) {

	?>

		<div class="gray-topline">

			<div class="gray-lineOne">

				<?php

					wp_nav_menu(array(
						'theme_location' => 'header-menu',
						'container' => 'ul',
						'menu_class' => '',
					));
				?>
				<ul>

					<a href="#" class="orangetext">
						<li><?php echo"$ayuda_text"; ?></li>
					</a>
					
					<a href="#">
						<li><?php echo"$map_text"; ?> </li>
					</a>
					
					<a href="#">
						<li><?php echo"$aaa_text"; ?> </li>
					</a>
					
					
				</ul>

			</div>
			

			<div class="gray-lineTwo">

				<a href="#"> <?php echo"$miercolo_text"; ?> </a>

			</div>

			<div class="gray-lineThree">

				<div class="pre-profile">

					<div>
					<?php
						$left_top_icon_var = get_template_directory_uri() . "/assets/images/icono.png";
						$left_top_icon_custom = get_theme_mod("left_Side_Icon"); 
						if(!empty($left_top_icon_custom)) {
							?>

							<img src="<?php echo get_theme_mod("left_Side_Icon") ?>"  />

							<?php
						} else {
							echo '<img src="' .esc_url($left_top_icon_var) . '" alt="Icono">';
						}
					?>
					<a href="#"><?php echo"$proceso_text"; ?></a>

					</div>
					
					<div class="Forma3">

						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/forma3copia2.png" alt="">

						<div class="Forma4">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/forma4.png" alt="">
						</div>

					</div>

				</div>

				<div class="pre-profile">

					<div>
						<a href="#"><?php echo"$iniciar_text"; ?></a>
						<?php
							$Right_top_icon_var = get_template_directory_uri() . "/assets/images/ellipse2copy.png";
							$Right_top_icon_custom = get_theme_mod("Right_Side_Icon"); 
							if(!empty($Right_top_icon_custom)) {
								?>

								<img src="<?php echo get_theme_mod("Right_Side_Icon") ?>"  />

								<?php
							} else {
								echo '<img src="' .esc_url($Right_top_icon_var) . '" alt="profile-pic">';
							}
						?>
						
					</div>

					<div class="Forma3">

						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/forma3copia2.png" alt="">

						<div class="Forma4">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/forma4.png" alt="">
						</div>

					</div>

				</div>    

			</div>

		</div>

		<div class="empty-space">
		
		</div>

		<div class="logo-top">

            <div class="Container">
    
                <div class="pick-top-logos">
    
				
                    <div class="postiva-logo">

			
						<?php
							// Getting logo settings as i sprintf top_ with all(Log_one,Log_two...) in setting_id
							//you may search (refrence No 1) in customizer.php
							$logo_one = get_theme_mod('top_Logo_one','');
							$logo_two = get_theme_mod('top_Logo_two','');
							$logo_three = get_theme_mod('top_Logo_three','');
						?>

						<?php
							
							
							if (empty($logo_one)) {
								// Display a default image if the setting is empty
								$default_logo_url = get_template_directory_uri() . '/assets/images/logopositiva.png';
								echo '<img src="' . esc_url($default_logo_url) . '" alt="Default Logo">';
							} else {
								// Display the user-configured image
								echo '<img src="' . esc_url($logo_one) . '" alt="Logo-Positivia">';
							}
						?>
						
                    </div>

                    <div class="burger-Icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feather_menu.png" onclick="ClickOnBurger()">
                    </div>

                    <div class="cross-burger" onclick="ClickOnBurger()">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape.png" >
                    </div>
        
                    <div class="Two-logos">
        
					<div class="Minh-logo">

					<?php

						if(empty($logo_two)) {
							$default_logo_url_two = get_template_directory_uri() . '/assets/images/minhacienda.png';
							echo '<img src="' . esc_url($default_logo_url_two) . '" alt="Minhacienda">';
						} else {

							echo '<img src="' . esc_url($logo_two) . '" alt="Minhacienda"';
						}
					?>

					</div>
						
						
					<div class="bar-logo">
						<?php
								if(empty($logo_three)) {

									$default_logo_url_three = get_template_directory_uri() . '/assets/images/logo-bar-r2.png';
									echo '<img src="' . esc_url($default_logo_url_three) . '" alt="vectorial-1"';
								} else {
									echo '<img src="' . esc_url($logo_three) . '" alt="vectorial-1"';
								}
							?>
					</div>	
						
                        
        
                    </div>
    
                </div>    
    
            </div>
    
        </div>

		<div class="Top-Menu" id="Top-Menu">
    
            <div class="Container">
    
                <nav>
                    <div class="flex-links">

                        <div class="mobile-t-logos">
    
                                <div class="Two-logos-mobile">
            
                                    <div class="Minh-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/minhacienda.png" alt="Minhacienda"></div>
                                    <div class="bar-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-bar-r2.png" alt="vectorial-1"></div>
                                               
                                </div>
 
                        </div>
    
                        <div class="Top-links">

                            <div class="Left-border"><a href="#"><?php echo"$inicio_text"; ?></a></div>


                            <div class="FirstDiv-DD-Mobile">

                                <div class="mobile-nav-click">

                                    <div class="Left-border LA-Company" ><a href=""><?php echo"$companyia_text"; ?></a>
                                
                                        <div class="drop-down">
                        
                                            <div class="DD-Content">
                            
                                                <div class="DD-One">
                                                    <p><a href="#">Quienes Somos</a></p>
                                                    <hr>
                                                    <p><a href="#">Misión y Visión</a></p>
                                                    <hr>
                                                    <p><a href="#">Objetivos y Funciones</a></p>
                                                    <hr>
                                                    <p><a href="#">Organigrama</a>
                                                    <hr>
                                                    <p><a href="#">Propuesta de Valor</a></p>
                                                    <hr>
                                                    <p><a href="#">Valores</a></p>
                                                </div>
                            
                                                <div class="DD-Two">
                                                    <p><a href="#">Fortalezas</a></p>
                                                    <hr>
                                                    <p><a href="#">Nuestra Marca</a></p>
                                                    <hr>
                                                    <p><a href="#">Directorio de Entidades y Agremiaciones</a></p>
                                                    <hr>
                                                    <p><a href="#">Certificaciones de Calidad</a>
                                                    <hr>
                                                    <p><a href="#">Directorio de funcionarios</a></p>
                                                    <hr>
                                                </div>
                            
                                            </div>
                                        </div>  
    
                                    </div>
    
                                    <div class="path1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/path.png" alt="Clickable-Button" onclick="RotationOnClick (this)">
                                    </div>
                                </div>

                                <div class="Mobile-DD-One">
                                    <p><a href="#">Quienes</a></p>
                                    <hr>
                                    <p><a href="#">Misión</a></p>
                                    <hr>
                                    <p><a href="#">Objetivos</a></p>
                                    <hr>
                                    <p><a href="#">Organigrama</a>
                                    <hr>
                                    <p><a href="#">Propuesta</a></p>
                                    <hr>
                                    <p><a href="#">Valores</a></p>
                                </div>

                            </div>


                            <div class="SecondDiv-DD-Mobile">

                                <div class="mobile-nav-click">

                                    <div class="Left-border"><a href="#"><?php echo"$ARL_text"; ?></a></div>
    
                                    <div class="path2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/path.png" alt="Clickable-Button" onclick="RotationOnClickOne(this)">
                                    </div>
                                    
                                </div>

                                <div class="Mobile-DD-two">
                                    <p><a href="#">Quienes</a></p>
                                    <hr>
                                    <p><a href="#">Misión</a></p>
                                    <hr>
                                    <p><a href="#">Objetivos</a></p>
                                    <hr>
                                    <p><a href="#">Organigrama</a>
                                    <hr>
                                    <p><a href="#">Propuesta</a></p>
                                    <hr>
                                    <p><a href="#">Valores</a></p>
                                </div>

                            </div>

                            <div class="ThirdDiv-DD-Mobile">

                                <div class="mobile-nav-click">

                                    <div class="Left-border"><a href="#"><?php echo"$seguro_text"; ?></a></div>
    
                                    <div class="path3">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/path.png" alt="Clickable-Button" onclick="RotationOnClickTwo(this)">
                                    </div>
                                    
                                </div>

                                <div class="Mobile-DD-three">
                                    <p><a href="#">Quienes</a></p>
                                    <hr>
                                    <p><a href="#">Misión</a></p>
                                    <hr>
                                    <p><a href="#">Objetivos</a></p>
                                    <hr>
                                    <p><a href="#">Organigrama</a>
                                    <hr>
                                    <p><a href="#">Propuesta</a></p>
                                    <hr>
                                    <p><a href="#">Valores</a></p>
                                </div>

                            </div>                            

                            
                            <div class="FourthDiv-DD-Mobile">

                                <div class="mobile-nav-click">

                                    <div class="Left-border"><a href="#"><?php echo"$Atencion_text"; ?></a></div>
    
                                    <div class="path4">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/path.png" alt="Clickable-Button" onclick="RotationOnClickThree(this)">
                                    </div>
                                    
                                </div>

                                <div class="Mobile-DD-four">
                                    <p><a href="#">Quienes</a></p>
                                    <hr>
                                    <p><a href="#">Misión</a></p>
                                    <hr>
                                    <p><a href="#">Objetivos</a></p>
                                    <hr>
                                    <p><a href="#">Organigrama</a>
                                    <hr>
                                    <p><a href="#">Propuesta</a></p>
                                    <hr>
                                    <p><a href="#">Valores</a></p>
                                </div>

                            </div>

                            
          
            
                        </div>
            
                        <div class="search-btn">
            
                            <div class="btn-pad search-put"><input type="text" placeholder="Búsqueda"></div>
        
                            <div class="btn-pad"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/iconosearch.png" alt="Icono-Search"></div>
            
                        </div>

                    </div>

                    
                </nav>
                
            </div>
        </div>

		<div class="Main-hero">

			<div class="owl-carousel owl-theme owl-carousel1">

				<div class="item">

				<div class="Hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle4copia4.png');">

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

					<div class="Hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle4copia4.png')">

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

					<div class="Hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle4copia4.png')">

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

					<div class="Hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle4copia4.png')">

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
}


?>

<?php
    get_sidebar();
    get_footer();

?>    