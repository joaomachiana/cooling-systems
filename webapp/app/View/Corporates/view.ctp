<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Corporate');?></h2>
		<dl>
			<dt><?php echo __('Corporate Id'); ?></dt>
			<dd>
				<?php echo h($corporate['Corporate']['corporate_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Name'); ?></dt>
			<dd>
				<?php echo h($corporate['Corporate']['name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Other Information'); ?></dt>
			<dd>
				<?php echo h($corporate['Corporate']['other_information']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($corporate['Corporate']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($corporate['Corporate']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Corporate')), array('action' => 'edit', $corporate['Corporate']['corporate_id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Corporate')), array('action' => 'delete', $corporate['Corporate']['corporate_id']), null, __('Are you sure you want to delete # %s?', $corporate['Corporate']['corporate_id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Corporates')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Corporate')), array('action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

