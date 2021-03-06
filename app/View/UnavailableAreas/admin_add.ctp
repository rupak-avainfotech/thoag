<div class="row">
<div class="col-sm-3">
<div class="offers form">
<?php echo $this->Form->create('Offer', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Offer'); ?></legend>
	<?php
		echo $this->Form->input('res_id',array('options'=>$restaurant_list));
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('image',array('type'=>'file'));
                echo $this->Form->input('price',array('type'=>'number'));
                echo $this->Form->input('quantity',array('type'=>'number'));
                echo $this->Form->input('start_date',array('type'=>'date'));
                echo $this->Form->input('end_date',array('type'=>'date'));
                echo $this->Form->input('catering',array('type'=>'checkbox'));
                echo $this->Form->input('delivery',array('type'=>'checkbox'));
                echo $this->Form->input('pickup',array('type'=>'checkbox'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<div class="col-sm-3">
<div class="actions action_menu">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Offers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Restaurants'), array('controller' => 'restaurants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Restaurant'), array('controller' => 'restaurants', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
</div>

