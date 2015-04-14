<?php
/* @var $this SiswaController */
/* @var $data Siswa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nis')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nis), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_agama')); ?>:</b>
	<?php echo CHtml::encode($data->idAgama->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_jenis_kelamin')); ?>:</b>
	<?php echo CHtml::encode($data->idJenisKelamin->nama); ?>
	<br />


</div>