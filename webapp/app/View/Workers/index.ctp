<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Workers'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('worker_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('category_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('personal_info_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('created');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('modified');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($workers as $worker): ?>
			<tr>
				<td><?php echo h($worker['Worker']['worker_id']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($worker['Category']['category_id'], array('controller' => 'categories', 'action' => 'view', $worker['Category']['category_id'])); ?>
				</td>
				<td>
					<?php echo $this->Html->link($worker['PersonalInfo']['personal_info_id'], array('controller' => 'personal_infos', 'action' => 'view', $worker['PersonalInfo']['personal_info_id'])); ?>
				</td>
				<td><?php echo h($worker['Worker']['created']); ?>&nbsp;</td>
				<td><?php echo h($worker['Worker']['modified']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $worker['Worker']['worker_id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $worker['Worker']['worker_id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $worker['Worker']['worker_id']), null, __('Are you sure you want to delete # %s?', $worker['Worker']['worker_id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>

		<?php echo $this->BootstrapPaginator->pagination(); ?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Worker')), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Categories')), array('controller' => 'categories', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Category')), array('controller' => 'categories', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Personal Infos')), array('controller' => 'personal_infos', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Personal Info')), array('controller' => 'personal_infos', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>