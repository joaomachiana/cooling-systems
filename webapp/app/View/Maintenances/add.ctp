<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Maintenance', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Add %s', __('Maintenance')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('equipment_id');
				echo $this->BootstrapForm->input('worker_id');
				echo $this->BootstrapForm->input('performed_date');
				echo $this->BootstrapForm->input('comment_id');
				echo $this->BootstrapForm->input('next_maintanance_date');
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Maintenances')), array('action' => 'index'));?></li>
		</ul>
		</div>
	</div>
</div>