<?php
/* @var $this SiswaController */
/* @var $model Siswa */

$this->breadcrumbs=array(
	'Siswa'=>array('index'),
	'Tambah',
);

$this->menu=array(
	array('label'=>'Daftar Siswa', 'url'=>array('index')),
	array('label'=>'Kelola Siswa', 'url'=>array('admin')),
);
?>

<h1>Tambah Siswa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>