<?php
	class Model_grafik extends CI_Model{
		function jalan_rusak(){
			$sql= $this->db->query("
				SELECT count(baik), count(sedang), count(rusak), count(rusakberat) FROM jln_jalannilai");
			return $sql;
		}
	}
?>