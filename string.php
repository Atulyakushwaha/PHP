<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $word="atulya are you are greate";
     $n=strlen($word);
     echo "lenth".$n;
     #count the world
     $c=str_word_count($word);
     echo "<br> number of word ".$c;
    #add some degit after regular interval
    $v=chunk_split($word,2,"*");
    echo "<br>nwew word edit ".$v;
    #split the word
    $g=str_split($word,4);
    echo "<br>new word".$g;
    #upper case
    $h =strtoupper($word);
    echo "<br>new words in uppper case".$h;
    #count the acuring worgs in sentance
    $b=substr_count($word,"are");
    echo "<br>number of are in sentance".$b;
    #convert first later capital
    $r=ucfirst($word);
    echo "upper first later  ".$r;
    #compair the string
    $str1="atulya";
    $str2="Atulya";
    if(strcasecmp($str1,$str2)==0)
       echo "<br> same";
    else
        echo "not same";


    ?>
</body>
</html>