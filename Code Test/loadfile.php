<?php

 $filename = './includes/data.csv';
 $handle=fopen($filename,'rb+');

// $row=fgetcsv($handle);
// print_r($row);


 while($row=fgetcsv($handle)){
     echo $row[1];
 }
?>

 