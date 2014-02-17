<div class="offers view">
<h2><?php echo __('Offer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($offer['Offer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($offer['Offer']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subtitle'); ?></dt>
		<dd>
			<?php echo h($offer['Offer']['subtitle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($offer['Offer']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($offer['Offer']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Offer'), array('action' => 'edit', $offer['Offer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Offer'), array('action' => 'delete', $offer['Offer']['id']), null, __('Are you sure you want to delete # %s?', $offer['Offer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Offers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Offer'), array('action' => 'add')); ?> </li>
	</ul>
</div>
