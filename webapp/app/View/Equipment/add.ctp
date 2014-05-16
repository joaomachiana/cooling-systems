<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Equipment', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Add %s', __('Equipment')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('location_id');
				echo $this->BootstrapForm->input('brand');
				echo $this->BootstrapForm->input('model');
				echo $this->BootstrapForm->input('sold');
				echo $this->BootstrapForm->input('reference_number');
				echo $this->BootstrapForm->input('manufacture_date');
				echo $this->BootstrapForm->input('function_type');
				echo $this->BootstrapForm->input('capacity');
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Equipment')), array('action' => 'index'));?></li>
		</ul>
		</div>
	</div>
</div>