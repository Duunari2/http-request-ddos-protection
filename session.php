<?php

session_start();
 
if(isset($_SESSION['views']))
    $_SESSION['views'] = $_SESSION['views']+1;
else
    $_SESSION['views']=1;
    
echo"views = ".$_SESSION['views'];

$ladattu=$_SESSION['views'];

if($ladattu >=5 && $value <=15 ){
  echo "Too manyrequests. Go back later.";
  die();
}

?>