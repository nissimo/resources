<?php
/* @var $this ProjectteamsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Projectteams',
);

$this->menu=array(
	array('label'=>'New project team', 'url'=>array('create')),
	array('label'=>'Manage Project Teams', 'url'=>array('admin')),
);
?>

<h1>Project Teams</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
