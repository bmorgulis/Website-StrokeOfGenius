<?php include "header.php"; ?>
<div id="full-main">
<h1 id="main-page">
    
Since our debut in 2024, Stroke of Genius has had one thing in mind: to provide 
our customers with high-quality, tasteful, and beautiful art that would look 
great in the studio, and in your sitting room. We aim to provide a superior 
shopping experience, and we are confident that you will be pleased with our products.
</h1>

<br><br><br><br><br><br><br><br>


</div>
<div class="rsslidesdiv">
<ul class="rslides">
  <li><img src="img/item1.jpg" alt=""></li>
  <li><img src="img/item2.jpg" alt=""></li>
  <li><img src="img/item3.jpg" alt=""></li>
</ul>

<script>
  $(function() {
    $(".rslides").responsiveSlides();
  });
</script>
<script>
$(".rslides").responsiveSlides({
  auto: true,             // Boolean: Animate automatically, true or false
  speed: 500,            // Integer: Speed of the transition, in milliseconds
  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
  pager: false,           // Boolean: Show pager, true or false
  nav: false,             // Boolean: Show navigation, true or false
  random: false,          // Boolean: Randomize the order of the slides, true or false
  pause: false,           // Boolean: Pause on hover, true or false
  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
  prevText: "Previous",   // String: Text for the "previous" button
  nextText: "Next",       // String: Text for the "next" button
  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
  manualControls: "",     // Selector: Declare custom pager navigation
  namespace: "rslides",   // String: Change the default namespace used
  before: function(){},   // Function: Before callback
  after: function(){}     // Function: After callback
});
</script>
</div>
<?php include "footer.php"; ?>


