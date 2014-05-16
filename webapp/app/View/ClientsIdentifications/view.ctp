<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Clients Identification Type');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($clientsIdentificationType['ClientsIdentificationType']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Client Id'); ?></dt>
			<dd>
				<?php echo h($clientsIdentificationType['ClientsIdentificationType']['client_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Identification Type Id'); ?></dt>
			<dd>
				<?php echo h($clientsIdentificationType['ClientsIdentificationType']['identification_type_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($clientsIdentificationType['ClientsIdentificationType']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($clientsIdentificationType['ClientsIdentificationType']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Clients Identification Type')), array('action' => 'edit', $clientsIdentificationType['ClientsIdentificationType']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Clients Identification Type')), array('action' => 'delete', $clientsIdentificationType['ClientsIdentificationType']['id']), null, __('Are you sure you want to delete # %s?', $clientsIdentificationType['ClientsIdentificationType']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Clients Identification Types')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Clients Identification Type')), array('action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

