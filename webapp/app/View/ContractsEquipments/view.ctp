<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Contracts Equipment');?></h2>
		<dl>
			<dt><?php echo __('Contract Equipment Id'); ?></dt>
			<dd>
				<?php echo h($contractsEquipment['ContractsEquipment']['contract_equipment_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Contract Id'); ?></dt>
			<dd>
				<?php echo h($contractsEquipment['ContractsEquipment']['contract_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Equipment Id'); ?></dt>
			<dd>
				<?php echo h($contractsEquipment['ContractsEquipment']['equipment_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($contractsEquipment['ContractsEquipment']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($contractsEquipment['ContractsEquipment']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Contracts Equipment')), array('action' => 'edit', $contractsEquipment['ContractsEquipment']['contract_equipment_id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Contracts Equipment')), array('action' => 'delete', $contractsEquipment['ContractsEquipment']['contract_equipment_id']), null, __('Are you sure you want to delete # %s?', $contractsEquipment['ContractsEquipment']['contract_equipment_id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Contracts Equipments')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Contracts Equipment')), array('action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

