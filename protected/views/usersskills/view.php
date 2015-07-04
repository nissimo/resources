<?php
/* @var $this UsersskillsController */
/* @var $model Usersskills */

$this->breadcrumbs=array(
	'Usersskills'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Usersskills', 'url'=>array('index')),
	array('label'=>'Create Usersskills', 'url'=>array('create')),
	array('label'=>'Update Usersskills', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Usersskills', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Usersskills', 'url'=>array('admin')),
);
?>

<h1>View Usersskills #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'skills_id',
		'user_id',
		'level',
	),
)); ?>
