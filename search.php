<?php
get_header(); 

$post_types = ['page' => "Inhalte und Seiten", 'post' => "Blog"];

?>
<article id="copy" class="article">
	<div class="content">
	<h1>Suchergebnisse</h1>
<?php
$all_empty = true; // This will check if all post types are empty.

foreach($post_types as $type => $label){
    // Fetch search results for this post type
    $args = [
        'post_type' => $type,
        's' => get_search_query(),
		'posts_per_page' => -1
	];
    $query = new WP_Query($args);
    
    if($query->have_posts()):
        $all_empty = false;
        ?>
        <div class="post-type-container">
            <h2><?php echo ucfirst($label); ?></h2>
            <ul>
                <?php while($query->have_posts()): $query->the_post(); ?>
                    <li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
            </ul>
        </div>
        <?php
    endif;
    wp_reset_postdata(); // Reset the main query data.
}

if($all_empty): ?>
    <p>Zu Ihrer Suchanfrage konnten wir keine Treffer ermittlen.</p>
    <p>Bitte probieren Sie doch einen anderen Suchbegriff oder wechseln Sie zur <a href="<?php bloginfo("url");?>">Startseite</a>.</p>
    <p>Gerne k&ouml;nnen Sie <a href="#">uns auch kontaktieren</a>.</p>
<?php else: ?>
    <p>Sollten Ihnen diese Ergebnisse wider Erwarten nicht weiterhelfen, probieren Sie doch bitte einen anderen Suchbegriff oder wechseln Sie zur <a href="<?php bloginfo("url");?>">Startseite</a>.</p>
    <p>Gerne k&ouml;nnen Sie <a href="#">uns auch kontaktieren</a>.</p>
<?php endif; ?>
	</div>
</article>

<?php get_footer(); ?>
