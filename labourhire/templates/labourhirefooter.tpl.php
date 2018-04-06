<footer id="footer" class="<?php print $classes; ?>">
<div id="feedback_row" class="w3-row">
<div class="container w3-half">
  <a href="#text3" class="w3-btn w3-govblue" style="font-weight:bold;border:1px solid #fff;border-radius:5px">Feedback</a>
</div>
<div class="container w3-half" >
<a href="/contact-us" class="w3-btn w3-govblue pull-right" id="connect-us-footer" style="font-weight:bold">Connect with us <span class="glyphicon glyphicon-envelope lh_footer_envelope" aria-hidden="true" ></span></a> 
</div>
</div>
<div id="labourhirefooterlinks">

<div class="googlecontainer">
 
<div id="google_translate_element" style="margin-top: 20px;padding-right:20px"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, gaTrack: true, gaId: 'UA-112226681'}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

 
</div>
  <?php $footermain_menu = menu_navigation_links('menu-footer-labour-hire');
 print theme('links__menu-footer-labour-hire', array('links' => $footermain_menu )); ?>
<div class="gov_links">&copy;  The State of Queensland 2018
<br>
<p><a href="http://www.qld.gov.au/" accesskey="1" style="color:#fff;text-decoration:none;">Queensland Government</a></p>
</div>
</div>



<?php #print render($page['footer']); ?>
</footer>
</div><!-- closes main div -->

<?php print render($page['bottom']); ?>





  <div class="lightbox3" role="dialog" id="text3">
    <div class="box3">
        <a class="close" href="#">X</a>
        <p class="title"></p>
        <div class="content">
           
<h3 id="dialog-title" class="field-name-field-subtitle">Is your feedback about:</h3>
<ul class="indented" style="list-style-type: circle;" >
<li><a href="#text" class="lh_feedback_link">this website </a></li>
<br>
<li><a href="#text2" class="lh_feedback_link">a labour hire licensing general enquiry or problem? </a></li>
        </div>
    </div>
</div>






<div class="lightbox" role="dialog" id="text" style="overflow:auto">
    <div class="box">
        <a class="close" href="#">X</a>
        <p class="title" id="dialog-title"></p>
        <div class="content">
           <?php 

            print render($page['footerfeedback']);
           ?>
        </div>
    </div>
</div>


<div class="lightbox2" role="dialog" id="text2">
    <div class="box2">
        <a class="close" href="#">X</a>
        <p class="title" id="dialog-title"></p>
        <div class="content">
           <?php 
            print render($page['footerfeedbacktext']);

           ?>
        </div>
    </div>
</div>
<script>

$113(document).ready(function(){
    $113('.lightbox').draggable();
	alert('pop');
});

</script>


<!-- end the modals for feedback form -->

<!-- linked in tracking code -->
<script type="text/javascript"> _linkedin_data_partner_id = "212667"; </script><script type="text/javascript"> (function(){var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(); </script> <noscript> <img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=212667&fmt=gif" /> </noscript>

<!-- end linked in tracking code -->








