<?php
/* @var $this SiswaController */
/* @var $model Siswa */

$this->breadcrumbs=array(
	'Siswa'=>array('index'),
	'Kelola',
);

$this->menu=array(
	array('label'=>'Daftar Siswa', 'url'=>array('index')),
	array('label'=>'Tambah Siswa', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#siswa-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Kelola Siswa</h1>
<?
//$contoh=CHtml::listData(JenisKelamin::model()->findAll(),'id','nama');
//echo "<pre>";
//print_r($contoh);
//echo "</pre>";
//Yii::app()->end();
?>

<?php $dataProvider=$model->search();
$data=$dataProvider->getData();?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'siswa-grid',
	'dataProvider'=>$dataProvider,
	'filter'=>$model,
	'columns'=>array(
		//'id',
		array(
      		'header'=>'#',
        	'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
        ),
		'nis',
		'nama',
		'alamat',
		'tgl_lahir',
		//'id_agama',
		//'id_jenis_kelamin'
		array(
			'name'=>'id_agama',
			'type'=>'raw',
			'value'=>'$data->idAgama->nama',
			'filter'=>CHtml::listData(Agama::model()->findAll(),'id','nama'),
			),
		array(
			'name'=>'id_jenis_kelamin',
			'type'=>'raw',
			'value'=>'$data->idJenisKelamin->nama',
			'filter'=>CHtml::listData(JenisKelamin::model()->findAll(),'id','nama'),
			),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
