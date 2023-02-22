<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $dbname = "resposive";

    $con = mysqli_connect($servername,$username,$password,$dbname);
  
     if($con)
     {
        echo "Connection successfull";
     }else
     {
        echo "Failed";
     }

?>