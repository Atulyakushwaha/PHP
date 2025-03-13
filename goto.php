<?php
$x=20;
echo "before condition<br>";
if($x==20){
    goto jump;
}
echo "it should be skip";
jump:
 echo "it should be print";
?>