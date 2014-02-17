

<div class="col-md-8">
	<h2><?php echo __('Offers'); ?></h2>
	<div class="table-responsive">
	<table class="table table-striped table-hover" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('subtitle'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($offers as $offer): ?>
	<tr>
		<td><?php echo h($offer['Offer']['id']); ?>&nbsp;</td>
		<td><?php echo h($offer['Offer']['title']); ?>&nbsp;</td>
		<td><?php echo h($offer['Offer']['subtitle']); ?>&nbsp;</td>
		<td><?php echo h($offer['Offer']['description']); ?>&nbsp;</td>
		<td><?php echo h($offer['Offer']['date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $offer['Offer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $offer['Offer']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $offer['Offer']['id']), null, __('Are you sure you want to delete # %s?', $offer['Offer']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging row">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="col-md-2">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Offer'), array('action' => 'add')); ?></li>
	</ul>
</div>
