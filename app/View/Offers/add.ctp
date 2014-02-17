
<?php echo $this->Form->create('Offer',array('data-role'=>'form')); ?>
	<fieldset>
		<legend><?php echo __('Add Offer'); ?></legend>
	<?php echo $this->Form->input('title', array('div'=>array('class'=>'form-group'))); ?>
	<?php echo $this->Form->input('subtitle',array('div'=>array('class'=>'form-group'))); ?>
	<?php echo $this->Form->input('description',array('type'=>'textarea','rows' => '5','div'=>array('class'=>'form-group'))); ?>
	<?php echo $this->Form->input('date',array('div'=>array('class'=>'form-group'))); ?>
	</fieldset>
</div>
<?php echo $this->Form->input('add',array('type'=>'submit','class'=>'btn btn-default')); ?>

<?php echo $this->Form->end(); ?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Offers'), array('action' => 'index')); ?></li>
	</ul>

