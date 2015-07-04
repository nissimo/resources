<?php
/* @var $this UsersskillsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Usersskills',
);

$this->menu=array(
	array('label'=>'Create Usersskills', 'url'=>array('create')),
	array('label'=>'Manage Usersskills', 'url'=>array('admin')),
);
?>

<h1>Usersskills</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
