<?php
/* @var $this SiswaController */
/* @var $model Siswa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'siswa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nis'); ?>
		<?php echo $form->textField($model,'nis',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_lahir'); ?>
		<?php echo $form->textField($model,'tgl_lahir'); ?>
		<?php echo $form->error($model,'tgl_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_agama'); ?>
		<?php //echo $form->textField($model,'id_agama'); ?>
		<?php echo $form->dropDownList($model,'id_agama',CHtml::listData(Agama::model()->findAll(),'id','nama'));?>
		<?php echo $form->error($model,'id_agama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_jenis_kelamin'); ?>
		<?php //echo $form->textField($model,'id_jenis_kelamin'); ?>
		<?php echo $form->dropDownList($model,'id_jenis_kelamin',CHtml::listData(JenisKelamin::model()->findAll(),'id','nama'));?>
		<?php echo $form->error($model,'id_jenis_kelamin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->