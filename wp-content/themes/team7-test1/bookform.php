<?php
/**
 * Template Name: BookForm
 */
 
get_header(); ?>

<div class="entry-content">
  <h1>Recommend A Book</h1>
  <?php 
    $rexFile = ABSPATH.'wp-content/plugins/rex/public/class-rex.php';
    //include($rexFile);
    $exists = class_exists('Rex');
    $test = function_exists('create_custom_post');

  ?>

  <hr />
  <div class="book_listing group">
    <p class="book_title" style="font-family: District-Medium, Helvetica; font-weight: normal; font-style: normal; font-size: 20px;">Exists? <?php echo $exists; ?></p>
    <p class="book_paragraph" style="font-family: District-BoldItalic, Helvetica; font-weight: normal; font-style: normal;">Check: <?php echo $rexFile; ?></p>
    <p class="book_paragraph" style="font-family: District-BoldItalic, Helvetica; font-weight: normal; font-style: normal;">Check: <?php echo $test; ?></p>
  </div>

  <hr />
</div>

<?php get_footer(); ?>