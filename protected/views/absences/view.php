<?php
/* @var $this AbsencesController */
/* @var $model Absences */

$this->breadcrumbs=array(
	'Absences'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Absences', 'url'=>array('index')),
	array('label'=>'Create Absences', 'url'=>array('create')),
	array('label'=>'Update Absences', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Absences', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Absences', 'url'=>array('admin')),
);
?>

<h1>View Absences #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'type',
		'start_date',
		'end_date',
		'paid_percentage',
		'pm_approved',
		'admin_approved',
	),
)); ?>
