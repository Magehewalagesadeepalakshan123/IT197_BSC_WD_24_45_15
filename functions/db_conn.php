<?php

function connection(){
    $server ="localhost";
    $user="root";
    $password="";
    $db_name ="hct";




    $conn = mysqli_connect($server,$user,$password,$db_name);

  if (!$conn){
    return("Database  Error");

  }else{
    return($conn);
  }

}





?>