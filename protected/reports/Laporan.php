<?php
class Laporan extends fpdf{

	function cetakSiswa(){
		
		$this->SetMargins(30,10,30);
		$this->AddPage();
		$this->SetFont('Arial','B',11);
		$this->Cell(285,10,'Data Siswa SMA 1 Bangsri',0,1,'C');
		$this->Cell(10,10,'No',1,0,'C');
		$this->Cell(25,10,'Nis',1,0,'C');
		$this->Cell(50,10,'Nama',1,0,'C');
		$this->Cell(50,10,'Alamat',1,0,'C');
		$this->Cell(50,10,'Tgl Lahir',1,0,'C');
		$this->Cell(50,10,'Agama',1,0,'C');
		$this->Cell(50,10,'Jenis Kelamin',1,1,'C');

		//lazy loading
		$model1=Agama::model()->findAll();
		foreach($model1 as $row){
			$agama[$row->id] = $row->nama; 
		}
		$model2=JenisKelamin::model()->findAll();
		foreach($model2 as $row){
			$jenKel[$row->id] = $row->nama; 
		}

		$model=Siswa::model()->findAll();
		foreach($model as $row){
			$this->Cell(10,10,$row['id'],1,0,'C');
			$this->Cell(25,10,$row['nis'],1,0,'L');
			$this->Cell(50,10,$row['nama'],1,0,'L');
			$this->Cell(50,10,$row['alamat'],1,0,'L');
			$this->Cell(50,10,$row['tgl_lahir'],1,0,'L');
			$this->Cell(50,10,$agama[$row['id_agama']],1,0,'L');
			$this->Cell(50,10,$jenKel[$row['id_jenis_kelamin']],1,1,'L');
		}
		
		//$model3=Siswa::model()->with('idAgama','idJenisKelamin')->findAll();
		//echo "<pre>";
		//print_r($model3);
		//echo "</pre>";
		//Yii::app()->end();
		
		
		//eager loading
		/*
			foreach(Siswa::model()->with('idAgama','idJenisKelamin')->findAll() as $row){
			$this->Cell(10,10,$row['id'],1,0,'C');
			$this->Cell(25,10,$row['nis'],1,0,'L');
			$this->Cell(50,10,$row['nama'],1,0,'L');
			$this->Cell(50,10,$row['alamat'],1,0,'L');
			$this->Cell(50,10,$row['tgl_lahir'],1,0,'L');
			$this->Cell(50,10,$row['idAgama']['nama'],1,0,'L');
			$this->Cell(50,10,$row['idJenisKelamin']['nama'],1,1,'L');
		}*/
		$this->AliasNbPages();
		$this->Output('Data-siswa.pdf','I');
	}
}



