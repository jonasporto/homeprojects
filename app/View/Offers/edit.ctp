<div class="offers form">
<?php echo $this->Form->create('Offer'); ?>
	<fieldset>
		<legend><?php echo __('Edit Offer'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('subtitle');
		echo $this->Form->input('description');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Offer.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Offer.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Offers'), array('action' => 'index')); ?></li>
	</ul>
</div>
