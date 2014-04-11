<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Contract', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Edit %s', __('Contract')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('client_id');
				echo $this->BootstrapForm->input('plan_id');
				echo $this->BootstrapForm->input('signature_date');
				echo $this->BootstrapForm->input('duration');
				echo $this->BootstrapForm->input('start_date');
				echo $this->BootstrapForm->input('expiry_date');
				echo $this->BootstrapForm->hidden('contract_id');
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Contract.contract_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Contract.contract_id'))); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Contracts')), array('action' => 'index'));?></li>
		</ul>
		</div>
	</div>
</div>