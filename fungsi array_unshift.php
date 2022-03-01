<!DOCTYPE html>
 <html>
 <body>

 <?php
 $tims = ["erwin", "heru", "ali", "zaky",];
 array_unshift($tims,"joko","wati");
 foreach($tims as $person){
     echo $person. '<br/>';
 }
// Jelaskan apa fungsi array_unshift($array) , digunakan untuk menambah elemen baru pada array dan ditempatkan pada posisi awal (elemen pertama)

 ?> 
</body>
</html>