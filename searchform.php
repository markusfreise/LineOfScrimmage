<form role="search" method="get" id="searchform" action="<?php echo home_url()?>">
	<input type="search" value="<?php esc_attr(apply_filters('the_search_query', get_search_query()))?>" name="s" id="s" placeholder="Deine Suche" /><button type="submit" class="button" value="Okay"><svg width="26" height="29" viewBox="0 0 26 29" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="11" cy="11" r="10" stroke="white" stroke-width="2"/><line x1="16.7809" y1="18.3753" x2="24.7809" y2="28.3753" stroke="white" stroke-width="2"/>
</svg><span>Suchen</span></button>

</form>