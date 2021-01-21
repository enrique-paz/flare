<?php get_header(); ?>

	<a data-toggle="collapse" data-parent="#col-md-5" href="#sidebar" id="employside" class="collapsed">
          <?php echo $queried_post->post_title; ?>
        </a>
				
	<div class="container main-container">
<div class="row main-margin">
<!--LEFT COLUMN-->
  <div class="col-md-5">
  <div class="leftcontainer" id="sidebar"> 

  <?php if (is_page('8')) { ?>
	<?php  
	//HOME PAGE  
$post_id = 22;
$queried_post = get_post($post_id);
 ?>

<?php } elseif (is_page('26')) { ?>
	<?php
     //ABOUT US
$post_id = 62;
$queried_post = get_post($post_id);
 ?>
 
 <?php } elseif (is_page('32')) { ?>
	<?php
     //SAFETY
$post_id = 96;
$queried_post = get_post($post_id);
 ?>
 
 <?php } elseif (is_page('34')) { ?>
	<?php  
     //EMPLOYMENT
$post_id = 106;
$queried_post = get_post($post_id);
 ?>
 
  <?php } elseif (is_page('36')) { ?>
	<?php  
     //CONTACT US
$post_id = 109;
$queried_post = get_post($post_id);
 ?>
 
 <?php } elseif (is_page('42')) { ?>
	<?php  
     //HEAVY CIVIL
$post_id = 112;
$queried_post = get_post($post_id);
 ?>
 
  <?php } elseif (is_page('45')) { ?>
	<?php  
     //INDUSTRIAL
$post_id = 115;
$queried_post = get_post($post_id);
 ?>
 
 <?php } elseif (is_page('47')) { ?>
	<?php  
     //ENVIRONMENTAL
$post_id = 119;
$queried_post = get_post($post_id);
 ?>
 
 <?php } elseif (is_page('49')) { ?>
	<?php  
     //AGGREGATES
$post_id = 150;
$queried_post = get_post($post_id);
 ?>
 
<?php } ?>
  
  

<h4 style="color:#FB0525 !important;" class="projhead"><?php echo $queried_post->post_title; ?></h4>
<?php echo $queried_post->post_content; ?>

</div>
</div>
<div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
 <div class="col-md-6">
		
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>       
        <h1><?php the_title(); ?></h1>

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>


		<?php endwhile; endif; ?>
<div id="associations"> 
</div>

</div>
</div>
<!--RIGHT  COLUMN-->
</div><!--CONTENT CONTAINER ENDS-->

<?php get_footer(); ?>
