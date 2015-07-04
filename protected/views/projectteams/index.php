<?php
/* @var $this ProjectteamsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Projectteams',
);

$this->menu=array(
	array('label'=>'Create Projectteams', 'url'=>array('create')),
	array('label'=>'Manage Projectteams', 'url'=>array('admin')),
);
?>

<h1>Projectteams</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
