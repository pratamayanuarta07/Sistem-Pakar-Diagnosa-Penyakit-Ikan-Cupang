<?php
class forward{
    public function __construct()
  {
  }
  function do($Input_Gejala, $Gejala){
    $Probabilitas = [];
    //menghitung jumlah gejala pada setiap penyakit
        for ($i=0; $i < count($Gejala); $i++) {
          $sum = 0;
          for ($j=0; $j < count($Input_Gejala); $j++) { 
              if (in_array($Input_Gejala[$j], $Gejala[$i])) {
                $sum++;
              }
          }
          // perhitungan berdasarkan gejala yang cocok
          $Probabilitas[$i] = number_format(($sum/count($Gejala[$i]))*100, 2);
        }
        
        // Temukan indeks penyakit dengan probabilitas tertinggi
        $Penyakit = 0;
        $max = $Probabilitas[0];
        for ($i = 1; $i < count($Probabilitas); $i++) {
            if ($max < $Probabilitas[$i]) {
                $max = $Probabilitas[$i];
                $Penyakit = $i;
            }
        }

        
        return $Penyakit;
  }
}


?>