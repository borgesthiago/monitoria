<?php
session_start();
include "head.php"; 
include "nav.php";
?>
<div class="container-fluid">
<?php
echo "<b>Array Indexed</b><br>";
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
echo "<b>Array Associativo</b><br>";
$age = array("Peter"=>"7", "Ben"=>"6", "Joe"=>"4.3");
foreach($age as $x => $val) {
  echo "$x = $val<br>";
}

echo "<b>Array Multidimensional</b><br>";
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
      
  for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
  }
?>
</div>