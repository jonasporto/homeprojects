<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->css('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css');
		echo $this->Html->script('//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js');
		echo $this->Html->meta('icon');
		?>
</head>
<body>
	<div id="container" class="container">
		<div id="header">
			<h4><?php echo 'Olá '.$user.'  |  '.$this->Html->link('logout',array('controller'=>'users','action' => 'logout')); ?></h4>
		</div>
		<div id="content" class="row">
   		<?php echo $this->Session->flash(); ?>
		

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer" class="row">
		<?php echo $this->element('sql_dump'); ?>
		</div>
	</div>
	
</body>
</html>
