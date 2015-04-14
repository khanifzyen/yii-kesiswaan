<?php
/* @var $this NilaiController */
/* @var $model Nilai */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nilai_1'); ?>
		<?php echo $form->textField($model,'nilai_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nilai_2'); ?>
		<?php echo $form->textField($model,'nilai_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nilai_3'); ?>
		<?php echo $form->textField($model,'nilai_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nilai_4'); ?>
		<?php echo $form->textField($model,'nilai_4'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->