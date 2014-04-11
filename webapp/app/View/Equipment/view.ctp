<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Equipment');?></h2>
		<dl>
			<dt><?php echo __('Equipment Id'); ?></dt>
			<dd>
				<?php echo h($equipment['Equipment']['equipment_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Location Id'); ?></dt>
			<dd>
				<?php echo h($equipment['Equipment']['location_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Brand'); ?></dt>
			<dd>
				<?php echo h($equipment['Equipment']['brand']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Model'); ?></dt>
			<dd>
				<?php echo h($equipment['Equipment']['model']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Sold'); ?></dt>
			<dd>
				<?php echo h($equipment['Equipment']['sold']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Reference Number'); ?></dt>
			<dd>
				<?php echo h($equipment['Equipment']['reference_number']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Manufacture Date'); ?></dt>
			<dd>
				<?php echo h($equipment['Equipment']['manufacture_date']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Function Type'); ?></dt>
			<dd>
				<?php echo h($equipment['Equipment']['function_type']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Capacity'); ?></dt>
			<dd>
				<?php echo h($equipment['Equipment']['capacity']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($equipment['Equipment']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($equipment['Equipment']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Equipment')), array('action' => 'edit', $equipment['Equipment']['equipment_id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Equipment')), array('action' => 'delete', $equipment['Equipment']['equipment_id']), null, __('Are you sure you want to delete # %s?', $equipment['Equipment']['equipment_id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Equipment')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Equipment')), array('action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

