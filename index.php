<!DOCTYPE html>
<html>
  <head> 
    <title>B-Effective</title>
  	<meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/jquery-latest.min.js" type="text/javascript"></script>
    <script src="js/demo.js" type="text/javascript"></script>
  	
  	
  </head>
  <body>
  	<?php include('menu.php') ?>


  <secction class="demo">
    <div class="container">
    	<div style="display: inline-block;">
        <div>
      		<img src="http://placehold.it/550x250/D04A4A"/>
      	</div>
      	<div>
      		<img src="http://placehold.it/650x250/4133FF"/>
    	  </div>
    	  <div>
      	  	<img src="http://placehold.it/750x350/50FF71"/>
      	</div>
      	<div>
       		<img src="http://placehold.it/850x400/FDFF5F"/>
      	</div>
      </div>
    </div>
  </secction>
  <section class="descripcion">
  </section>
  </body>
</html>
<script type="text/javascript">
$(document).ready(function(){

  var currentIndex = 0,
  items = $('.container div'),
  itemAmt = items.length;

  function cycleItems() {
    var item = $('.container div').eq(currentIndex);
    items.hide();
    item.css('display','inline-block');
  }

  var autoSlide = setInterval(function() {
    currentIndex += 1;
    if (currentIndex > itemAmt - 1) {
      currentIndex = 0;
    }
    cycleItems();
  }, 9000);

  $('.next').click(function() {
    clearInterval(autoSlide);
    currentIndex += 1;
    if (currentIndex > itemAmt - 1) {
      currentIndex = 0;
    }
    cycleItems();
  });

  $('.prev').click(function() {
      clearInterval(autoSlide);
      currentIndex -= 1;
      if (currentIndex < 0) {
        currentIndex = itemAmt - 1;
     }
      cycleItems();
  });
});
</script>