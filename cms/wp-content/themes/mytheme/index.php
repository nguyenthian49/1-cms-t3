<!DOCTYPE html>
<html>
<body>
<h2><?php echo "Welcome to Wordpress "; ?></h2>
<p>This is a paragraph.</p>
<p>This is another paragraph.</p>

</body>
</html>
<?php get_header(); 

 if ( have_posts() ) :
 get_template_part( 'content');
 else :
 get_template_part( 'content', 'none' );
 endif; 

 get_sidebar(); 

get_footer(); ?>