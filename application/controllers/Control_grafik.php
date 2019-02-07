<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Control_grafik extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();		
			$this->load->model('model_grafik');
		}

		public function index(){
			foreach($this->model_grafik->jalan_rusak()->result_array() as $row){
				$data['grafik'][]=(float)$row['count(baik)'];
				$data['grafik'][]=(float)$row['count(sedang)'];
				$data['grafik'][]=(float)$row['count(rusak)'];
				$data['grafik'][]=(float)$row['count(rusakberat)'];
			}
			$this->load->view('view_grafik', $data); 
		}
	}
?>