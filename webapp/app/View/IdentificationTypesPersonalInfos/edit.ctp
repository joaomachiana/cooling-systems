<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('IdentificationTypesPersonalInfo', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Edit %s', __('Identification Types Personal Info')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('personal_info_id');
				echo $this->BootstrapForm->input('identification_type_id');
				echo $this->BootstrapForm->hidden('id');
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('IdentificationTypesPersonalInfo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('IdentificationTypesPersonalInfo.id'))); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Identification Types Personal Infos')), array('action' => 'index'));?></li>
		</ul>
		</div>
	</div>
</div>