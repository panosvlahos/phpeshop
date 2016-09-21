<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<body>
  <?php 
  

session_start();

$artist = array(); 
$_SESSION['a']=$artist;
$basket = array(); 
$_SESSION['b']=$basket;

$costs = array(); 
$_SESSION['c']=$costs;
  
  $category = array(); 
$_SESSION['go']=$category;
  
  
  $n=$_POST["n"];
  $p=$_POST["p"];
  $_SESSION['name']=$n;
  $_SESSION['pass']=$p;
  $con = mysqli_connect("localhost", "root", "", "cd"); 
    if (!$con) { 
        die('Could not connect: ' . mysql_error()); 
    } 
    $sql = "SELECT name,password FROM user";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if($n==admin and $p==1)
            {header("Location: http://localhost:8080/admin1.php");}
        if( $n == $row["name"] AND $p == $row["password"] ){
        header("Location: http://localhost:8080/central.html");
        } 
        }
} 
echo "Wrong username or password!";
readfile('eisodos.html');

    
    
    
    mysqli_close($con);
  ?>
  </body>
  </html>
