
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
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

		echo $this->fetch('meta');
		echo $this->fetch('css');
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
</body>
</html>
