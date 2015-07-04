<?php
/* @var $this RatedquestionsController */
/* @var $model Ratedquestions */

$this->breadcrumbs=array(
	'Ratedquestions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ratedquestions', 'url'=>array('index')),
	array('label'=>'Manage Ratedquestions', 'url'=>array('admin')),
);
?>

<h1>Create Ratedquestions</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>