<?php
/* @var $this AbsencesController */
/* @var $model Absences */

$this->breadcrumbs=array(
	'Absences'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Absences', 'url'=>array('index')),
	array('label'=>'Manage Absences', 'url'=>array('admin')),
);
?>

<h1>Create Absences</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>