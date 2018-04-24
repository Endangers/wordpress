<?php

// Retrieve the metadata associated with this book rec.
$post_meta = get_post_meta( get_the_id() );

// Sanitize all fields for output.
$blurb = esc_html( $post_meta['book_blurb'][0] );

// Create editor, using $blurb as default text content.
wp_editor( $blurb, 'book-blurb-text', array(
  'quicktags' => false,
  'media_buttons' => false,
  'tinymce' => false,
  )
);
?>