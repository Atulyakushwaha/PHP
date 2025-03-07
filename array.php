<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ar=array("atulya","aman","vadent","sukomal","ayuse");
    print_r($ar);
    foreach($ar as $i){
        echo "<br>".$i;
        
    }
    for($i=0;$i<count($ar);$i++)
    {
        echo $ar[$i];
        echo "<br>";
    }
    #asocitet array
    $av=["a"=>"noto","b"=>"boto","c"=>"burro"];
    foreach($av as $i){
        echo "<br>".$i;
    }
    #geting compair and get value fwhich are comman in both
    $arr1 =array("mon", "tue", "wed","sat","mon","sat","moc");
    $arr2 =array("mon", "tue", "wed","feb","thus","vivi");
    $arr3 =array("mon", "tue", "wed","sat","sun");
    $new=array_intersect($arr1,$arr2);
    print_r($new);
    echo "<br>";
    #unique values
    $new1=array_unique($arr1);
    print_r($new1);
    echo "<br>";
    #check first value with another array
    $new3=array_diff($arr1,$arr2,$arr3);
    print_r($new3);
    echo "<br>";
    function multi($n){
        $n=$n*5;
        return $n;
    }
    $valu=array(10,20,30,40,50);
    $newarray=array_map('multi',$valu);
    print_r($newarray);

    $arr10=range(1,20);
    echo "<br>";
    print_r($arr10);

    array_map(function($arr1,$arr2){
        return "$arr1 likes $arr2\n";
    },$arr1,$arr2);

    
    ?>
</body>
</html>