<?php
/*
Template Name: Contact
*/
?>

<?php include(TEMPLATEPATH . '/includes/pagecolor.php'); ?>

<?php get_header(); ?>

<div class="main-content clearfix">

<div class="grid-full clearfix">

<div class="col2-left">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="entry">
  
  <h2 class="page-title"><?php 
		 $customTitle = get('custom_page_title');
            if ( ! empty ( $customTitle ) )
               echo $customTitle;
			 else echo the_title();
   ?></h2>
       
   <?php the_content(); ?>
 
</div><!-- end entry -->
<?php endwhile; endif; ?>

</div><!-- end col2-left -->

<div class="col2-right">

  <div class="map">
    <iframe width="264" height="210" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=The+Law+Society+113+Chancery+Lane+London+WC2A+1PL&amp;aq=&amp;sll=52.8382,-2.327815&amp;sspn=7.182319,21.09375&amp;ie=UTF8&amp;hq=The+Law+Society&amp;hnear=113+Chancery+Ln,+City+of+London,+London+WC2A,+United+Kingdom&amp;t=m&amp;ll=51.51488,-0.111605&amp;spn=0.006295,0.006295&amp;output=embed"></iframe><br />
    <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=The+Law+Society+113+Chancery+Lane+London+WC2A+1PL&amp;aq=&amp;sll=51.514652,-0.111335&amp;sspn=0.00689,0.017982&amp;g=113+Chancery+Lane,+London+WC2A+1PL,+United+Kingdom&amp;ie=UTF8&amp;hq=The+Law+Society&amp;hnear=113+Chancery+Ln,+City+of+London,+London+WC2A,+United+Kingdom&amp;ll=51.51488,-0.111605&amp;spn=0.00689,0.017982&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=9686028411905868496" target="_blank" class="large-map-link">View in Google Maps</a>
  </div><!-- end map -->
  
</div><!-- end col2-right -->

</div><!-- end grid-full -->

<div class="grid-full clearfix">
  
 <!-- contact form to go here -->
  
</div><!-- end grid-full -->


</div><!-- end main-content -->

<?php get_footer(); ?>