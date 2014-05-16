<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Location');?></h2>
		<dl>
			<dt><?php echo __('Location Id'); ?></dt>
			<dd>
				<?php echo h($location['Location']['location_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Country'); ?></dt>
			<dd>
				<?php echo h($location['Location']['country']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Province'); ?></dt>
			<dd>
				<?php echo h($location['Location']['province']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('District'); ?></dt>
			<dd>
				<?php echo h($location['Location']['district']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Municipal District'); ?></dt>
			<dd>
				<?php echo h($location['Location']['municipal_district']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('City'); ?></dt>
			<dd>
				<?php echo h($location['Location']['city']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Address'); ?></dt>
			<dd>
				<?php echo h($location['Location']['address']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Other Information'); ?></dt>
			<dd>
				<?php echo h($location['Location']['other_information']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($location['Location']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($location['Location']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Location')), array('action' => 'edit', $location['Location']['location_id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Location')), array('action' => 'delete', $location['Location']['location_id']), null, __('Are you sure you want to delete # %s?', $location['Location']['location_id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Locations')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Location')), array('action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

