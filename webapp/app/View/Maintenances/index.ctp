<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Maintenances'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('maintenance_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('equipment_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('worker_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('performed_date');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('comment_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('next_maintanance_date');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('created');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('modified');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($maintenances as $maintenance): ?>
			<tr>
				<td><?php echo h($maintenance['Maintenance']['maintenance_id']); ?>&nbsp;</td>
				<td><?php echo h($maintenance['Maintenance']['equipment_id']); ?>&nbsp;</td>
				<td><?php echo h($maintenance['Maintenance']['worker_id']); ?>&nbsp;</td>
				<td><?php echo h($maintenance['Maintenance']['performed_date']); ?>&nbsp;</td>
				<td><?php echo h($maintenance['Maintenance']['comment_id']); ?>&nbsp;</td>
				<td><?php echo h($maintenance['Maintenance']['next_maintanance_date']); ?>&nbsp;</td>
				<td><?php echo h($maintenance['Maintenance']['created']); ?>&nbsp;</td>
				<td><?php echo h($maintenance['Maintenance']['modified']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $maintenance['Maintenance']['maintenance_id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $maintenance['Maintenance']['maintenance_id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $maintenance['Maintenance']['maintenance_id']), null, __('Are you sure you want to delete # %s?', $maintenance['Maintenance']['maintenance_id'])); ?>
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
			<li><?php echo $this->Html->link(__('New %s', __('Maintenance')), array('action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>