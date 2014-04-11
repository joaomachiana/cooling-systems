<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Corporates'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('corporate_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('name');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('other_information');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('created');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('modified');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($corporates as $corporate): ?>
			<tr>
				<td><?php echo h($corporate['Corporate']['corporate_id']); ?>&nbsp;</td>
				<td><?php echo h($corporate['Corporate']['name']); ?>&nbsp;</td>
				<td><?php echo h($corporate['Corporate']['other_information']); ?>&nbsp;</td>
				<td><?php echo h($corporate['Corporate']['created']); ?>&nbsp;</td>
				<td><?php echo h($corporate['Corporate']['modified']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $corporate['Corporate']['corporate_id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $corporate['Corporate']['corporate_id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $corporate['Corporate']['corporate_id']), null, __('Are you sure you want to delete # %s?', $corporate['Corporate']['corporate_id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>

		<?php echo $this->BootstrapPaginator->pagination(); ?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Corporate')), array('action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>