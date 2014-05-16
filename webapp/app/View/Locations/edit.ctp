<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Location', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Edit %s', __('Location')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('country');
				echo $this->BootstrapForm->input('province');
				echo $this->BootstrapForm->input('district');
				echo $this->BootstrapForm->input('municipal_district');
				echo $this->BootstrapForm->input('city');
				echo $this->BootstrapForm->input('address');
				echo $this->BootstrapForm->input('other_information');
				echo $this->BootstrapForm->hidden('location_id');
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Location.location_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Location.location_id'))); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Locations')), array('action' => 'index'));?></li>
		</ul>
		</div>
	</div>
</div>