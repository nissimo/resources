<?php
/* @var $this AbsencesController */
/* @var $model Absences */

$this->breadcrumbs=array(
	'Absences'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Absences', 'url'=>array('index')),
	array('label'=>'Create Absences', 'url'=>array('create')),
	array('label'=>'View Absences', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Absences', 'url'=>array('admin')),
);
?>

<h1>Update Absences <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>