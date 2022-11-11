<?php get_header(); ?>
	<article id="copy"<?php post_class("article"); ?>>
		<?php 
		if ($post->post_content): 
			the_post();?>
				<div class="content">
					<?php the_content();?>
				</div>
			<?php
		else: ?>
		<div class="content txc">
			<h1>Seite ohne Inhalt …</h1>
		</div>
		<?php endif; ?>
	</article>
<?php get_footer(); ?>
