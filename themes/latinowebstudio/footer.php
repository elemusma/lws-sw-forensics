<?php

// if(!is_page(1807)){
// 	echo get_template_part('lead-magnet/lead-magnet');	
// }

?>

<footer>
  
<section class="position-relative" style="padding:50px 0px;">
    
<?php
echo wp_get_attachment_image(585, 'full', false, array( 'alt' => get_bloginfo( 'name' ) . ' - ' . get_bloginfo( 'description' ), 'class'=>'position-absolute w-100 h-100', 'style' => 'width:100%;height:auto;opacity:1;object-fit:cover;top:0;left:0;' ));
?>
<div class="container">
<div class="row justify-content-center">

<div class="col-12 text-center" style="padding:20px 0;">

<a href="<?php echo home_url() ?>" title="Homepage link for <?php echo get_bloginfo('name') ?> - <?php echo get_bloginfo('description') ?>">
<div style="max-width:205px;fill:white;margin:auto;" id="logoMain">
<div style="pointer-events:none;">
<?php 
echo logoSVG(); 
// echo wp_get_attachment_image(logoImg()['id'], 'full', false, array( 'alt' => get_bloginfo( 'name' ) . ' - ' . get_bloginfo( 'description' ), 'style' => 'width:100%;height:auto;' ));
?>
</div>
</div>
</a>
  <?php 
  wp_nav_menu(array(
    'menu' => 'primary',
    'menu_class'=>'menu list-unstyled mb-0 d-flex justify-content-center align-items-center flex-wrap',
));
  ?>
<?php echo get_template_part('partials/si'); ?>



<div class="text-center">
  <div class="text-white small">
    <span>Phone: <?php echo do_shortcode('[global_phone]'); ?></span> <span class="text-accent">|</span> <span>Address: Denver, CO 80210</span> <span class="text-accent">|</span> <span>Email: <?php echo do_shortcode('[global_email]'); ?></span>
  </div>
</div>
</div>

<div class="position-relative" style="display:inline-block;">
  <?php echo do_shortcode('[book_online_button]'); ?>
</div>

</div>
</div>
</section>

<div class="bg-white" style="height:50px;"></div>

<div class="bg-accent-octonary text-center" style="padding:15px 0;">
  <a href="https://buildupuniversity.com/" target="_blank" rel="noopener noreferrer" title="Build Up University - Building Up the Trades Industry" style="">
  <?php echo wp_get_attachment_image(577, 'full', false, array( 'alt' => get_bloginfo( 'name' ) . ' - ' . get_bloginfo( 'description' ), 'class'=>'h-auto', 'style' => 'width:200px;' )); ?>
</a>
</div>

<!-- The first Modal -->
<div id="mobileMenu" class="modal-custom mobile-menu" style="opacity:0;pointer-events:none;">

<!-- Modal content -->
<div class="modal-content-menu modal-content-custom" style="padding: 150px 15px;background:var(--accent-octonary);
    margin-top: 0;
    margin-left: 0;
    margin-bottom: 0;
    border-left: 0;
    border-bottom: 0;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
    height: 100vh;">
<span class="close-custom" id="navMenuClose">&times;</span>
	<?php

echo '<div style="width:100%;max-width:165px;" id="logoMain">';
?>

<a href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo( 'name' ) . ' - ' . get_bloginfo( 'description' ); ?>">
  <div id="logoMain" style="min-width:100px;width:100%;transition:all .25s ease-in-out;">
    <div style="pointer-events:none;">
      <?php 
      echo logoSVG();
      ?>
    </div>
  </div>
</a>

<?php
echo '</div>';

wp_nav_menu(array(
    'menu' => 'primary',
    'menu_class'=>'menu list-unstyled mb-0'
));
?>
<?php 
echo do_shortcode('[global_cta]');

echo get_template_part('partials/si');

?>

<?php
echo '</div>';
echo '</div>';
// end of mobile nav menu


echo '</footer>';


echo codeFooter();

?>

<style>
label.screen-reader-text {
    display: none;
}
#searchform input#searchsubmit {
    width: 332px;
}

#searchform input#s {
    width: 300px;
}</style>
<!-- <div id="searchMenu" class="modal-custom" style="opacity:0;pointer-events:none;background-color:rgba(0, 0, 0, 0.75);">
<div class="modal-content-custom d-flex align-items-center position-relative" style="background: transparent;box-shadow: none;border: none;">
<span class="close-custom position-absolute text-white" style="top:25px;right:0px;z-index:1;font-size:4rem;">&times;</span>

<div class="row">
<div class="col-12 text-center">
<span class="h2 text-white">Search for:</span>
<?php echo get_search_form(); ?>
</div>

</div>

</div>
</div> -->

<?php

wp_footer();

echo '</body>';
echo '</html>';
?>