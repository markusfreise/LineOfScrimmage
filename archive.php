<?php 

	get_header(); 
	
?>
	<article id="copy" class="products">
		<?php 
		$i = 0;
		while(have_posts()):
			if (have_posts()): 
				the_post();
				set_query_var("p",$post);
				set_query_var("i",$i++);
				echo get_template_part("parts/product");
			endif;
		endwhile; ?>
		</div>
	</article>
	
<?php get_footer(); ?>
