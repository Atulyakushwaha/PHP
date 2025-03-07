<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $eid=201;
     $name="atulya";
     $sal=70000;
     $dep="account";
     $mycom=mysqli_connect("localhost","root","","collage");
     echo "connection sucess";
     $sql="insert into emp values(?,?,?,?)";
     $ps=$mycom->prepare($sql);
     $ps->bind_param("isis",$eid,$name,$sal,$dep);
     $ps->execute();
     echo "recorde inserted suss"
    

    ?>
</body>
</html>