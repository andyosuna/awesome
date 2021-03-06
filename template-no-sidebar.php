<?php 
/*
	Template Name: No Sidebar Widgets!
*/
?>
<?php get_header(); ?>
    
    <div id="content">    	

<?php
//SAFETY NET: make xure the function for breadcrumbs exists
//ALWAYS do this around plugins or custom function calls
if(function_exists('dimox_breadcrumbs')):
    dimox_breadcrumbs();
endif;
?>

	<?php 
	//THE LOOP.
	if( have_posts() ): 
		while( have_posts() ):
		the_post(); ?>
	
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>
            <h2 class="entry-title"> 
				<a href="<?php the_permalink(); ?>"> 
				<?php the_title(); ?> 
				</a>
			</h2>            
            
            <div class="entry-content">
                <?php 
				//if viewing a singular post or page, show the full content, otherwise, show just the excerpt (short version of content)
				if( is_single() || is_page() ):				
					the_content();
				else:
					the_excerpt();
				endif; ?>
            </div>
       
        
		<?php
		//show the comment list and form (only appears on singular views)
		 comments_template();  
		?>
		 </article><!-- end post -->
      <?php 
	  endwhile;
	  else: ?>
	  <h2>Sorry, no posts found</h2>
	  <?php endif; //END OF LOOP. ?>
	          
        
    </div><!-- end content -->
   
<?php get_footer(); ?>  