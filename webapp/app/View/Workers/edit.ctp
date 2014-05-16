<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Worker', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Edit %s', __('Worker')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('category_id');
				echo $this->BootstrapForm->input('personal_info_id');
				echo $this->BootstrapForm->hidden('worker_id');
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Worker.worker_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Worker.worker_id'))); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Workers')), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Categories')), array('controller' => 'categories', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Category')), array('controller' => 'categories', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Personal Infos')), array('controller' => 'personal_infos', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Personal Info')), array('controller' => 'personal_infos', 'action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>