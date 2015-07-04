<?php
/* @var $this RatedquestionsController */
/* @var $model Ratedquestions */

$this->breadcrumbs=array(
	'Ratedquestions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Ratedquestions', 'url'=>array('index')),
	array('label'=>'Create Ratedquestions', 'url'=>array('create')),
	array('label'=>'Update Ratedquestions', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Ratedquestions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ratedquestions', 'url'=>array('admin')),
);
?>

<h1>View Ratedquestions #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'rating_id',
		'questions_id',
		'rate',
	),
)); ?>
