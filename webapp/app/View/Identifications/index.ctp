<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Identification Types'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('identification_type_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('type');?></th>
                <th><?php echo $this->BootstrapPaginator->sort('acronym');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($identificationTypes as $identificationType): ?>
			<tr>
				<td><?php echo h($identificationType['IdentificationType']['identification_type_id']); ?>&nbsp;</td>
				<td><?php echo h($identificationType['IdentificationType']['type']); ?>&nbsp;</td>
				<td><?php echo h($identificationType['IdentificationType']['acronym']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $identificationType['IdentificationType']['identification_type_id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $identificationType['IdentificationType']['identification_type_id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $identificationType['IdentificationType']['identification_type_id']), null, __('Are you sure you want to delete # %s?', $identificationType['IdentificationType']['identification_type_id'])); ?>
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
			<li><?php echo $this->Html->link(__('New %s', __('Identification Type')), array('action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>