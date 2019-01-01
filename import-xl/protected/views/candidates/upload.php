<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Upload';
$this->breadcrumbs=array(
	'Upload',
);
?>

<h1>Import</h1>

<p>Please attach xls file to import candidate:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'upload-form',
	'enableClientValidation'=>true,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'file'); ?>
		<?php echo $form->fileField($model,'file',array('required' => true)); ?>
		<?php echo $form->error($model,'file'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Upload'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
