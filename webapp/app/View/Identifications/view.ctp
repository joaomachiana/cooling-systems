<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Identification Type');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($identificationType['IdentificationType']['identification_type_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Type'); ?></dt>
			<dd>
				<?php echo h($identificationType['IdentificationType']['type']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Acronym'); ?></dt>
			<dd>
				<?php echo h($identificationType['IdentificationType']['acronym']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Identification Type')), array('action' => 'edit', $identificationType['IdentificationType']['identification_type_id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Identification Type')), array('action' => 'delete', $identificationType['IdentificationType']['identification_type_id']), null, __('Are you sure you want to delete # %s?', $identificationType['IdentificationType']['identification_type_id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Identification Types')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Identification Type')), array('action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

