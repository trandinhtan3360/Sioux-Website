<<<<<<< HEAD
=======

>>>>>>> 1dee8433ba3ebef593bf73cd800601233d3e6f8d
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/htmll; charset=UTF-8" />
	<title> Giúp việc </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>

	<?php echo $this->Html->charset(); ?>
<<<<<<< HEAD
	<?php

		echo $this->Html->meta('icon');
=======
	<title>
		
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		// echo $this->Html->meta('icon');

		// echo $this->Html->css('cake.generic');

		// echo $this->fetch('meta');
		// echo $this->fetch('css');
		// echo $this->fetch('script');

		echo $this->Html->meta('icon'); // cho hien thi icon cua web minh thiet ke

		echo $this->Html->css('bootstrap.min');// khai bao boostrap
		echo $this->Html->css('bootstrap-theme.min');
		echo $this->Html->css('style');

		echo $this->html->script('jquery-1.11.3.min');
		echo $this->html->script('bootstrap.min');
>>>>>>> 1dee8433ba3ebef593bf73cd800601233d3e6f8d

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('custom-styles');
		
		echo $this->Html->css('flexslider');
		echo $this->Html->script('bootstrap');
		//echo $this->Html->script('jquery.prettyPhoto');
		echo $this->Html->script('jquery.flexslider');
		echo $this->Html->script('jquery.custom');

    	echo $this->Html->css('style');

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
<<<<<<< HEAD
		<?php echo $this->element('header'); ?>		
=======

>>>>>>> 1dee8433ba3ebef593bf73cd800601233d3e6f8d
		</div>
		<div >

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
<<<<<<< HEAD
		<div class="footer">
			<?php echo $this->element('footer'); ?>
		</div>
	
	
=======
		<div id="footer">
			<!-- <?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>
			<p>
				<?php echo $cakeVersion; ?>
			</p> -->
		</div>
	</div>
	<!-- <?php echo $this->element('sql_dump'); ?> -->
>>>>>>> 1dee8433ba3ebef593bf73cd800601233d3e6f8d
</body>
</html>
