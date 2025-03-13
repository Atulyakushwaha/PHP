<?php
function rangea($i){
  
  print yield $i;
}
$val=rangea(5);
print $val -> current();
// do while
$bo=5;
do{
    echo "$bo";
    echo "<br>";
}
while(--$bo>0);


?>