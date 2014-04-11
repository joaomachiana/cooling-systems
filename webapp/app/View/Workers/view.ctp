<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Worker');?></h2>
		<dl>
			<dt><?php echo __('Worker Id'); ?></dt>
			<dd>
				<?php echo h($worker['Worker']['worker_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Category'); ?></dt>
			<dd>
				<?php echo $this->Html->link($worker['Category']['category_id'], array('controller' => 'categories', 'action' => 'view', $worker['Category']['category_id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Personal Info'); ?></dt>
			<dd>
				<?php echo $this->Html->link($worker['PersonalInfo']['personal_info_id'], array('controller' => 'personal_infos', 'action' => 'view', $worker['PersonalInfo']['personal_info_id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($worker['Worker']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($worker['Worker']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Worker')), array('action' => 'edit', $worker['Worker']['worker_id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Worker')), array('action' => 'delete', $worker['Worker']['worker_id']), null, __('Are you sure you want to delete # %s?', $worker['Worker']['worker_id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Workers')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Worker')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Categories')), array('controller' => 'categories', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Category')), array('controller' => 'categories', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Personal Infos')), array('controller' => 'personal_infos', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Personal Info')), array('controller' => 'personal_infos', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

