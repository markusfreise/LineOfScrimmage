</section> <!-- content -->
	</div>
	<?php if(get_field("note","options")):?>
	<div class="sticky">
		<p><?php the_field("note","options");?></p>
	</div>
	<?php endif;?>
	<footer class="<?php echo (get_field("note","options"))?"has-note":"";?>">
		<div id="contact">
			<div class="address ty">
				<p><img src="<?php echo get_template_directory_uri();?>/images/EAWENT-Logo.png" alt=""><p>
					<div>
						<p>EastWestFalian Entertainment<br>Rabenberg 13<br>22391 Hamburg</p>
						<p>T <a href="tel:+4940443771">+49 (0) 40 443 771</a><br><a href="mailto:info@eawent.de">info@eawent.de</a></p>
					</div>
			</div>
			<div class="form ty">
				<h2>Wir freuen uns auf Ihre Anfrage</h2>
				<?php 
					gravity_form( 1, false, false, false, '', true, 12 );
				?>
			</div>
		</div>
		<nav id="footer">
			<div class="wrap">
				<?php wp_nav_menu(array("theme_location"=>"footer")); ?>
			</div>
		</nav>
	</footer>
	</div>
	<div id="gap" class="hidemove gap"></div>
	<div id="gap-2x" class="hidemove gap2x"></div>
	<div id="m-vert" class="hidemove m-vert"></div>
	<div id="m-vert-slim" class="hidemove m-vert-slim"></div>
	<div id="width-margin" class="hidemove width-margin"></div>
	<div id="article-width" class="hidemove article-width"></div>
	<?php wp_footer(); ?>
	</body>

	</html>
