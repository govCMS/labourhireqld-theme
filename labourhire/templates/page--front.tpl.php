<?php
/**
 * @file
 * Returns the HTML for a front page.
 */
?>
<?php include 'labourhireheader.tpl.php';  ?>

 
<div id="page">
<a name="#skip-link"></a>
  

 <?php print $breadcrumb; ?>

  <div id="main">


    <div id="front-content" class="column" role="main">

      <a id="main-content"></a>
      <div class="w3-row-padding" style="margin-left: 15px;margin-right: 15px;padding:0">
        <div class="w3-container w3-twothird lh-carousel-container">
        <div id="lh_home_carousel">   
	<p class="lh_overlay_txt">Time left to apply for your licence</p>



<?php 
//print render($page['featured_carousel']);  
print render($page['temporaryhomepage']);
  /*print render($page['labourhirebuttons']);*/ ?>

</div><!-- end lh_home_carousel -->
        </div><!-- end container -->
<div class="w3-container w3-third" style="margin-top:10px;">
<div class="row" style="margin-left:0px !important" id="lh-iwantto"><h2 style="float:left;">I want to</h2></div>


		<div class="row" style="margin-left:0px !important;">
			  <div class="w3-half" style="margin-bottom:10px" >
			 <a href="https://ols.oir.qld.gov.au/signin/" style="color:black"> 
			
<button class="w3-button lh_buttons w3-round-large" style="background:#f2e3cb" id="lh_apply">
			  <span class="glyphicon glyphicon-pencil lh_glypicon_dark" aria-hidden="true">
			  </span>
			  <span class="glyphtext">Apply for a labour hire licence</span>
			  </button>
</a>
</div>
			  
			  
			 <div class="w3-half" style="margin-bottom:10px">
			 <a href="https://ols.oir.qld.gov.au/licence-register/search/" class="lh_glyph_fal" style="color:#fff">  <button class="w3-button lh_buttons  w3-round-large" style="background:#000" id="#lh_find">
			  <span class="glyphicon glyphicon-search lh_glypicon" aria-hidden="true"></span>
			  <span class="glyphtext">Find a licensed labour hire service</span>
			   </button></a></div>
		</div>
		
		<div class="row reportrow" style="margin-left:0px !important;">
			  <div class="w3-half reportcell">
			  <a href="/report-a-problem" style="color:black"> <button class="w3-button w3-teal lh_buttons w3-round-large" id="lh_report">
			  <span class="glyphicon glyphicon-edit lh_glypicon lh_shift" aria-hidden="true"></span>
			  <span class="glyphtext lh-report">Report a problem</span>
			   </button></a>
		</div>
			  
			  
			  <div class="w3-half">
			 <a href="/resources/subscribe" style="color:black">  <button class="w3-button lh_buttons w3-round-large" style="background:#a6d4d6" id="lh_sub">
			  <span class="glyphicon glyphicon-envelope lh_glypicon_dark" aria-hidden="true"></span>
			  <span class="glyphtext">Subscribe to the labour hire newsletter</span>
			   </button></a></div>
		</div>
 <div class="row" style="margin-left:0px !important"><p style="float:left;vertical-align:bottom;font-weight:bold "><a href="https://www.labourhire.qld.gov.au/online-services" style="text-decoration:none;color:#000">Online services</a> | <a href="https://ols.oir.qld.gov.au/applications-register/"> Pending applications</a></p></div>

			
          </div><!-- end w3 container -->

      <?php 

    

      print render($page['iam']); 
     

?>
<script>$113(document).ready(function(){

$113('#owl-demo').owlCarousel({
    center: true,
    items: 3,
    loop: true,
    margin: 10,
    //autoPlay: 3000, //Set AutoPlay to 3 seconds
    nav: true
});

});

</script>


<div class="w3-row">
<div class="w3-container" style="margin-left:-15px;margin-right:-15px;margin-top:-30px;">
<?php

#print render($foo);

#print render($page['labourhirehomenewscaro']); ?>
  </div>
          </div>


    </div><!-- end main -->

    

  </div>

<a href="#skip-link" id="skip-content" class="element-invisible">Go to top of page</a>
<?php include 'labourhirefooter.tpl.php'; ?>

 <script>
function getTimeRemaining(endtime) {
	
	
  var t = Date.parse(endtime) - Date.parse(new Date());
 
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}
//6860144000

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

   daysSpan.innerHTML = t.days;
  //daysSpan.innerHTML = 1;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

//var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
//Date.UTC(year, month[, day[, hour[, minute[, second[, millisecond]]]]])

//var deadline =  new Date('June 15, 2018, 23:59:59 GMT+11:00');
var deadline = new Date('2018-06-16T00:00:00');
initializeClock('clockdiv', deadline);
    </script> 
