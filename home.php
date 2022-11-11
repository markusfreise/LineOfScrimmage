<?php

get_header();


?>
<article id="blog">
	<div class="content">
		<?php echo get_template_part("formats/blog-header"); ?>
		<a name="copytop" id="copytop" class="clear"></a>
		<?php
		if (have_posts()) :
			while (have_posts()) :
				the_post();
				get_template_part("formats/single", get_post_format());
			endwhile;
		endif; ?>
	</div>
</article>

<?php get_footer(); ?>