<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Contract');?></h2>
		<dl>
			<dt><?php echo __('Contract Id'); ?></dt>
			<dd>
				<?php echo h($contract['Contract']['contract_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Client Id'); ?></dt>
			<dd>
				<?php echo h($contract['Contract']['client_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Plan Id'); ?></dt>
			<dd>
				<?php echo h($contract['Contract']['plan_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Signature Date'); ?></dt>
			<dd>
				<?php echo h($contract['Contract']['signature_date']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Duration'); ?></dt>
			<dd>
				<?php echo h($contract['Contract']['duration']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Start Date'); ?></dt>
			<dd>
				<?php echo h($contract['Contract']['start_date']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Expiry Date'); ?></dt>
			<dd>
				<?php echo h($contract['Contract']['expiry_date']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($contract['Contract']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($contract['Contract']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Contract')), array('action' => 'edit', $contract['Contract']['contract_id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Contract')), array('action' => 'delete', $contract['Contract']['contract_id']), null, __('Are you sure you want to delete # %s?', $contract['Contract']['contract_id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Contracts')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Contract')), array('action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

