<?php
/* @var $this AbsencetypeController */
/* @var $model Absencetype */

$this->breadcrumbs=array(
	'Absencetypes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Absencetype', 'url'=>array('index')),
	array('label'=>'Manage Absencetype', 'url'=>array('admin')),
);
?>

<h1>Create Absencetype</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>