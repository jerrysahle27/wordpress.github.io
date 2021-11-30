<?php get_header(); ?>
<?php
     if ( have_posts() )  :
        while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
       <?php $header_image = get_field('header_image');?>
       <?php $facts = get_field('facts');?>
       <?php $header_image = get_field('header_image');?>
    <?php if( $header_image ): ?>
    <img class="thumbnail" src="<?php echo $header_image['url']; ?>" alt="<?php echo $header_image['alt']; ?>" />
    <?php echo $facts ?>
       <?php 
         endif; 
        endwhile;
        endif;

 ?>
 
 

<?php get_footer(); ?>