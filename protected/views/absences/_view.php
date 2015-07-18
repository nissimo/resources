<?php
/* @var $this AbsencesController */
/* @var $data Absences */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_date')); ?>:</b>
	<?php echo CHtml::encode($data->start_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_date')); ?>:</b>
	<?php echo CHtml::encode($data->end_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paid_percentage')); ?>:</b>
	<?php echo CHtml::encode($data->paid_percentage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pm_approved')); ?>:</b>
	<?php echo CHtml::encode($data->pm_approved); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_approved')); ?>:</b>
	<?php echo CHtml::encode($data->admin_approved); ?>
	<br />

	*/ ?>

</div>