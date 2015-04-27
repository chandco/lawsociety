<?php
/*
Template Name: Single Page
*/
?>

<?php include(TEMPLATEPATH . '/includes/pagecolor.php'); ?>

<?php get_header(); ?>

<div class="main-content clearfix">

<div class="grid-full clearfix">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="entry">
  
  <h2 class="page-title"><?php 
		 $customTitle = get('custom_page_title');
            if ( ! empty ( $customTitle ) )
               echo $customTitle;
			 else echo the_title();
	   ?></h2>
  
  <div class="single-blog-entry">
<style>
/*Amanda's Styles*/

.barmenu{
float:left;
width:170px;
margin-right:10px;
border: 1px solid #000;
padding: 10px;
height: 260px;
margin-top: 10px!important;
}
.barsection{
clear:both;
width:640px;
}
.clearfix{
clear:both!important;

}
.barmenu h3 {
font-size:1.2em;
font-weight:600;

}


</style>
   
   <!--<?php echo get_the_post_thumbnail($post->ID, 'post-thumbnail-square',  array('class' => 'single-blog-img')); ?>-->
   
   <?php the_content(); ?>
   
  </div><!-- end entry -->
  <?php endwhile; endif; ?>
    
  </div><!-- single-blog-entry -->


</div><!-- end grid-full -->

</div><!-- end main-content -->

<?php get_footer(); ?>