<?php
session_start();
include "head.php"; 
include "nav.php";
?>
<div class="container-fluid">
<?php
$age = array("Peter"=>"7", "Ben"=>"6", "Joe"=>"4.3");
foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
?>
</div>