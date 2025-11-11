<?php
wp_head();
echo 'parent before loop, index.php';
if ( have_posts() ) :
	while ( have_posts() ) : the_post();
		the_title( '<h1>', '</h1>' );
		the_content();
	endwhile;
endif;
wp_footer();
?>
