<?php
/* @var $this AbsencesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Absences',
);

$this->menu=array(
	array('label'=>'Create Absences', 'url'=>array('create')),
	array('label'=>'Manage Absences', 'url'=>array('admin')),
);
?>

<h1>Absences</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
