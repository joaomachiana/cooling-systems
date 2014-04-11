<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Client');?></h2>
		<dl>
			<dt><?php echo __('Client Id'); ?></dt>
			<dd>
				<?php echo h($client['Client']['client_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Client Type'); ?></dt>
			<dd>
				<?php echo h($client['Client']['client_type']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Particular Id'); ?></dt>
			<dd>
				<?php echo h($client['Client']['particular_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Corporate Id'); ?></dt>
			<dd>
				<?php echo h($client['Client']['corporate_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($client['Client']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($client['Client']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Client')), array('action' => 'edit', $client['Client']['client_id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Client')), array('action' => 'delete', $client['Client']['client_id']), null, __('Are you sure you want to delete # %s?', $client['Client']['client_id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Clients')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Client')), array('action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

