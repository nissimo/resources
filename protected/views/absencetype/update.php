<?php
/* @var $this AbsencetypeController */
/* @var $model Absencetype */

$this->breadcrumbs=array(
	'Absencetypes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Absencetype', 'url'=>array('index')),
	array('label'=>'Create Absencetype', 'url'=>array('create')),
	array('label'=>'View Absencetype', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Absencetype', 'url'=>array('admin')),
);
?>

<h1>Update Absencetype <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>