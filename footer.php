<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Intergalactic
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-logos">
		</div>
		<div class="site-info">
			<div class="esquerda">
			<a>Este projeto foi contemplado pelo Prêmio Funarte Caixa Carequinha de Estímulo ao Circo 2014 e pela 1ª Edição de Fomento ao Circo para a Cidade de São Paulo</a>
			</div>

			<div class="direita">
			<a href="<?php echo esc_url( __( 'http://br.wordpress.org/', 'intergalactic' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'intergalactic' ), 'WordPress' ); ?></a>
			<br />
			<?php printf( __( 'Theme: %1$s by %2$s', 'intergalactic' ), '<a href="https://wordpress.org/themes/intergalactic/" rel="designer">Intergalactic</a>', 'Automattic' ); ?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
