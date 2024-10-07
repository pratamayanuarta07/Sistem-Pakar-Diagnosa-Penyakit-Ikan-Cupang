<?php
session_start();
defined('BASEPATH') or exit('No direct script access allowed');

class C_dashboard extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_dashboard');
  }

  public function index()
  {
    $this->load->view('dashboard/Home');  
  }

  public function diag()
  {
    $data1 = $this->M_dashboard->get_gejala_db();
    $Nama = [];
    for ($i=0; $i < count($data1); $i++) { // perulangan untuk membuat penampung baru untuk data satu,melakukan peruylangan sebanyak data satu
        $Nama[$i] = $data1[$i]['Nama Gejala'];
    }
    $data['Nama'] = $Nama; // agar bisa di lempar di halaman diagnosis
    $this->load->view('dashboard/Diagnosis', $data);  
  }

  public function FC(){
    $data1 = $this->M_dashboard->get_gejala_db();
    $data2 = $this->M_dashboard->get_penyakit_db();
    

        
// menampung data 
        if (isset($_POST['submit'])) {
        $Input_Gejala = [];
        $count = 0;
        //mengambil input dari user
        for ($i=1; $i <= count($data1); $i++) { 
            if (isset($_POST[$i])) {
              $Input_Gejala[$count] = $i;
              $count++;
            }
        }
 //mengambil gejala dari input string ke array
        $Gejala = [];
        
        for ($i=0; $i < count($data2); $i++) { 
          $Gejala[$i] = explode(",", $data2[$i]['Rule Penyakit']);
        }
        // mengmanggil fungsi fc

        $Penyakit= $this->M_dashboard->Forward_C($Input_Gejala, $Gejala);
        $penyakit = $data2[$Penyakit];
        $nm_penyakit = $penyakit['Nama Penyakit'];
        $cr_mengobati = $penyakit['Pengobatan'];
        $data['Nama'] = $Input_Gejala;
        $data['dt_gejala'] = $data1;
        $_SESSION['dt_input'] = $Input_Gejala;
        $_SESSION['penyakit'] = $nm_penyakit;
        $_SESSION['obat'] = $cr_mengobati;  
          //load interpes               
        $this->load->view('dashboard/Tingkat_Keparahan', $data);
        
    }
  }

  public function Fuzzfikasi(){
    $Input_Nilai = $_SESSION['dt_input'];
    $nm_penyakit = $_SESSION['penyakit'];
    $cr_mengobati = $_SESSION['obat'];
    $Tingkat_Keparahan = [];
    $rendah = [];
    $sedang = [];
    $tinggi = [];
    if (isset($_POST['submit'])) {
          for ($i=0; $i < count($_SESSION['dt_input']); $i++) { 
          if ($Input_Nilai[$i] != 10 && $Input_Nilai[$i] != 13) {
            $Tingkat_Keparahan[$i][0] = $_POST[$Input_Nilai[$i]];
            $Tingkat_Keparahan[$i][1] = $Input_Nilai[$i];
          }
          else{
            $Tingkat_Keparahan[$i][0] = 666;
            $Tingkat_Keparahan[$i][1] = $Input_Nilai[$i];
          }     
               
          }
      }
  $hasil_diag = $this->M_dashboard->fuzzy($Tingkat_Keparahan, $Input_Nilai);
  $data['nama_penyakit'] = $nm_penyakit;
  $data['tingkat_keparahan'] = $hasil_diag;
  $data['cara_mengobati'] = $cr_mengobati;
  $this->load->view('dashboard/Home_test', $data);
}



}