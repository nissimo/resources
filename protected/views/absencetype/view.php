<?php
/* @var $this AbsencetypeController */
/* @var $model Absencetype */

$this->breadcrumbs=array(
	'Absencetypes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Absencetype', 'url'=>array('index')),
	array('label'=>'Create Absencetype', 'url'=>array('create')),
	array('label'=>'Update Absencetype', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Absencetype', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Absencetype', 'url'=>array('admin')),
);
?>

<h1>View Absencetype #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'absencetype',
		'absencedescription',
	),
)); ?>
