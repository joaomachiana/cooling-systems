<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Personal Infos'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('personal_info_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('first_name');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('last_name');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('other_name');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('location_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('created');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('modified');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($personalInfos as $personalInfo): ?>
			<tr>
				<td><?php echo h($personalInfo['PersonalInfo']['personal_info_id']); ?>&nbsp;</td>
				<td><?php echo h($personalInfo['PersonalInfo']['first_name']); ?>&nbsp;</td>
				<td><?php echo h($personalInfo['PersonalInfo']['last_name']); ?>&nbsp;</td>
				<td><?php echo h($personalInfo['PersonalInfo']['other_name']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($personalInfo['Location']['location_id'], array('controller' => 'locations', 'action' => 'view', $personalInfo['Location']['location_id'])); ?>
				</td>
				<td><?php echo h($personalInfo['PersonalInfo']['created']); ?>&nbsp;</td>
				<td><?php echo h($personalInfo['PersonalInfo']['modified']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $personalInfo['PersonalInfo']['personal_info_id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $personalInfo['PersonalInfo']['personal_info_id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $personalInfo['PersonalInfo']['personal_info_id']), null, __('Are you sure you want to delete # %s?', $personalInfo['PersonalInfo']['personal_info_id'])); ?>
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
			<li><?php echo $this->Html->link(__('New %s', __('Personal Info')), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Locations')), array('controller' => 'locations', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Location')), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>