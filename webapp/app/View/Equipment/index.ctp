<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Equipment'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('equipment_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('location_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('brand');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('model');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('sold');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('reference_number');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('manufacture_date');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('function_type');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('capacity');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('created');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('modified');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($equipment as $equipment): ?>
			<tr>
				<td><?php echo h($equipment['Equipment']['equipment_id']); ?>&nbsp;</td>
				<td><?php echo h($equipment['Equipment']['location_id']); ?>&nbsp;</td>
				<td><?php echo h($equipment['Equipment']['brand']); ?>&nbsp;</td>
				<td><?php echo h($equipment['Equipment']['model']); ?>&nbsp;</td>
				<td><?php echo h($equipment['Equipment']['sold']); ?>&nbsp;</td>
				<td><?php echo h($equipment['Equipment']['reference_number']); ?>&nbsp;</td>
				<td><?php echo h($equipment['Equipment']['manufacture_date']); ?>&nbsp;</td>
				<td><?php echo h($equipment['Equipment']['function_type']); ?>&nbsp;</td>
				<td><?php echo h($equipment['Equipment']['capacity']); ?>&nbsp;</td>
				<td><?php echo h($equipment['Equipment']['created']); ?>&nbsp;</td>
				<td><?php echo h($equipment['Equipment']['modified']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $equipment['Equipment']['equipment_id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $equipment['Equipment']['equipment_id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $equipment['Equipment']['equipment_id']), null, __('Are you sure you want to delete # %s?', $equipment['Equipment']['equipment_id'])); ?>
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
			<li><?php echo $this->Html->link(__('New %s', __('Equipment')), array('action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>