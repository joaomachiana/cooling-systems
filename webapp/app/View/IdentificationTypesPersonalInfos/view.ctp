<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Identification Types Personal Info');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($identificationTypesPersonalInfo['IdentificationTypesPersonalInfo']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Personal Info Id'); ?></dt>
			<dd>
				<?php echo h($identificationTypesPersonalInfo['IdentificationTypesPersonalInfo']['personal_info_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Identification Type Id'); ?></dt>
			<dd>
				<?php echo h($identificationTypesPersonalInfo['IdentificationTypesPersonalInfo']['identification_type_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($identificationTypesPersonalInfo['IdentificationTypesPersonalInfo']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($identificationTypesPersonalInfo['IdentificationTypesPersonalInfo']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Identification Types Personal Info')), array('action' => 'edit', $identificationTypesPersonalInfo['IdentificationTypesPersonalInfo']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Identification Types Personal Info')), array('action' => 'delete', $identificationTypesPersonalInfo['IdentificationTypesPersonalInfo']['id']), null, __('Are you sure you want to delete # %s?', $identificationTypesPersonalInfo['IdentificationTypesPersonalInfo']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Identification Types Personal Infos')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Identification Types Personal Info')), array('action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

