<?php
/**
 * Template Name: Recipes Page
 *
 * Selectable from a dropdown menu on the edit page screen.
 */


get_header(); ?>
<br><br>
<h1> Books We Read </h1>

<div id="primary" class="site-content">
	<div id="content" role="main">
		
	
		<?php
			$args = array(
				'posts_per_page'   => 100,
				'offset'           => 0,
				'category'         => '',
				'orderby'          => 'post_date',
				'order'            => 'DESC',
				'include'          => '',
				'exclude'          => '',
				'meta_key'         => '',
				'meta_value'       => '',
				'post_type'        => 'post',
				'post_mime_type'   => '',
				'post_parent'      => '',
				'post_status'      => 'publish',
				'suppress_filters' => true ); 
			
			
			$posts_array = get_posts($args);
			if ($posts) {
				foreach($posts_array as $post) {
			                
				$key_1_value = get_post_meta( get_the_ID(), 'post_title', true );
				$key_3_value = get_post_meta( get_the_ID(), 'book_author', true );
				//echo $key_4_value = get_post_meta( get_the_ID(), 'book_url', true );
				$key_5_value = get_post_meta( get_the_ID(), 'book_blurb', true );
				$key_6_value = get_post_meta( get_the_ID(), 'book_thumbnail', true);
				$key_7_value = get_post_meta( get_the_ID(), 'book_description', true);
				
 		?>
		
		<div id="book">
			<img src="<?php echo $key_6_value ?>" align="left">
			
			<?php
				if( ! empty( $key_1_value ) ) {
					//echo $key_1_value;
				} 
			?>
			<strong><?php echo $key_1_value ?></strong><br>
			
			<?php
				if( ! empty( $key_3_value ) ) {
					//echo $key_1_value;
				} 
			?>
			<b>By: </b><?php echo $key_3_value ?><br><br>
			
			<?php
				if( ! empty( $key_4_value ) ) {
					//echo $key_1_value;
				} 
			?>
			<a href="<?php echo get_post_meta( get_the_ID(), 'book_url', true );?>">Google Books URL</a><br><br>
			 
			<?php
				if( ! empty( $key_5_value ) ) {
					//echo $key_1_value;
				} 
			?>
			<b>Blurb: </b>"<?php echo $key_5_value ?>"<br><br>
			
			<?php $author_id=$post->post_author; ?>
			<b>Posted By:</b> <a href="<?php echo get_author_posts_url( $author_id); ?>"> <?php echo the_author_meta('user_firstname',$author_id);?> <?php echo the_author_meta('user_lastname',$author_id);?></a> <br/>
			
			
			<b>Categories: </b> <?php the_terms( $post->ID, 'category_tags' ,  ' ' );?><br>
			
			<b>Age Group: </b> <?php the_terms( $post->ID, 'age_group_tags' ,  ' ' );?><br>
			<?php
				if( ! empty( $key_7_value ) ) {
					//echo $key_1_value;
				} 
			?>
			<b>Description: </b> <?php echo $key_7_value ?><br><br>
			
			<br><br><br><br>
		</div>
        <?php 
				}
			}
			?>
		
		
		

</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>