<!DOCTYPE html>
 <html>
 <body>

 <?php
 $ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu" ];
 echo '<ol>';
 foreach($ar_buah as $k =>$v){
 echo '<li>'.$k.' - ' . $v .'</li>';
 }
 echo '</ol>';
 sort($ar_buah);
 echo '<hr/>';
 echo '<ol>';
  foreach($ar_buah as $k =>$v){
  echo '<li>'.$k.' - ' . $v .'</li>';
  }
  echo '</ol>';

  // Jelaskan apa fungsi sort(array), arsort(array) , fungsi sort (array) adalah mengurutkan array yang diindeks dalam urutan mekanik , fungsi arsort (array) adalah mengurutkan array asosiatif dalam urutan menurun,menurut nilainya 
  
  ?> 
  </body>
  </html>
 