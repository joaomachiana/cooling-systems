<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('ClientsIdentificationType', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Add %s', __('Clients Identification Type')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('client_id');
				echo $this->BootstrapForm->input('identification_type_id');
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Clients Identification Types')), array('action' => 'index'));?></li>
		</ul>
		</div>
	</div>
</div>