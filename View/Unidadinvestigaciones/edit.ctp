<div class="unidadinvestigaciones form">
<?php echo $this->Form->create('Unidadinvestigacione'); ?>
	<fieldset>
		<legend><?php echo __('Edit Unidadinvestigacione'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('instituto_id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Unidadinvestigacione.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Unidadinvestigacione.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Unidadinvestigaciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Institutos'), array('controller' => 'institutos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instituto'), array('controller' => 'institutos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Autores'), array('controller' => 'autores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Autore'), array('controller' => 'autores', 'action' => 'add')); ?> </li>
	</ul>
</div>
