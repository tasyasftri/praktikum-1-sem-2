<!DOCTYPE html>
 <html>
 <body>

 <?php
 $tims = ["erwin", "heru", "ali", "zaky",];
 array_shift($tims);
 foreach($tims as $person){
     echo $person. '<br/>';
 }
// Jelaskan apa fungsi array_shift($array) , digunakan untuk menghapus dan mengembalikan elemen pertama dari array, yang mengurangi jumlah elemen oleh satu

 ?> 
 </body>
 </html>