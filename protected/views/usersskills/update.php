<?php
/* @var $this UsersskillsController */
/* @var $model Usersskills */

$this->breadcrumbs=array(
	'Usersskills'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Usersskills', 'url'=>array('index')),
	array('label'=>'Create Usersskills', 'url'=>array('create')),
	array('label'=>'View Usersskills', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Usersskills', 'url'=>array('admin')),
);
?>

<h1>Update Usersskills <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>