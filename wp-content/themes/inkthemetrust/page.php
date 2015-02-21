<?php get_header(); ?>		
				 
	<div id="content">
		<div <?php post_class("clearfix box"); ?>>
			
			<div id="pageHead">
				<h1><?php the_title(); ?></h1>


				<?php $page_description = get_post_meta($post->ID, "_ttrust_page_description_value", true); ?>

				<?php if ($page_description) : ?>
					<p><?php echo $page_description; ?></p>
				<?php endif; ?>	


<?php
if ( function_exists( 'sharing_display' ) ) {
    sharing_display( '', true );
}
 
if ( class_exists( 'Jetpack_Likes' ) ) {
    $custom_likes = new Jetpack_Likes;
    echo $custom_likes->post_likes( '' );
}
?>



			
			</div>
			
			<div class="inside">
			<?php while (have_posts()) : the_post(); ?>				    					
					<?php the_content(); ?>	





<?php
if ( function_exists( 'sharing_display' ) ) {
    sharing_display( '', true );
}
 
if ( class_exists( 'Jetpack_Likes' ) ) {
    $custom_likes = new Jetpack_Likes;
    echo $custom_likes->post_likes( '' );
}
?>




						
				<?php comments_template('', true); ?>			
			<?php endwhile; ?>
			</div>
		</div>							    	
	</div>		
	
<?php get_footer(); ?>