<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radies.php" method="post">
        <input type="text" name="radies"></input>
        <button type="submit" name="submit">calculate</button>
    </form>
    <?php
    if(isset($_POST["submit"])){
    $radius=$_POST["radies"];
    $circumference=null;
    $area=null;
    $volume=null;

    //find circumference
    $circumference=2*pi()*$radius;
    $circumference=round($circumference,2);
    //area of circle
    $area=pi()*pow($radius,2);
    $area=round($area,2);
    //volume
    $volume=4/3*pi()*pow($radius,2);
    $volume=round($volume,2);
    echo "circumference = {$circumference}<br> area = {$area}<br> volume = {$volume}";    
    }?>
</body>
</html>