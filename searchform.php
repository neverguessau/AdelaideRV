<form class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" role="search">
	<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" class="search-field" placeholder="Search" autocomplete="off" autofocus required />
	<button class="searchform-btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
</form>


