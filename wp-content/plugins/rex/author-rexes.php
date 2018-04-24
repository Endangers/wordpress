<?php get_header(); ?>
<link href="css/rexcss.css" rel="stylesheet">
<section id="primary">
    <div id="content" role="main" style="width: 80%">
		<h2 style = " font-size: 34px; line-height: 1.5; margin: 24px 0px;">Recommendations By: 
		<?php the_author_meta('user_firstname'); ?> <?php the_author_meta('user_lastname'); ?> </h2>
		<?php echo get_avatar( get_the_author_meta( 'ID' ) , 32 ); ?>
        <b>Email:</b> <a href="mailto:<?php the_author_meta('user_email');?>"><?php the_author_meta('user_email');?></a>
	<!-- <div id = "home-rec-button">
  <a class = "hpbutton"  href = "https://booklist.ics.uci.edu">Home</a></div> -->
  </div>		
	    <?php if ( have_posts() ) : ?>
	    
            <!-- Start the Loop -->
            <?php while ( have_posts() ) : the_post(); ?>
                
    <hr/>
    <div class="book_listing group rex-arc">
        <a href="<?php the_permalink(); ?>"></a>
        <img src="<?php echo esc_html( get_post_meta( get_the_ID(), 'book_thumbnail', true ) ); ?>">    
        <p class="book_title"><?php echo esc_html( get_post_meta( get_the_ID(), 'book_title', true ) ); ?></p>
        <p class="book_aut"><?php echo esc_html( get_post_meta( get_the_ID(), 'book_author', true ) ); ?></p>
        
<p class="book_recommend">Recommended By: <br>
    <a href="<?php echo $recommender_url; ?>"><?php the_author_meta( 'first_name', $author_id ); echo ' '; the_author_meta( 'last_name', $author_id ); ?></a>: <!--<p class="book_paragraph">--><?php echo esc_html( get_post_meta( get_the_ID(), 'book_blurb', true ) ); ?></p>

        <p class = "hide-me">Description: <?php echo esc_html( get_post_meta( get_the_ID(), 'book_description', true ) );?></p>
        <p class = "description"><a class = "gb_more" href="<?php echo esc_html( get_post_meta( get_the_ID(), 'book_url', true ) ) ; ?>" target="_blank">Google</a></p>
        <p class = "catergory_tags rex-terms">Categories: <?php the_terms( $post->ID, 'category_tags');?></p>
        <p class = "age_group_tags rex-terms">Audience: <?php the_terms( $post->ID, 'age_group_tags');?></p>
        
    </div>
            <?php endwhile; ?>
            <hr />
            <!-- Display page navigation -->
	 
	        </table>
	        <?php global $wp_query;
	        if ( isset( $wp_query->max_num_pages ) && $wp_query->max_num_pages > 1 ) { ?>
	            <nav id="<?php echo $nav_id; ?>">
	                <div class="nav-previous"><?php next_posts_link( '<span class="meta-nav">&larr;</span> Older reviews'); ?></div>
	                <div class="nav-next"><?php previous_posts_link( 'Newer reviews <span class= "meta-nav">&rarr;</span>' ); ?></div>
	            </nav>
	        <?php };
	    endif; ?>
    </div>
</section>
<br /><br />
</div>
</div>
</div>
<div class = "rex-sidebar"><?php get_sidebar();?></div>
<?php get_footer(); ?>