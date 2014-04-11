<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('PersonalInfo', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Add %s', __('Personal Info')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('first_name');
				echo $this->BootstrapForm->input('last_name');
				echo $this->BootstrapForm->input('other_name');
				echo $this->BootstrapForm->input('location_id');
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Personal Infos')), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Locations')), array('controller' => 'locations', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Location')), array('controller' => 'locations', 'action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>