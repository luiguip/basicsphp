<?php
   echo ("Arrays<br/>");
   echo ("array(1,2,3,4,5)<br/>");
   $vector = array(1,2,3,4,5);
   for($i = 0 ; $i < count($vector) ; $i++){
     echo "$vector[$i]";
   }
   echo("Associative Arrays<br/>");
   echo("yes no elements<br/>");
   $vector = array("yes"=>1,"no"=>0);
   foreach ($vector as $key => $value) {
     echo("$key => $value <br/>");
   }
 ?>
