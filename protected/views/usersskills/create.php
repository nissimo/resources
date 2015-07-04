<?php
/* @var $this UsersskillsController */
/* @var $model Usersskills */

$this->breadcrumbs=array(
	'Usersskills'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Usersskills', 'url'=>array('index')),
	array('label'=>'Manage Usersskills', 'url'=>array('admin')),
);
?>

<h1>Create Usersskills</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>