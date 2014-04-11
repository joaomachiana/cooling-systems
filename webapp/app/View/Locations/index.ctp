<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Locations'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('location_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('country');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('province');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('district');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('municipal_district');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('city');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('address');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('other_information');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('created');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('modified');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($locations as $location): ?>
			<tr>
				<td><?php echo h($location['Location']['location_id']); ?>&nbsp;</td>
				<td><?php echo h($location['Location']['country']); ?>&nbsp;</td>
				<td><?php echo h($location['Location']['province']); ?>&nbsp;</td>
				<td><?php echo h($location['Location']['district']); ?>&nbsp;</td>
				<td><?php echo h($location['Location']['municipal_district']); ?>&nbsp;</td>
				<td><?php echo h($location['Location']['city']); ?>&nbsp;</td>
				<td><?php echo h($location['Location']['address']); ?>&nbsp;</td>
				<td><?php echo h($location['Location']['other_information']); ?>&nbsp;</td>
				<td><?php echo h($location['Location']['created']); ?>&nbsp;</td>
				<td><?php echo h($location['Location']['modified']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $location['Location']['location_id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $location['Location']['location_id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $location['Location']['location_id']), null, __('Are you sure you want to delete # %s?', $location['Location']['location_id'])); ?>
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
			<li><?php echo $this->Html->link(__('New %s', __('Location')), array('action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>