<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Comments'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('comment_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('description');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('created');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('modified');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($comments as $comment): ?>
			<tr>
				<td><?php echo h($comment['Comment']['comment_id']); ?>&nbsp;</td>
				<td><?php echo h($comment['Comment']['description']); ?>&nbsp;</td>
				<td><?php echo h($comment['Comment']['created']); ?>&nbsp;</td>
				<td><?php echo h($comment['Comment']['modified']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $comment['Comment']['comment_id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $comment['Comment']['comment_id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $comment['Comment']['comment_id']), null, __('Are you sure you want to delete # %s?', $comment['Comment']['comment_id'])); ?>
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
			<li><?php echo $this->Html->link(__('New %s', __('Comment')), array('action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>