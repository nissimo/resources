<?php
/* @var $this ProjectteamsController */
/* @var $model Projectteams */

$this->breadcrumbs=array(
	'Projectteams'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Projectteams', 'url'=>array('index')),
	array('label'=>'Create Projectteams', 'url'=>array('create')),
	array('label'=>'View Projectteams', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Projectteams', 'url'=>array('admin')),
);
?>

<h1>Update Projectteams <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>