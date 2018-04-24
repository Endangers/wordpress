<?php
 /*Template Name: New Template
 */
 
get_header(); ?>
<div id="primary">
    <div id="content" role="main" style="padding:10px">
    <!-- Display review title and author -->
      <?php
      $title = esc_html( get_post_meta( get_the_ID(), 'book_title', true ) );
      $author = esc_html( get_post_meta( get_the_ID(), 'book_author', true ) );
      $url = esc_html( get_post_meta( get_the_ID(), 'book_url', true ) );
      $description = esc_html( get_post_meta( get_the_ID(), 'book_description', true ) );
      $thumbnail = esc_html( get_post_meta( get_the_ID(), 'book_thumbnail', true ) );
      $blurb = wpautop( get_post_meta( get_the_ID(), 'book_blurb', true ) );
      $author_id = $post->post_author;
      $recommender_url = get_author_posts_url( $author_id );
      ?>

    	<hr />
  <div class="book_listing group">
      <img src="<?php echo $thumbnail; ?>" alt="<?php echo $title; ?>" class="alignnone size-full wp-image-619">
    <p class="book_title" style="font-family: District-Medium, Helvetica; font-weight: normal; font-style: normal; font-size: 20px;"><?php echo $title; ?></p>
    <p class="book_aut"><?php echo $author; ?></p>
    <p class="book_recommend">Recommended by <a href="<?php echo $recommender_url; ?>"><?php the_author_meta( 'first_name', $author_id ); echo ' '; the_author_meta( 'last_name', $author_id ); ?></a></p>
	<p class="book_paragraph" style="font-family: District-BoldItalic, Helvetica; font-weight: normal; font-style: normal;"><?php echo $blurb; ?></p>
    <p class = "description"><strong>Description:</strong> <?php echo $description;?> </p>
	<a class = "gb_more" href="<?php echo $url; ?>" target="_blank">More...</a>
    <p class = "catergory_tags"><strong>Tags:</strong> <?php the_terms( $post->ID, 'category_tags');?></p>
    <p class = "age_group_tags"><strong>Level:</strong> <?php the_terms( $post->ID, 'age_group_tags');?></p>
  </div>
	<hr />

</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>