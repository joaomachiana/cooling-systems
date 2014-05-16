<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Maintenance', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Edit %s', __('Maintenance')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('equipment_id');
				echo $this->BootstrapForm->input('worker_id');
				echo $this->BootstrapForm->input('performed_date');
				echo $this->BootstrapForm->input('comment_id');
				echo $this->BootstrapForm->input('next_maintanance_date');
				echo $this->BootstrapForm->hidden('maintenance_id');
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Maintenance.maintenance_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Maintenance.maintenance_id'))); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Maintenances')), array('action' => 'index'));?></li>
		</ul>
		</div>
	</div>
</div>