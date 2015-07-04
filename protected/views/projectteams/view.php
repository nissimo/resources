<?php
/* @var $this ProjectteamsController */
/* @var $model Projectteams */

$this->breadcrumbs=array(
	'Projectteams'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Projectteams', 'url'=>array('index')),
	array('label'=>'Create Projectteams', 'url'=>array('create')),
	array('label'=>'Update Projectteams', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Projectteams', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Projectteams', 'url'=>array('admin')),
);
?>

<h1>View Projectteams #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'project_id',
		'percentage',
		'startdate',
		'enddate',
		'skills_id',
		'user_id',
		'price_to_client',
	),
)); ?>
