<?php
/* @var $this CandidatesController */
/* @var $model Candidates */

$this->breadcrumbs=array(
	'Candidates'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Candidates', 'url'=>array('index')),
	array('label'=>'Update Candidates', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Soft Delete Candidates', 'url'=>'#', 'linkOptions'=>array('submit'=>array('softDelete','id'=>$model->id),'confirm'=>'Are you sure you want to soft-delete this item?')),
	array('label'=>'Delete Candidates', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Candidates #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'full_name',
		'email',
		'contact_details',
		'gender',
		'address',
		'city',
	),
)); ?>
