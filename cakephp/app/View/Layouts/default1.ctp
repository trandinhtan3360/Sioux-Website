
<!DOCTYPE html>
<html>
<head>
	
	<meta http-equiv="Content-Type" content="text/htmll; charset=UTF-8" />
	<title> Giúp việc </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>

	<?php echo $this->Html->charset(); ?>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('custom-styles');
		
		echo $this->Html->css('flexslider');
		echo $this->Html->script('bootstrap');
		echo $this->Html->script('jquery.prettyPhoto');
		echo $this->Html->script('jquery.flexslider');
		echo $this->Html->script('jquery.custom');
		
		echo $this->Html->css('bootstrap-responsive');
		
	?>
	<script type="text/javascript">
$(document).ready(function () {
    $("#btn-blog-next").click(function () {
      $('#blogCarousel').carousel('next')
    });
     $("#btn-blog-prev").click(function () {
      $('#blogCarousel').carousel('prev')
    });
     $("#btn-client-next").click(function () {
      $('#clientCarousel').carousel('next')
    });
     $("#btn-client-prev").click(function () {
      $('#clientCarousel').carousel('prev')
    });
    
});
 $(window).load(function(){
    $('.flexslider').flexslider({
        animation: "slide",
        slideshow: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
    });  
});
</script>
</head>
<body class="home">
	
		<div id="header">
		<?php echo $this->element('header'); ?>		
		</div>
		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div class="footer">
			<?php echo $this->element('footer'); ?>
		</div>
	
<!-- 	<?php

	echo $this->html->script('../assets/js/jquery.js');
	echo $this->html->script('../assets/js/jquery-1.8.3.min.js');
	echo $this->html->script('../assets/js/bootstrap.min.js');
	echo $this->html->script('../assets/js/jquery.dcjqaccordion.2.7.js',array('class'=>"include"));
	echo $this->html->script('../assets/js/jquery.scrollTo.min.js');
	echo $this->html->script('../assets/js/jquery.nicescroll.js');
	echo $this->html->script('../assets/js/jquery.sparkline.js');

	//common script for all pages//
       
	echo $this->html->script('../assets/js/gritter/js/jquery.gritter.js');
	echo $this->html->script('../assets/js/gritter-conf.js');
	echo $this->html->script('../assets/js/common-scripts.js');

	//script for this page//

	echo $this->html->script('../assets/js/sparkline-chart.js');
	echo $this->html->script('../assets/js/zabuto_calendar.js');
?> -->
</body>
</html>
