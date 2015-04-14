<?php
/* @var $this SiswaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Siswa',
);

$this->menu=array(
	array('label'=>'Tambah Siswa', 'url'=>array('create')),
	array('label'=>'Kelola Siswa', 'url'=>array('admin')),
	array('label'=>'Cetak Siswa Pdf', 'url'=>array('cetakSiswa')),
);
?>

<h1>Siswa</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
