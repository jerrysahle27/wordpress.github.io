
<?php
     if ( have_posts() )  :
        while ( have_posts() ) : the_post(); ?>
       <?php $header_image = get_field('header_image');?>
       <?php $facts = get_field('facts');?>
       <?php $payment_plan = get_field('payment_plan');?>
       <?php $header_image = get_field('header_image');?>

  <div style="height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  border: 2px white; margin: 50px;
  overflow-x: hidden;
  left: 0;
">   
  <h4>
<?php echo the_title() ?></h4>
    <?php if( $header_image ): ?>
    <img class="thumbnail" src="<?php echo $header_image['url']; ?>"style="float: left;    
      margin: 0 15px 0 0; width:80%" alt="<?php echo $header_image['alt']; ?>" />
    </div>  
    <div style="height: 100%;
 
  width: 50%;
  position: fixed;
  z-index: 1;
  overflow-y: hidden;
  border: 2px white; 
  margin: 60px;
  padding-bottom: 20px;
  right: 0;
  ">
   
<p>INTERCONTINENTAL HOTELS &amp; RESORTS</p>
<p>Whether you’re looking for a travel destination steeped in culture and heritage, 
   an impromptu weekend of shopping and spa, or an idyllic resort for your destination wedding,
    InterContinental Hotels &amp; Resorts can offer you a world of diverse destinations. 
    From the exquisite beaches of Bora Bora and Fiji, to the lively streets of Paris, Hong Kong and New York, 
    your travel opportunities are limitless.</p>

    <div style=" display:flex;">
      <?php echo $facts ?> <?php echo $payment_plan ?>
    </div>
    </div>
       <?php 
         endif; 
        endwhile;
        endif;

 ?>
 
    