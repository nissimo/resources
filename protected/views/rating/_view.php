<?php
/* @var $this RatingController */
/* @var $data Rating */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('average_rate')); ?>:</b>
	<?php echo CHtml::encode($data->average_rate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rater_id')); ?>:</b>
	<?php echo CHtml::encode($data->rater_id); ?>
	<br />


</div>