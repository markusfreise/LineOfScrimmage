<?php

get_header();

echo get_template_part("formats/blog-header");

while (have_posts()) :
	the_post(); ?>
	<article id="blog" <?php post_class("wide"); ?>>
		<?php
		get_template_part("formats/single", get_post_format());
		?>
		<div class="clear"></div>
		<div id="skim" class="content">
			<div class="wrapThis">
				<div><?php
						$link = get_previous_post_link("%link", 'Vorheriger Beitrag');
						echo ($link) ? $link : '<span>Vorheriger Beitrag</span>';
						?>
				</div>
				<div>
					<a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Zur Übersicht</a>
				</div>
				<div><?php
						$link = get_next_post_link("%link", 'Nächster Beitrag');
						echo ($link) ? $link : '<span>Nächster Beitrag</span>';
						?>
				</div>
			</div>
		</div>
		<div id="discussion">
			<?php
			comments_template();
			?>
		</div>
	</article>
<?php endwhile; ?>

<?php get_footer(); ?>