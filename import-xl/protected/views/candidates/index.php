<?php
/* @var $this CandidatesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Candidates',
);
?>

<h1>Candidates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
