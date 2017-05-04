<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
			echo $this->Html->meta('icon');
    		echo $this->Html->css('bootstrap.css');
    		echo $this->Html->css('bootstrap-theme.min');
    		echo $this->Html->css('../assets/font-awesome/css/font-awesome.css');
    		echo $this->Html->css('../assets/css/zabuto_calender.css');
    		echo $this->Html->css('../assets/js/gritter/css/jquery.gritter.css');
    		echo $this->Html->css('../assets//lineicons/style.css');
    		echo $this->Html->css('../assets/css/style.css');
    		echo $this->Html->css('../assets/css/style-responsive.css');
    		echo $this->Html->script('../assets/js/chart-master/Chart.js');
    		
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
			
		</div>
	</div>
	
</body>
<?php
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
?>
<!-- Script at end to load web faster -->
<?php
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
?>
<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Chào bạn đến với WONDER!',
            // (string | mandatory) the text inside the notification
            text: 'Rê chuột vào đây để hiện nút xóa. Bạn có thể ẩn left-sidebar khi kích vào biểu tượng menu bên góc trái.',
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });
        return false;
        });
	</script>
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
</html>