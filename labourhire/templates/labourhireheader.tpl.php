<?php
/**
 * @file
 * Returns the HTML for labour hire header
 *
 */
?>

<!-- JS -->


<script type="text/javascript">
  $113(document).ready(function($) {
    $113('.accordion').find('.accordion-toggle').click(function(){
      //Expand or collapse this panel
      $113(this).next().slideToggle('fast');
      //Hide the other panels
      $113(".accordion-content").not($(this).next()).slideUp('fast');
    });
	
	
	
$113( ".show_report" ).click(function() {
	
 $113( ".anon_report" ).toggle( "slow", function() {
    
  });
  
  $113( ".webform-client-form-322" ).toggle( "slow", function() {
    
  });
  
  
});
$113(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
	
	
	
  }); //end document ready
	
$113(document).ready(function($) {   
$113('.webform-component--you-are-a').append('<div class="g-recaptcha" data-sitekey="6LehAmMUAAAAACxGLV0Qj7NPznYhChcl8ZkkDM0U"></div>');
$113('.webform-component--how-did-you-find-out-about-the-issue-youre-reporting').append('<div class="g-recaptcha" data-sitekey="6LehAmMUAAAAACxGLV0Qj7NPznYhChcl8ZkkDM0U"></div>');
	
}); //end document ready	
	
	
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<!-- CSS -->
<style>
  .accordion-toggle {cursor: pointer;}
  .accordion-content {display: none;}
  .accordion-content.default {display: block;}
</style>


<?php 
if($page['labourhirealerts']){ print render($page['labourhirealerts']);} ?>
<div class="wrapper_header">
 <div class="row lh_help_menu" class="">
	
    <?php if ($secondary_menu): ?>
      <nav class="header__secondary-menu" id="secondary-menu" role="navigation">
        <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'class' => array(
              'links',
              'inlineLinks--bordered--double',
              'clearfix',
            ),
          ),
          'heading' => array(
            'text' => isset($secondary_menu_heading) ? $secondary_menu_heading : '',
            'level' => 'h2',
            'class' => array('element-invisible','menu_h2'),
          ),
        )); ?>

      </nav>
      </div>
    <?php endif; ?>

<header class="header lh_no_print" id="header" role="banner">
  <div class="header__inner">
 


<div class="header__region region region-header lh_no_print">
<div id="block-search-api-page-default-search" class="block block-search-api-page last even" style="">    
  <div class="block__content lh_search_block">
<!--
<form id="myForm" class="lh_no_print">Search
<input type="radio" name="myRadio" value="SearchThisSite" /> this website
<input type="radio" name="myRadio" value="SearchAllGov" /> all Queensland Government
</form>

-->


  
</div>
</div>
</div>





     
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo nounderline" id="logo">
          <img src="<?php print '/' . path_to_theme(); ?>/qg-coa-white.png" alt="<?php print t('Home'); ?>" class="header__logo-image" style="margin-top:-50px;" />
<br><h4 class="header__site-slogan" style=""><?php print $site_name;?></h4>
        </a>
          
      

  <?php print render($page['header']); ?>
  </div><!-- header inner -->

</header>
<div class="printHeaderlogo"><img src="<?php print '/' . path_to_theme(); ?>/qld-crest-on-top-2linestacked-b-w.jpg" class="imgprintHeaderlogo"></div>

<?php print render($page['navigation']); ?>
</div>
