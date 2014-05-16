<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Maintenance');?></h2>
		<dl>
			<dt><?php echo __('Maintenance Id'); ?></dt>
			<dd>
				<?php echo h($maintenance['Maintenance']['maintenance_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Equipment Id'); ?></dt>
			<dd>
				<?php echo h($maintenance['Maintenance']['equipment_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Worker Id'); ?></dt>
			<dd>
				<?php echo h($maintenance['Maintenance']['worker_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Performed Date'); ?></dt>
			<dd>
				<?php echo h($maintenance['Maintenance']['performed_date']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Comment Id'); ?></dt>
			<dd>
				<?php echo h($maintenance['Maintenance']['comment_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Next Maintanance Date'); ?></dt>
			<dd>
				<?php echo h($maintenance['Maintenance']['next_maintanance_date']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($maintenance['Maintenance']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($maintenance['Maintenance']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Maintenance')), array('action' => 'edit', $maintenance['Maintenance']['maintenance_id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Maintenance')), array('action' => 'delete', $maintenance['Maintenance']['maintenance_id']), null, __('Are you sure you want to delete # %s?', $maintenance['Maintenance']['maintenance_id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Maintenances')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Maintenance')), array('action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

