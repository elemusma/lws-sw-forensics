<footer>
  
<section class="position-relative bg-accent-secondary" style="padding:50px 0px;">
    
<?php
echo wp_get_attachment_image(585, 'full', false, array( 'alt' => get_bloginfo( 'name' ) . ' - ' . get_bloginfo( 'description' ), 'class'=>'position-absolute w-100 h-100', 'style' => 'width:100%;height:auto;opacity:1;object-fit:cover;top:0;left:0;' ));
?>
<div class="container">
<div class="row justify-content-center text-white">

<div class="col-lg-3 col-md-6 col-12" style="">

<a href="<?php echo home_url() ?>" title="Homepage link for <?php echo get_bloginfo('name') ?> - <?php echo get_bloginfo('description') ?>">
<div style="max-width:205px;fill:white;" id="logoMain">
<div style="pointer-events:none;">
<?php 
echo logoSVG(); 

?>
</div>
</div>
</a>
<?php echo companyAbout(); ?>

<p class="bold" style="margin-bottom:0px;">Email Expert</p>
<?php echo do_shortcode('[global_email]'); ?>

</div>

<div class="col-12 desktop-hidden" style="padding:25px;"></div>

<div class="col-lg-6 col-12" style="">
  <h2 class="h3">Forensic Pathologist Expert Witness</h2>
  <?php echo wp_get_attachment_image(376,'full','',array('class'=>'w-75 h-auto','style'=>'object-fit:contain;')); ?>
  <?php 
  wp_nav_menu(array(
    'menu' => 'footer',
    'menu_class'=>'menu list-unstyled mb-0',
));
  ?>
<?php echo get_template_part('partials/si'); ?>
</div>

<div class="col-12 desktop-hidden" style="padding:25px;"></div>

<div class="col-lg-3 col-12" style="">
  <h2 class="h3">Contact Expert</h2>
  <?php echo wp_get_attachment_image(376,'full','',array('class'=>'w-75 h-auto','style'=>'object-fit:contain;')); ?>
  <div class="d-flex" style="padding:15px 0px;">
<?php echo wp_get_attachment_image(377,'full','',array('class'=>'h-auto','style'=>'width:15px;margin-right:15px;object-fit:contain;')); ?>
<div class="bold">
  <?php echo do_shortcode('[global_phone]'); ?>
</div>
  </div>
  <hr>
  <div class="d-flex" style="padding:15px 0px;">
    <?php echo wp_get_attachment_image(378,'full','',array('class'=>'h-auto','style'=>'width:15px;margin-right:15px;object-fit:contain;')); ?>
    <p class="bold" style="margin:0;">Monday - Friday:<br>
08:00 am – 06:00 pm<br>

Saturday - Sunday:<br>
Closed</p>
  </div>
</div>

<div class="col-md-12 col-11 text-center" style="color:gray !important;padding-top:75px;">
    <small class=""><a href="https://latinowebstudio.com/" target="_blank" rel="noopener noreferrer" title="Web Design, Development & SEO done by Latino Web Studio in Denver, CO" style="color:gray;" class="">Web Design &amp; Search Engine Optimization</a> <span class="" style="color:gray;">done by Latino Web Studio.</span></small>
</div>

</div>
</div>
</section>

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

<?php

wp_footer();

echo '</body>';
echo '</html>';
?>