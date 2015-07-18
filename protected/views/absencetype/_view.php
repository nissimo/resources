<?php
/* @var $this AbsencetypeController */
/* @var $data Absencetype */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('absencetype')); ?>:</b>
	<?php echo CHtml::encode($data->absencetype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('absencedescription')); ?>:</b>
	<?php echo CHtml::encode($data->absencedescription); ?>
	<br />


</div>