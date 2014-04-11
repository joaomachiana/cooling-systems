<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Contracts Equipments'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('contract_equipment_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('contract_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('equipment_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('created');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('modified');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($contractsEquipments as $contractsEquipment): ?>
			<tr>
				<td><?php echo h($contractsEquipment['ContractsEquipment']['contract_equipment_id']); ?>&nbsp;</td>
				<td><?php echo h($contractsEquipment['ContractsEquipment']['contract_id']); ?>&nbsp;</td>
				<td><?php echo h($contractsEquipment['ContractsEquipment']['equipment_id']); ?>&nbsp;</td>
				<td><?php echo h($contractsEquipment['ContractsEquipment']['created']); ?>&nbsp;</td>
				<td><?php echo h($contractsEquipment['ContractsEquipment']['modified']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $contractsEquipment['ContractsEquipment']['contract_equipment_id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contractsEquipment['ContractsEquipment']['contract_equipment_id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contractsEquipment['ContractsEquipment']['contract_equipment_id']), null, __('Are you sure you want to delete # %s?', $contractsEquipment['ContractsEquipment']['contract_equipment_id'])); ?>
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
			<li><?php echo $this->Html->link(__('New %s', __('Contracts Equipment')), array('action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>