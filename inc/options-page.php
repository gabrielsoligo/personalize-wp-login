<!--*
    *	Pagina de configuração do plugin
    *	Author: Gabriel Soligo
    *	Version: 0.1
-->

<div class="wrap">

	<div id="icon-options-general" class="icon32"></div>
	<h1><?php esc_attr_e( 'Personalize wp-login - Configurações', 'WpAdminStyle' ); ?></h1><br>
	
	<div class="jumbotron">
		<div class="container-fluid">
			<h1>Seja bem-vindo!</h1><br><br>
			<p>
				<?php $current_user = wp_get_current_user(); ?>
    			<span>Olá, <strong><?php echo $current_user->user_firstname; ?></strong> o que você achou desse plugin? Caso ele tenha te ajudado, você pode ajudar os criadores dele a manterem atualizações constantes. </span>
			</p>
			<p>
			<a href="#" target="_blank" class="btn btn-primary btn-lg"  role="button">Avaliar plugin</a>
			<a href="http://gabrielsoligo.com" target="_blank" class="btn btn-success btn-lg">Doar para o autor</a>
			</p>
		</div>
	</div>

	<div id="poststuff">

		<div id="post-body" class="metabox-holder columns-2">
			
			
			<!-- main content -->
			<div id="post-body-content">

				<div class="meta-box-sortables ui-sortable">

							<div class="table-responsive">
								<div class="panel panel-primary">
									<!-- Default panel contents -->
									<div class="panel-heading">Configurações gerais</div>
									<div class="panel-body">
										<p>Aqui você pode editar sua página de login e outras configurações.</p>
									</div>
									<form method="POST" action="" name="form">
										<table class="table table-bordered"> 
											<colgroup> 
												<col class="col-xs-2"> 
													<col class="col-xs-10"> 
												</colgroup> 
												<thead class=""> 
													<tr> 
														<th>Opções de Design</th> 
														<th>Background</th> 
													</tr> 
												</thead> 
												<tbody> 
													<tr> 
														<th scope="row"> 
															<p>Background Color</p> 
														</th> 
														<td><input type="text" value="#bada55" class="my-color-field" data-default-color="#effeff" /></td> 
													</tr> 
													<tr> 
														<th scope="row"> 
															<p>Background Image</p> 
														</th> 
														<td>Input image</td> 
													</tr> 
													<tr> 
														<th scope="row"> 
															<p>Background Position</p> 
														</th> 
														<td>Drop Down</td> 
													</tr> 
													<tr> 
														<th scope="row"> 
															<p>Background Repeat</p> 
														</th> 
														<td>Drop down</td> 
													</tr> 
													<tr> 
														<th scope="row"> 
															<p>Background Size</p>
														</th> 
														<td>Drop</td> 
													</tr> 
												</tbody>

												<thead> 
													<tr> 
														<th>Opções de Design</th> 
														<th>Logo</th> 
													</tr> 
												</thead> 
												<tbody> 
													<tr> 
														<th scope="row"> 
															<p>Esconder logo do WP</p> 
														</th> 
														<td>Checkbox</td> 
													</tr> 
													<tr> 
														<th scope="row"> 
															<p>Imagem</p> 
														</th> 
														<td>Input image</td> 
													</tr> 
													<tr> 
														<th scope="row"> 
															<p>Largura da imagem</p> 
														</th> 
														<td>input</td> 
													</tr> 
													<tr> 
														<th scope="row"> 
															<p>Altura da imagem</p> 
														</th> 
														<td>input</td> 
													</tr> 
												</tbody> 
										</table>
										
										<input type="submit" class="btn btn-primary btn-lg"  role="button" value="<?php esc_attr_e( 'Salvar' ); ?>" />

									</form>
								</div>
							</div>
							<br class="clear" />

				</div>
				<!-- .meta-box-sortables .ui-sortable -->

			</div>
			<!-- post-body-content -->

			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">

				<div class="meta-box-sortables">

					<div class="panel panel-primary">
						<!-- Default panel contents -->
						<div class="panel-heading">Opções</div>
						<div class="panel-body">
							
							<input type="submit" class="btn btn-primary btn-lg"  role="button" value="<?php esc_attr_e( 'Salvar' ); ?>" />

						</div>
					</div>

				</div>
				<!-- .meta-box-sortables -->

			</div>
			<!-- #postbox-container-1 .postbox-container -->

		</div>
		<!-- #post-body .metabox-holder .columns-2 -->
		
		<br class="clear">
	</div>
	<!-- #poststuff -->

</div> <!-- .wrap -->