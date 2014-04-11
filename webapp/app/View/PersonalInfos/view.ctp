<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Personal Info');?></h2>
		<dl>
			<dt><?php echo __('Personal Info Id'); ?></dt>
			<dd>
				<?php echo h($personalInfo['PersonalInfo']['personal_info_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('First Name'); ?></dt>
			<dd>
				<?php echo h($personalInfo['PersonalInfo']['first_name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Last Name'); ?></dt>
			<dd>
				<?php echo h($personalInfo['PersonalInfo']['last_name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Other Name'); ?></dt>
			<dd>
				<?php echo h($personalInfo['PersonalInfo']['other_name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Location'); ?></dt>
			<dd>
				<?php echo $this->Html->link($personalInfo['Location']['location_id'], array('controller' => 'locations', 'action' => 'view', $personalInfo['Location']['location_id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($personalInfo['PersonalInfo']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($personalInfo['PersonalInfo']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Personal Info')), array('action' => 'edit', $personalInfo['PersonalInfo']['personal_info_id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Personal Info')), array('action' => 'delete', $personalInfo['PersonalInfo']['personal_info_id']), null, __('Are you sure you want to delete # %s?', $personalInfo['PersonalInfo']['personal_info_id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Personal Infos')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Personal Info')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Locations')), array('controller' => 'locations', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Location')), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

