<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Contracts'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('contract_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('client_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('plan_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('signature_date');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('duration');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('start_date');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('expiry_date');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('created');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('modified');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($contracts as $contract): ?>
			<tr>
				<td><?php echo h($contract['Contract']['contract_id']); ?>&nbsp;</td>
				<td><?php echo h($contract['Contract']['client_id']); ?>&nbsp;</td>
				<td><?php echo h($contract['Contract']['plan_id']); ?>&nbsp;</td>
				<td><?php echo h($contract['Contract']['signature_date']); ?>&nbsp;</td>
				<td><?php echo h($contract['Contract']['duration']); ?>&nbsp;</td>
				<td><?php echo h($contract['Contract']['start_date']); ?>&nbsp;</td>
				<td><?php echo h($contract['Contract']['expiry_date']); ?>&nbsp;</td>
				<td><?php echo h($contract['Contract']['created']); ?>&nbsp;</td>
				<td><?php echo h($contract['Contract']['modified']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $contract['Contract']['contract_id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contract['Contract']['contract_id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contract['Contract']['contract_id']), null, __('Are you sure you want to delete # %s?', $contract['Contract']['contract_id'])); ?>
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
			<li><?php echo $this->Html->link(__('New %s', __('Contract')), array('action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>