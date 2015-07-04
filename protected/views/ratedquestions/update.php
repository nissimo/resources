<?php
/* @var $this RatedquestionsController */
/* @var $model Ratedquestions */

$this->breadcrumbs=array(
	'Ratedquestions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ratedquestions', 'url'=>array('index')),
	array('label'=>'Create Ratedquestions', 'url'=>array('create')),
	array('label'=>'View Ratedquestions', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ratedquestions', 'url'=>array('admin')),
);
?>

<h1>Update Ratedquestions <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>