<?php
// Template Name: Produtos
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php include(TEMPLATEPATH . "/includes/introduction.php") ?>


		<?php
			$args = array (
				'post_type' => 'produtos',
				'order'   => 'ASC'
			);
			$the_query = new WP_Query ( $args );
		?>

		<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<section class="container produto_item animar-interno">
			<a href="<?php the_permalink(); ?>">
			<div class="grid-11">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/produtos/bikcraft-passeio-1.jpg" alt="Bikcraft Passeio">
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="grid-5 produto_icone"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/produtos/passeio.png" alt="Icone Passeio"></div>
			</a>
		</section>

		<?php endwhile; else: endif; ?>
		<?php wp_reset_query(); wp_reset_postdata(); ?>
		
		<section class="container produto_item">
			<div class="grid-11">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/produtos/bikcraft-esporte-1.jpg" alt="Bikcraft Esporte">
				<h2>Esporte</h2>
			</div>
			<div class="grid-5 produto_icone"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/produtos/esporte.png" alt="Icone Esporte"></div>
			<div class="grid-8"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/produtos/bikcraft-esporte-2.jpg" alt="Bikcraft Esporte"></div>
			<div class="grid-8 produto_info">
				<p>Mais rápida do que Forrest Gump, ninguém vai pegar você. A Bikcraft Esporte é uma bicicleta desenhada para a máxima performance. O seu desenpenho supera qualquer uma da categoria.</p>
				<ul>
					<li>Precisão</li>
					<li>Velocidade</li>
					<li>Design</li>
					<li>Versatilidade</li>
				</ul>
			</div>
		</section>

		<section class="container produto_item">
			<div class="grid-11">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/produtos/bikcraft-retro-1.jpg" alt="Bikcraft Retrô">
				<h2>Retrô</h2>
			</div>
			<div class="grid-5 produto_icone"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/produtos/retro.png" alt="Icone Retrô"></div>
			<div class="grid-8"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/produtos/bikcraft-retro-2.jpg" alt="Bikcraft Retrô"></div>
			<div class="grid-8 produto_info">
				<p>O passado volta para lembrarmos o que devemos fazer no futuro. A Bikcraft Retrô é uma bicicleta estiloza, feita para você que gosta do clássico, mas que não abre mão do conforto.</p>
				<ul>
					<li>Conforto</li>
					<li>Velocidade</li>
					<li>Design</li>
					<li>Versatilidade</li>
				</ul>
			</div>
		</section>

		<section class="orcamento">
			<div class="container">
				<h2 class="subtitulo">Orçamento</h2>
				<form action="enviar.php" method="post" name="form" class="formphp form grid-8">
					<label for="nome">Nome</label>
					<input id="nome" name="nome" type="text">
					<label for="email">E-mail</label>
					<input id="email" name="email" type="text">
					<label for="telefone">Telefone</label>
					<input id="telefone" name="telefone" type="text">

					<label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
					<input type="text" class="nao-aparece" name="leaveblank">
					<label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
					<input type="text" class="nao-aparece" name="dontchange" value="http://" >

					<label for="mensagem">Especificações</label>
					<textarea name="mensagem" id="mensagem"></textarea>

					<button id="enviar" name="enviar" type="submit" class="btn">Enviar</button>
				</form>
				<div class="orcamento_dados grid-8">
					<h3>Dados</h3>
					<span>+55 21 9999-9999</span>
					<span>orcamento@bikcraft.com</span>
					<h3>Monte a sua Bikcraft</h3>
					<p>Escolha as especificações:</p>
					<ul>
						<li>- Cores</li>
    				<li>- Estilo</li>
    				<li>- Medidas</li>
   					<li>- Acessórios</li>
    				<li>- E Outros</li>
					</ul>
				</div>
			</div>
		</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>