<?php
/* @var $this RatedquestionsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ratedquestions',
);

$this->menu=array(
	array('label'=>'Create Ratedquestions', 'url'=>array('create')),
	array('label'=>'Manage Ratedquestions', 'url'=>array('admin')),
);
?>

<h1>Ratedquestions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
