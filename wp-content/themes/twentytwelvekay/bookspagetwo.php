<?php
/**
 * Template Name: Books2
 */

/* Edited by Bookworms


//This line of code, if needed, can be placed back
<div id = "home-rec-button">
  <a id="logout-btn" class = "hpbutton"  href = "<?php echo wp_logout_url( get_permalink() ); ?>">Logout</a></div>
//End of line of code

*/

get_header(); ?>

<link href="css/rexcss.css" rel="stylesheet">
<div class="entry-content">
  
  <div id = "home-title">
  <div id = "kay-blurb"><h1>Welcome to Booklist</h1>
  <h3 style = "font-family: District-Light, Helvetica;">The Informatics Department draws information and inspiration from many sources. The faculty of the Informatics Department find these books particularly influential.</h3> </div>
  <div id = "home-rec-button">
  <a id="logout-btn" class = "hpbutton"  href = "<?php echo wp_logout_url( get_permalink() ); ?>">Logout</a></div>
  </div>
  
  <?php
    
	if (!is_user_logged_in ()) {
      echo '<script>document.getElementById("logout-btn").style.display = "none";</script>';
    }
	

    $loop = new WP_Query( array( 'post_type' => 'rex' ) );
    	
		while ( $loop->have_posts() ) : $loop->the_post();

		  $title = esc_html( get_post_meta( get_the_ID(), 'book_title', true ) );
		  $author = esc_html( get_post_meta( get_the_ID(), 'book_author', true ) );
		  $url = esc_html( get_post_meta( get_the_ID(), 'book_url', true ) );
		  $description = esc_html( get_post_meta( get_the_ID(), 'book_description', true ) );
		  $thumbnail = esc_html( get_post_meta( get_the_ID(), 'book_thumbnail', true ) );
		  $blurb = esc_html( get_post_meta( get_the_ID(), 'book_blurb', true ) );
		  $author_id = $post->post_author;
		  $recommender_url = get_author_posts_url( $author_id );
		  
		  $amazon_link = esc_html ( get_post_meta ( get_the_ID(), 'book_amazon', true ) );
		  $information = esc_html ( get_post_meta ( get_the_ID(), 'book_info', true ) );
		  
  ?>

  
  <hr />
  <div class="book_listing group">
      <img src="<?php echo $thumbnail; ?>" alt="<?php echo $title; ?>">
    <p class="book_title" style = "font-size: 24px;"><?php echo $title; ?></p>
    <p class="book_aut"><?php echo $author; ?></p>
	<p class="book_info"><?php echo $information; ?></p>
	
	
	<p class="book_amazon"> <a class = "gb_more" href="<?php echo $amazon_link; ?>" target="_blank">Amazon&nbsp</a>
	
	<a class = "gb_more" href="<?php echo $url; ?>" target="_blank">Google</a>
	</p>
    
	
    <p class="book_recommend">Recommended By: <br>
	<a href="<?php echo $recommender_url; ?>"><?php the_author_meta( 'first_name', $author_id ); echo ' '; the_author_meta( 'last_name', $author_id ); ?> </a> </p>
	
	<p class="book_paragraph"> <?php echo $blurb; ?>  </p>
	
    
    <p class = "hide-me">Description: <?php echo $description;?></p>

    <p class = "catergory_tags rex-terms">Categories: <?php the_terms( $post->ID, 'category_tags');?></p>
    <p class = "age_group_tags rex-terms">Audience: <?php the_terms( $post->ID, 'age_group_tags');?></p>
 
  </div>

  <?php endwhile; ?>
  <hr />

</div>
</div>
</div>
<div class = "rex-sidebar">
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>

