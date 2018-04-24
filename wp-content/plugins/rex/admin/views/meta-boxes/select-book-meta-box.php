<?php

// Retrieve the metadata associated with this book rec.
$post_meta    = get_post_meta( get_the_id() );

// Sanitize all fields for output.
$title        = esc_attr( $post_meta['book_title'][0] );
$isbn         = esc_attr( $post_meta['book_isbn'][0] );
$author       = esc_attr( $post_meta['book_author'][0] );
$description  = sanitize_text_field( $post_meta['book_description'][0] );
$url          = esc_attr( $post_meta['book_url'][0] );
$thumbnail    = esc_attr( $post_meta['book_thumbnail'][0] );
?>

<style>
.book-wrap {
  width: 100%;
  padding: 0.5em;

  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}
.book-wrap.book-wrap-half {
  width: 50%;
  float: left;
}
.book-wrap.book-wrap-one-third {
  width: 33.3%;
  float: left;
}
.book-wrap.book-wrap-two-third {
  width: 66.6%;
  float: left;
}
.book-wrap input.large-text, .book-wrap textarea.large-text {
  width: 100%;
}
.edit-link {
  float: right;
}
#book-select-thumbnail-img {
  display: block;
  margin: 0 auto;
}
#book-select-description[readonly] {
  background-color: #eee;
}
</style>

<div id='book-search-wrap' class='book-wrap'>
  <label id='book-search-text-label' for='book-search-text'>
    <p><strong>Find book with Google</strong></p>
    <input type='text' class='all-options' name='book-search-text' id='book-search-text' placeholder='Search by title...' />
  </label>
</div>

<div class='book-wrap book-wrap-half'>
  <label id='book-select-title-label' for='book-select-title'>
    <p><strong>Title</strong></p>
    <input class='large-text' id='book-select-title' type='text' name='book-select-title' value='<?php echo $title; ?>' readonly />
  </label>

  <label id='book-select-author-label' for='book-select-author'>
    <p><strong>Author</strong></p>
    <input class='large-text' id='book-select-author' type='text' name='book-select-author' value='<?php echo $author; ?>' readonly />
  </label>
</div>

<div class='book-wrap book-wrap-half'>
  <label id='book-select-url-label' for='book-select-url'>
    <p><strong>Book URL</strong></p>
    <input class='large-text' id='book-select-url' type='text' name='book-select-url' value='<?php echo $url; ?>' readonly />
  </label>

  <label id='book-select-isbn-label' for='book-select-isbn'>
    <p><strong>ISBN</strong></p>
    <input class='large-text' id='book-select-isbn' type='text' name='book-select-isbn' value='<?php echo $isbn; ?>' readonly />
  </label>
</div>

<!-- Used for clearing floats -->
<div style='clear: both;'></div>

<div class='book-wrap book-wrap-half'>
  <label id='book-select-description-label' for='book-select-description'>
    <p><strong>Official Description</strong></p>
    <textarea class='large-text' rows='6' id='book-select-description' name='book-select-description' readonly><?php echo $description; ?></textarea>
  </label>
</div>

<div class='book-wrap book-wrap-half'>
  <label id='book-select-thumbnail-label' for='book-select-thumbnail'>
    <p><strong>Thumbnail</strong></p>
    <input class='large-text' type='text' name='book-select-thumbnail' id='book-select-thumbnail' value='<?php echo $thumbnail; ?>' hidden />
  </label>
  <div class='book-wrap'>
    <img id='book-select-thumbnail-img' src='<?php echo $thumbnail; ?>' />
  </div>
</div>

<div style='clear: both;'></div>
