<?php
function asd(){
    echo "test the call back fuction";

}
$asd="asd";
function amd($a){
    $a();
}

amd($asd);
?>