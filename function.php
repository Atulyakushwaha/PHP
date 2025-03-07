<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      function display(...$a)
      {$sum=0;
        foreach($a as $b){
            $sum=$sum + $b;
            
        }
        return $sum;
      }


     $sum=display(20 , 30  ,40);
     echo "sum is".$sum;
    #refrencing the function wit global function 
     function show(&$a ,&$b){
        $c=$a;
        $a=$b;
        $b=$c;
     }
     $a=20;
     $b=30;
     show($a ,$b);
     echo "show".$a."moto".$b."";
    ?>
    
</body>
</html>