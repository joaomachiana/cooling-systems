<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Particular');?></h2>
		<dl>
			<dt><?php echo __('Particular Id'); ?></dt>
			<dd>
				<?php echo h($particular['Particular']['particular_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Personal Info Id'); ?></dt>
			<dd>
				<?php echo h($particular['Particular']['personal_info_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($particular['Particular']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($particular['Particular']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Particular')), array('action' => 'edit', $particular['Particular']['particular_id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Particular')), array('action' => 'delete', $particular['Particular']['particular_id']), null, __('Are you sure you want to delete # %s?', $particular['Particular']['particular_id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Particulars')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Particular')), array('action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

