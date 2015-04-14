<?php
/* @var $this NilaiController */
/* @var $data Nilai */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_1')); ?>:</b>
	<?php echo CHtml::encode($data->nilai_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_2')); ?>:</b>
	<?php echo CHtml::encode($data->nilai_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_3')); ?>:</b>
	<?php echo CHtml::encode($data->nilai_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_4')); ?>:</b>
	<?php echo CHtml::encode($data->nilai_4); ?>
	<br />


</div>