<?php
ini_set('max_execution_time', 300);
$db = mysqli_connect('localhost', 'root', '', 'rating_system');

$filename   = 'uni-1.csv';
$file       = fopen($filename, 'r') or die('Could not open file.');
$line_count = 0;
$line       = fgetcsv($file);

$line            = fgetcsv($file);
$past_university = $line[3];
$clg             = explode(",", $line[10])[0];
$code            = "U-" . rand(0, 100) . rand(1, 9999) . rand(1, 1000);
$i_code          = "I-" . rand(0, 100) . rand(1, 9999) . rand(1, 1000);
$sql             = "INSERT INTO rs_universities (u_code, u_type, u_name, u_state, u_district) VALUES ('$code', '$line[2]',
'$past_university', '$line[0]', '$line[1]')";
echo $sql . ";<br>";

$sql2 = "INSERT INTO rs_institutes (u_code, i_code,i_type, i_name, i_state, i_district) VALUES ('$code','$i_code', '$line[8]', '$clg', '$line[6]', '$line[7]')";
echo $sql2 . ";<br>";

//mysqli_query($db, $sql);
mysqli_query($db, $sql2);
$institutes = array();
while (!feof($file)) {
   $line_count++;
   $line = fgetcsv($file);
   /* if (1 == $line_count) {
   continue;
   }*/

   // 0 => state
   // 1 => district
   // 2 => type
   // 3 => name
   // 6 => att. state
   // 7 => att. district
   // 8 => att. type
   // 10 => att. name

   $states         = array();
   $district       = array();
   $cur_university = $line[3];
   //$line[3]        = addcslashes($line[3], "'");
   // echo $past_university . " == " . $cur_university . "<br>";
   if ($past_university == $cur_university) {
      $clg = explode(",", $line[10])[0];
      array_push($institutes, $clg);
      // echo "<pre>" . print_r($institutes, true);

      // save same university colleges.
   } else {
      // echo $past_university;
      $code = "U-" . rand(0, 100) . rand(1, 9999) . rand(1, 1000);
      $sql  = "INSERT INTO rs_universities (u_code, u_type, u_name, u_state, u_district) VALUES ('$code', '$line[2]',
      '$past_university', '$line[0]', '$line[1]')";
      //mysqli_query($db, $sql);
      echo $sql . ";<br>";
      foreach ($institutes as $val) {
         $valx   = addcslashes($val, "'");
         $i_code = "I-" . rand(0, 100) . rand(1, 9999) . rand(1, 1000);
         $sql2   = "INSERT INTO rs_institutes (u_code, i_code,i_type, i_name, i_state, i_district) VALUES ('$code','$i_code', '$line[8]', '$valx', '$line[6]', '$line[7]')";
         //mysqli_query($db, $sql2);
         echo $sql2 . ";<br>";
      }

      //echo "<pre>" . print_r($institutes, true);
      $institutes      = array();
      $past_university = $line[3];
      // save new university.
   }
}

fclose($file);
?>