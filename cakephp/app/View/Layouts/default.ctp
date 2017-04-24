
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('detail');
		
		// echo $this->Html->css('cake.generic');//gọi những css trong nớ
		echo $this->Html->css('profile');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('img');
		echo $this->fetch('script');

	?>
</head>
<body>
	<div id="container">
		<div id="header">
			
		</div>
		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
		</div>
	</div>

</body>
</html>
