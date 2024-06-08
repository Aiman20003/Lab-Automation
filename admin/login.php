<?php
include('database_connection.php');

session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $verify = password_verify($password, $hash); 

    $query = "SELECT * FROM user_tb WHERE user_name='$username' and user_password='$verify'";
  
    $run = mysqli_query($conn,$query);

    $totalrows = mysqli_num_rows($run);
      if(password_verify($password,$hash))
    {
            $_SESSION["username"] = $username;
            echo '<script>alert("Login successfully")</script>';
            header('location:index.php');
        } else {
            echo '<script>alert("Your username and password are incorrect")</script>';
        }
}
?>
         
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .login-container h1 {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            color: #9c5ca8;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-family: 'Times New Roman', Times, serif;
            font-size: large;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 80%;
            padding: 10px;
            margin-left: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            display: flex;
            font-family: 'Times New Roman', Times, serif;
        }

        .login-container input[type="submit"] {
            width: 70%;
            padding: 8px;
            margin-left: 40px;
            margin-top: 18px;
            margin-bottom: 15px;
            background-color: #c27ed3;
            border: none;
            border-radius: 4px;
            color: rgb(253, 253, 253);
            font-size: 16px;
            cursor: pointer;
            font-family: 'Times New Roman', Times, serif;
        }

        .login-container input[type="submit"]:hover {
            background-color: #d760ec;
        }

        .forgot-password {
            text-align: center;
            margin-top: 10px;
        }

        .forgot-password a {
            color: #b78dbd;
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login Form</h1>
        <form action="" method="POST">
            <label for="username">Name:</label>
            <input type="text" name="username" placeholder="Username..." required>

            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="Userpassword..." required>
            
            <input type="submit" value="Login" name="submit">
            
            <div class="forgot-password">
                <a href="#" onclick="showForgotPasswordSection()">Forgot Password?</a>
            </div>
        </form>
    </div>
</body>
</html>
