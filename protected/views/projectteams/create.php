<?php
/* @var $this ProjectteamsController */
/* @var $model Projectteams */

$this->breadcrumbs=array(
	'Projectteams'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Projectteams', 'url'=>array('index')),
	array('label'=>'Manage Projectteams', 'url'=>array('admin')),
);
?>

<h1>Create Projectteams</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>