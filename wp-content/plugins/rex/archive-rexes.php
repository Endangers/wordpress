<?php get_header(); ?>
<section id="primary">
    <div id="content" role="main" style="width: 80%">
    <?php if ( have_posts() ) : ?>
        <div class="entry-content">
        <div id = "home-title">
        <div id = "kay-blurb"><h1><?php single_cat_title(''); ?></h1></div>
        <div id = "home-rec-button">
  <a class = "hpbutton"  href = "https://booklist.ics.uci.edu/">Home</a></div>
  </div></div>
        <!-- Start the Loop -->
        <?php while ( have_posts() ) : the_post(); 
                //$loop->the_post();

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
  <div class="book_listing group rex-arc">
      <img src="<?php echo $thumbnail; ?>" alt="<?php echo $title; ?>">
    <p class="book_title"><?php echo $title; ?></p>
    <p class="book_aut"><?php echo $author; ?></p>
    
    <p class="book_recommend">Recommended by 
    <a href="<?php echo $recommender_url; ?>"><?php the_author_meta( 'first_name', $author_id ); echo ' '; the_author_meta( 'last_name', $author_id ); ?></a></p>

    <blockquote class="book_paragraph"><?php echo $blurb; ?></blockquote>
    <p class = "hide-me">Description: <?php echo $description;?></p>
    <p class = "description"><a class = "gb_more" href="<?php echo $url; ?>" target="_blank">More Information...</a></p>
    <p class = "catergory_tags rex-terms">Categories: <?php the_terms( $post->ID, 'category_tags');?></p>
    <p class = "age_group_tags rex-terms">Audience: <?php the_terms( $post->ID, 'age_group_tags');?></p>
    
  </div>

  <?php endwhile; ?>
  <hr />
  <br><br>
<?php //}; ?>


        <!-- Display page navigation -->
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
</div>
<div class = "rex-sidebar"><?php get_sidebar();?></div>
<?php get_footer(); ?>