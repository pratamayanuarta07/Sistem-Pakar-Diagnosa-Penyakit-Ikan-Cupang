<?php
class fuzzy{
    public function __construct()
  {
  }

  function do($Tingkat_Keparahan, $Input_Nilai){
    $dt_input = $Input_Nilai;
    for ($i=0; $i < count($Tingkat_Keparahan); $i++) { 
        if ($Tingkat_Keparahan[$i][1] == 1 || $Tingkat_Keparahan[$i][1] == 7 || $Tingkat_Keparahan[$i][1] == 8 || $Tingkat_Keparahan[$i][1] == 9 || $Tingkat_Keparahan[$i][1] == 12) {
            if ($Tingkat_Keparahan[$i][0] <= 10) {
              $rendah[$Tingkat_Keparahan[$i][1]][0] = 1;
              $rendah[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
            }
            elseif ($Tingkat_Keparahan[$i][0] > 10 && $Tingkat_Keparahan[$i][0] <55){
              $rendah[$Tingkat_Keparahan[$i][1]][0] = (55-$Tingkat_Keparahan[$i][0])/(55-10);
              $rendah[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
            }
            else {
              $rendah[$Tingkat_Keparahan[$i][1]][0] = 0;
              $rendah[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
            }
        }

        elseif ($Tingkat_Keparahan[$i][1] == 2 || $Tingkat_Keparahan[$i][1] == 3 || $Tingkat_Keparahan[$i][1] == 4 || $Tingkat_Keparahan[$i][1] == 5 || $Tingkat_Keparahan[$i][1] == 6){
          if ($Tingkat_Keparahan[$i][0] <= 10) {
            $rendah[$Tingkat_Keparahan[$i][1]][0] = 1;
            $rendah[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
          }
          elseif ($Tingkat_Keparahan[$i][0] > 10 && $Tingkat_Keparahan[$i][0] <45){
            $rendah[$Tingkat_Keparahan[$i][1]][0] = (45-$Tingkat_Keparahan[$i][0])/(45-10);
            $rendah[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
          }
          else {
            $rendah[$Tingkat_Keparahan[$i][1]][0] = 0;
            $rendah[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
          }
        }

        elseif ($Tingkat_Keparahan[$i][1] == 14 || $Tingkat_Keparahan[$i][1] == 17){
          if ($Tingkat_Keparahan[$i][0] <= 1) {
            $rendah[$Tingkat_Keparahan[$i][1]][0] = 1;
            $rendah[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
          }
          elseif ($Tingkat_Keparahan[$i][0] > 1 && $Tingkat_Keparahan[$i][0] <3){
            $rendah[$Tingkat_Keparahan[$i][1]][0] = (3-$Tingkat_Keparahan[$i][0])/(3-1);
            $rendah[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
          }
          else {
            $rendah[$Tingkat_Keparahan[$i][1]][0] = 0;
            $rendah[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
          }
        }

        elseif ($Tingkat_Keparahan[$i][1] == 15 || $Tingkat_Keparahan[$i][1] ==16){
          if ($Tingkat_Keparahan[$i][0] <= 3) {
            $rendah[$Tingkat_Keparahan[$i][1]][0] = 1;
            $rendah[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
          }
          elseif ($Tingkat_Keparahan[$i][0] > 3 && $Tingkat_Keparahan[$i][0] <24){
            $rendah[$Tingkat_Keparahan[$i][1]][0] = (24-$Tingkat_Keparahan[$i][0])/(24-3);
            $rendah[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
          }
          else {
            $rendah[$Tingkat_Keparahan[$i][1]][0] = 0;
            $rendah[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
          }
        }
        elseif ($Tingkat_Keparahan[$i][1] == 11){
            $rendah[$Tingkat_Keparahan[$i][1]][0] = 0;
            $rendah[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
        }
        elseif ($Tingkat_Keparahan[$i][1] == 10 || $Tingkat_Keparahan[$i][1] == 13){
            $rendah[$Tingkat_Keparahan[$i][1]][0] = 0;
            $rendah[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
      
      }
    }

    

        for ($i=0; $i < count($Tingkat_Keparahan); $i++) { 
          if ($Tingkat_Keparahan[$i][1] == 1 || $Tingkat_Keparahan[$i][1] == 7 || $Tingkat_Keparahan[$i][1] == 8 || $Tingkat_Keparahan[$i][1] == 9 || $Tingkat_Keparahan[$i][1] == 12) {
              if ($Tingkat_Keparahan[$i][0] <= 20 || $Tingkat_Keparahan[$i][0] >= 90) {
                $sedang[$Tingkat_Keparahan[$i][1]][0] = 0;
                $sedang[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
              }
              elseif ($Tingkat_Keparahan[$i][0] >= 20 && $Tingkat_Keparahan[$i][0] <= 55){
                $sedang[$Tingkat_Keparahan[$i][1]][0] = ($Tingkat_Keparahan[$i][0]-20)/(55-20);
                $sedang[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
              }
              else {
                $sedang[$Tingkat_Keparahan[$i][1]][0] = (90-$Tingkat_Keparahan[$i][0])/(90-55);
                $sedang[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
              }
          }
  
  
          elseif ($Tingkat_Keparahan[$i][1] == 2 || $Tingkat_Keparahan[$i][1] == 3 || $Tingkat_Keparahan[$i][1] == 4 || $Tingkat_Keparahan[$i][1] == 5 || $Tingkat_Keparahan[$i][1] == 6){
            if ($Tingkat_Keparahan[$i][0] <= 20 || $Tingkat_Keparahan[$i][0] >= 70) {
              $sedang[$Tingkat_Keparahan[$i][1]][0] = 0;
              $sedang[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
            }
            elseif ($Tingkat_Keparahan[$i][0] >= 20 && $Tingkat_Keparahan[$i][0] <= 45){
              $sedang[$Tingkat_Keparahan[$i][1]][0] = ($Tingkat_Keparahan[$i][0]-20)/(45-20);
              $sedang[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
            }
            else {
              $sedang[$Tingkat_Keparahan[$i][1]][0] = (70-$Tingkat_Keparahan[$i][0])/(70-45);
              $sedang[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
            }
          }
  
          elseif ($Tingkat_Keparahan[$i][1] == 14 || $Tingkat_Keparahan[$i][1] == 17){
            if ($Tingkat_Keparahan[$i][0] <= 2 || $Tingkat_Keparahan[$i][0] >= 5) {
              $sedang[$Tingkat_Keparahan[$i][1]][0] = 0;
              $sedang[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
            }
            elseif ($Tingkat_Keparahan[$i][0] >= 2 && $Tingkat_Keparahan[$i][0] <= 3){
              $sedang[$Tingkat_Keparahan[$i][1]][0] = ($Tingkat_Keparahan[$i][0]-2)/(3-2);
              $sedang[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
            }
            else {
              $sedang[$Tingkat_Keparahan[$i][1]][0] = (5-$Tingkat_Keparahan[$i][0])/(5-3);
              $sedang[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
            }
          }
  
          elseif ($Tingkat_Keparahan[$i][1] == 15 || $Tingkat_Keparahan[$i][1] == 16 ){
            if ($Tingkat_Keparahan[$i][0] <= 9 || $Tingkat_Keparahan[$i][0] >= 42) {
              $sedang[$Tingkat_Keparahan[$i][1]][0] = 0;
              $sedang[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
            }
            elseif ($Tingkat_Keparahan[$i][0] >= 9 && $Tingkat_Keparahan[$i][0] <= 24){
              $sedang[$Tingkat_Keparahan[$i][1]][0] = ($Tingkat_Keparahan[$i][0]-9)/(24-9);
              $sedang[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
            }
            else {
              $sedang[$Tingkat_Keparahan[$i][1]][0] = (42-$Tingkat_Keparahan[$i][0])/(42-24);
              $sedang[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
            }
          }

          elseif ($Tingkat_Keparahan[$i][1] == 10 || $Tingkat_Keparahan[$i][1] == 13){
              $sedang[$Tingkat_Keparahan[$i][1]][0] = 0;
              $sedang[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
          }
  
          elseif ($Tingkat_Keparahan[$i][1] == 11){
            if ($Tingkat_Keparahan[$i][0] == 1) {
              $sedang[$Tingkat_Keparahan[$i][1]][0] = 0.5;
              $sedang[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
            }
            elseif ($Tingkat_Keparahan[$i][0] == 2 ){
              $sedang[$Tingkat_Keparahan[$i][1]][0] = 0;
              $sedang[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
            }
            
            
          }
      }
    
      for ($i=0; $i < count($Tingkat_Keparahan); $i++) { 
        if ($Tingkat_Keparahan[$i][1] == 1 || $Tingkat_Keparahan[$i][1] == 7 || $Tingkat_Keparahan[$i][1] == 8 || $Tingkat_Keparahan[$i][1] == 9 || $Tingkat_Keparahan[$i][1] == 12) {
            if ($Tingkat_Keparahan[$i][0] <= 55) {
              $tinggi[$Tingkat_Keparahan[$i][1]][0] = 0;
              $tinggi[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
            }
            elseif ($Tingkat_Keparahan[$i][0] >= 55 && $Tingkat_Keparahan[$i][0] <= 100){
              $tinggi[$Tingkat_Keparahan[$i][1]][0] = ($Tingkat_Keparahan[$i][0]-55)/(100-55);
              $tinggi[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
            }
            else {
              $tinggi[$Tingkat_Keparahan[$i][1]][0] = 1;
              $tinggi[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
            }
        }


        elseif ($Tingkat_Keparahan[$i][1] == 2 || $Tingkat_Keparahan[$i][1] == 3 || $Tingkat_Keparahan[$i][1] == 4 || $Tingkat_Keparahan[$i][1] == 5 || $Tingkat_Keparahan[$i][1] == 6){
          if ($Tingkat_Keparahan[$i][0] <= 45) {
            $tinggi[$Tingkat_Keparahan[$i][1]][0] = 0;
            $tinggi[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
          }
          elseif ($Tingkat_Keparahan[$i][0] >= 45 && $Tingkat_Keparahan[$i][0] <= 80){
            $tinggi[$Tingkat_Keparahan[$i][1]][0] = ($Tingkat_Keparahan[$i][0]-45)/(80-45);
            $tinggi[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
          }
          else {
            $tinggi[$Tingkat_Keparahan[$i][1]][0] = 1;
            $tinggi[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
          }
        }

        elseif ($Tingkat_Keparahan[$i][1] == 14 || $Tingkat_Keparahan[$i][1] == 17){
          if ($Tingkat_Keparahan[$i][0] <= 3) {
            $tinggi[$Tingkat_Keparahan[$i][1]][0] = 0;
            $tinggi[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
          }
          elseif ($Tingkat_Keparahan[$i][0] >= 3 && $Tingkat_Keparahan[$i][0] <= 6){
            $tinggi[$Tingkat_Keparahan[$i][1]][0] = ($Tingkat_Keparahan[$i][0]-3)/(6-3);
            $tinggi[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
          }
          else {
            $tinggi[$Tingkat_Keparahan[$i][1]][0] = 1;
            $tinggi[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
          }
        }

        elseif ($Tingkat_Keparahan[$i][1] == 15 || $Tingkat_Keparahan[$i][1] == 16 ){
          if ($Tingkat_Keparahan[$i][0] <= 24) {
            $tinggi[$Tingkat_Keparahan[$i][1]][0] = 0;
            $tinggi[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
          }
          elseif ($Tingkat_Keparahan[$i][0] >= 24 && $Tingkat_Keparahan[$i][0] <= 48){
            $tinggi[$Tingkat_Keparahan[$i][1]][0] = ($Tingkat_Keparahan[$i][0]-24)/(48-24);
            $tinggi[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
          }
          else {
            $tinggi[$Tingkat_Keparahan[$i][1]][0] = 1;
            $tinggi[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
          }
        }

        elseif ($Tingkat_Keparahan[$i][1] == 10 || $Tingkat_Keparahan[$i][1] == 13){
            $tinggi[$Tingkat_Keparahan[$i][1]][0] = 1;
            $tinggi[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
        }

        elseif ($Tingkat_Keparahan[$i][1] == 11){
          if ($Tingkat_Keparahan[$i][0] == 1) {
            $tinggi[$Tingkat_Keparahan[$i][1]][0] = 0;
            $tinggi[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
          }
          elseif ($Tingkat_Keparahan[$i][0] == 2){
            $tinggi[$Tingkat_Keparahan[$i][1]][0] = 1;
            $tinggi[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
          }
          else {
            $tinggi[$Tingkat_Keparahan[$i][1]][0] = 1;
            $tinggi[$Tingkat_Keparahan[$i][1]][1] = $Tingkat_Keparahan[$i][1];
          }
        }
      }
  
//mengurutkan tingkat keparahan
  $fuzzy_input = [];
  for ($j=0; $j < 3; $j++) { 
    for ($i=0; $i < count($Input_Nilai); $i++) { 
      if ($j == 0) {
        $fuzzy_input[$Input_Nilai[$i]][$j] = $rendah[$Input_Nilai[$i]][0];
      }
      elseif ($j==1) {
        $fuzzy_input[$Input_Nilai[$i]][$j] = $sedang[$Input_Nilai[$i]][0];  
      }
      else{
        $fuzzy_input[$Input_Nilai[$i]][$j] = $tinggi[$Input_Nilai[$i]][0];
      }
}
  }
  $inputData = $dt_input;
   $fuzzyOutput = [];
   if (count($dt_input) == 1) {
    $hasil_out = [];
    
    for ($i=0; $i < 3; $i++) { 
      if ($i == 0) {
        $hasil_out[$i] = $fuzzy_input[$dt_input[0]][$i] * 50;
      }
      elseif ($i == 1) {
        $hasil_out[$i] = $fuzzy_input[$dt_input[0]][$i]*70;
      } 
      else{
        $hasil_out[$i] = $fuzzy_input[$dt_input[0]][$i]*100;
      }
    }
    $min = 0;
    for ($i=0; $i < 3; $i++) { 
      $min+=$fuzzy_input[$dt_input[0]][$i];
    }

    $min_fuzzy = 0;
    for ($i=0; $i < 3; $i++) { 
      $min_fuzzy+= $hasil_out[$i];
    }
    $hasil_output = $min_fuzzy/$min;
    return $hasil_output;

   }
   else{  
   $hasil_out = $this->Rule($fuzzy_input, 0, count($fuzzy_input), $fuzzyOutput, 0, 0, 0, $inputData);
   $fuzzyOutput = 0;
   $output = [];
   $output_index = 0;
   for ($i=0; $i < count($hasil_out); $i++) { 
    if ($output_index == 0) {
      $output[$i] = 50;
      $output_index++;  
    }
    elseif ($output_index== 1) {
      $output[$i] = 70;
      $output_index++;
    }
    else{
      $output[$i] = 100;
      $output_index = 0;
    } 
   }
  $min_fuzzy = 0;
  for ($i=0; $i < count($hasil_out); $i++) { 
    $min_fuzzy += min($hasil_out[$i]) * $output[$i];
  }

  $min = 0;
  for ($i=0; $i < count($hasil_out); $i++) { 
    $min += min($hasil_out[$i]);
  }
  $hasil_output =$min_fuzzy/$min;
  return $hasil_output;
}
  }


  public function Rule($matrix, $baris, $total, $hasil, $limit, $limit_kolom, $iterasi, $line_true){
    if ($iterasi == 0) {
    for ($i=0; $i < 3; $i++) { 
        $baris = 0;
        $baris_true = $line_true[$baris];
        $temp = count($hasil)-1;
        if ($i!=0) {
            $limit = $temp;
        }
        $hasil[$limit][$limit_kolom] = $matrix[$baris_true][$i];
        $baris ++;
        $iterasi++;
        if ($i==1) {
        }
        $hasil = $this->Rule($matrix, $baris, $total, $hasil, $limit, $limit_kolom, $iterasi, $line_true);
        
    }
        $temp = count($hasil);
        unset($hasil[$temp-1]);
        return $hasil;    
    }
    elseif ($baris == $total-1) {
        $limit_kolom++;
        $baris_true = $line_true[$baris];
        for ($i=0; $i < 3; $i++) { 
                if ($i == 0) {
                    $hasil[$limit][$limit_kolom] = $matrix[$baris_true][$i];
                    $limit++;
                }
                else{
                    $temp1 = $hasil[$limit-1];
                    $hasil[$limit] = $temp1;
                    $hasil[$limit][$limit_kolom] = $matrix[$baris_true][$i];
                    $limit++;
                }
        }
        $tempr = $limit;
        $hasil[$tempr][0] = $limit;
        return $hasil;
    }
  
    elseif ($baris != $total-1) {
        $temp = $baris;
        $limit_kolom++;
        for ($i=0; $i < 3; $i++) {     
            if ($i == 0) {
                    $baris_true = $line_true[$temp];
                    $hasil[$limit][$limit_kolom] = $matrix[$baris_true][$i];
                    $baris++;
                    $hasil = $this->Rule($matrix, $baris, $total, $hasil, $limit, $limit_kolom, $iterasi, $line_true);
                    //print_r($hasil);
                }
                else{
                    $baris = $temp;
                    $baris_true = $line_true[$temp];
                    $temp2 = count($hasil);
                    $limit = $temp2-1;
                    $temp1 = $hasil[$limit-1];
                    //print_r($temp1);
                    $hasil[$limit] = $temp1;
                    $hasil[$limit][$limit_kolom] = $matrix[$baris_true][$i];
                    $baris++;
                    $hasil = $this->Rule($matrix, $baris, $total, $hasil, $limit, $limit_kolom, $iterasi, $line_true);
                    //print_r($hasil);
                }
                
        }
        return $hasil;
    }
    
  }

}

?>