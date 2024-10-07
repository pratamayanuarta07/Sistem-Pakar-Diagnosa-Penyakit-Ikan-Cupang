<?php
defined('BASEPATH') or exit('No direct script access allowed');
       //metode utama klasifikasi
       include 'forward.php';
       include 'fuzzy.php';       
class M_dashboard extends CI_Model
{
  
  public function get_gejala_db()
  {
    return $this->db->get('gejala')->result_array();
  }

  public function get_penyakit_db()
  {
    return $this->db->get('penyakit')->result_array();
  }
  public function Forward_C($Input_Gejala, $Gejala)
  {
    $forwd = new forward();
    return $forwd->do($Input_Gejala, $Gejala);
  }
  public function fuzzy($Tingkat_Keparahan, $Input_Nilai)
  {
    $fuzz = new fuzzy();
    return $fuzz->do($Tingkat_Keparahan, $Input_Nilai);
  }
}

