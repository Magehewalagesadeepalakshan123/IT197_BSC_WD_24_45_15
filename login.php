<?php

//include function page
include_once('../IT197_BSC_WD_24_45_15/functions/userfunctions.php');

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register/Login</title>

    <link rel="stylesheet" href="../IT197_BSC_WD_24_45_15/bootstrap-5.3.3-dist/bootstrap/css/min">
        
    <style>
       
        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background-image: url('../IT197_BSC_WD_24_45_15/Images/login.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            display: flex;
            width: 90%;
            max-width: 1000px;
            border-radius: 8px;
            overflow: hidden;
        }

        .form-section {
            flex: 1;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        .form-section form {
            width: 100%;
            max-width: 300px;
        }

        label, input, button {
            display: block;
            width: 100%;
            margin-bottom: 10px;
            font-size: 1rem;
        }

        .btn {
            display: inline-block;
            width: auto;
            padding: 8px 12px;
            margin-top: 10px;
        }

        
        :root {
            --main-color: rgb(235, 10, 141);
            --hover-color: rgb(220, 20, 120);
            --black: #333;
            --white: #fff;
        }

        
        .header {
            background-color: var(--white);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 1rem 0;
        }

      
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container">

        <div class="form-section">
        
            <h2>Login</h2>
            <form action="index.php" method="POST">
                <label for="loginEmail">Email:</label>
                <input type="email" id="loginEmail" name="loginEmail" required>

                <label for="loginPass">Password:</label>
                <input type="password" id="loginPass" name="loginPass" required>

                <button type="submit" name="login" class="btn btn-outline-warning"  onclick="window.location.href='home.php'; return false;">Login</button>

                <p>You Don't have account? <a href="registration.php">Register</a></p>
                
            </form>



        </div>

    </div>

</body>
</html>