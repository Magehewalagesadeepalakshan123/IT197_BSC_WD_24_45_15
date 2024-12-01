<?php

// Include database connection
include_once("db_conn.php");


// Create user registration function
  function userRegistration($username, $useremail, $userpass, $usertele, $userNic) {
   


  //create database  connection
  $db_conn= Connection();


    // Data insert query
    $insertSql = "INSERT INTO user_tbl(user_name, user_email, user_tele, user_Nic, login_status) VALUES ('$username', '$useremail', '$usertele', '$userNic', 1);";
    $sqlResult = mysqli_query($db_conn, $insertSql);

    $sqlResult=mysqli_query($db_conn,$insertSql);

    // Check for database errors
    if (mysqli_connect_errno()) {
        echo (mysqli_connect_error());
        
    }

    // If registration is successful, insert data into login table
    if ($sqlResult > 0) {

      ///md5 method to our password
        $newPassword = md5($userpass);

        $insertLogin = "INSERT INTO login_tabl(login_email, login_pass, login_role, login_status) VALUES ('$useremail', '$newPassword', 'user', 1);";
        $loginResult = mysqli_query($db_conn, $insertLogin);

        // Check for errors in login table insertion
        if (mysqli_connect_errno()) {
            echo (mysqli_connect_error());
           
        }
        return "Your registration was successful!";
    } else {
        return "Try again!";
    }
}

// Login function
function Authentication($loginusername, $loginuserpass) {
   
 // Fetch user details
    $db_conn =connection();
    $sqlFechUser = "SELECT * FROM login_tabl WHERE login_email = '$loginusername';";
    $sqlResult = mysqli_query($db_conn, $sqlFechUser);

    if (mysqli_connect_errno()) {
        echo (mysqli_connect_error());
        
    }

    $newpass = md5($loginuserpass);
    $norows = mysqli_num_rows($sqlResult);

    // Validate if any records were found
    if ($norows > 0) {
        $rec = mysqli_fetch_assoc($sqlResult);

        // Validate the password
        if ($rec['login_pass'] == $newpass) {

            // Check if the user is active
            if ($rec['login_status'] == 1) {

                if ($rec['login_role'] == "admin") {
                    // Redirect admin user to the admin dashboard
                    header('location:IT197_BSC_WD_24_45_15/lib/views/dashboards/admin');
                    
                }else{
                  //redirct  to the user dashboard
                  header('location:../IT197_BSC_WD_24_45_15/functions/userfunctions.php');
                }
                
        }else{
          return("tour  account  has  been deactivated");
        }
    } else{
      return("ypur  password  is  not  correct");
    }
  }else{
    return("No record  found");
  }
}
?>
