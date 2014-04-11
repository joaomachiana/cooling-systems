<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Plan');?></h2>
		<dl>
			<dt><?php echo __('Plan Id'); ?></dt>
			<dd>
				<?php echo h($plan['Plan']['plan_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Name'); ?></dt>
			<dd>
				<?php echo h($plan['Plan']['name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Description'); ?></dt>
			<dd>
				<?php echo h($plan['Plan']['description']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($plan['Plan']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($plan['Plan']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Plan')), array('action' => 'edit', $plan['Plan']['plan_id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Plan')), array('action' => 'delete', $plan['Plan']['plan_id']), null, __('Are you sure you want to delete # %s?', $plan['Plan']['plan_id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Plans')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Plan')), array('action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

