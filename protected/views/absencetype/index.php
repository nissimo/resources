<?php
/* @var $this AbsencetypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Absencetypes',
);

$this->menu=array(
	array('label'=>'Create Absencetype', 'url'=>array('create')),
	array('label'=>'Manage Absencetype', 'url'=>array('admin')),
);
?>

<h1>Absencetypes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
