<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="mysql.php">
        <input type="text" name="empid"></input>
        <input type="text"name="name"></input>
        <input type="text"name="salary"></input>
        <input type="text"name="dep"></input>
        <button type="submit"name="submit">submit</button>
     

</form>

    <?php
    if(isset($_POST["submit"])){
     $eid=$_POST["empid"];
     $name=$_POST["name"];
     $sal=$_POST["salary"];
     $dep=$_POST["dep"];
     $mycom=mysqli_connect("localhost","root","12345","collage");
     echo "connection sucess";
     $sql="insert into emp values(?,?,?,?)";
     $ps=$mycom->prepare($sql);
     $ps->bind_param("isis",$eid,$name,$sal,$dep);
     $ps->execute();
     echo "recorde inserted suss";
    }
    

    ?>
</body>
</html>