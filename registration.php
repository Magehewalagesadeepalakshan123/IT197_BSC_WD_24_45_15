
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <link rel="stylesheet" href="../IT197_BSC_WD_24_45_15/bootstrap-5.3.3-dist/bootstrap/css/bootstrap.min.css">
        
   <link rel="stylesheet"  href="../IT197_BSC_WD_24_45_15/css/registration .css">
    
</head>
<body style="background-image: url('../IT197_BSC_WD_24_45_15/Images/login.jpg">

<div class="form-section">
            <h2>Register</h2>
            <form action="../IT_197_BSC_WD_24_45_15/lib/user/registration.php" method="POST">
                <label for="userName"> Name:</label>
                <input type="text" id="userName" name="userName" required>

                <label for="age"> Age:</label>
                <input type="number" id="age" name="age" required>


                <label for="T.p.number"> T.P.Number:</label>
                <input type="text" id="usertele" name="usertele" required>

                <label for="regEmail">Email:</label>
                <input type="email" id="userEmail" name="userEmail" required>

                <label for="regNic"> NIC:</label>
                <input type="number" id="userNic" name="userNic" required>

                <label for="regPass">Password:</label>
                <input type="password" id="userPass" name="userPass" required>

                <button type="submit" name="register" class="btn btn-outline-warning" onclick="window.location.href='home.php'; return false;">Register <a href="Home.php"></a></button>
                <button type="reset" class="btn btn-outline-danger">Cancel</button>
                <p>You  have account? <a href="login.php">Log in</a></p>
            </form>
        </div>

      
    </div>



    
</body>
</html>
