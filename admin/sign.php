<?php 

include('database_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $useremail = $_POST['email'];

    // Check if password and confirm password match
    if ($password !== $confirm_password) {
        echo '<script>alert("Passwords do not match")</script>';
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Use a prepared statement to prevent SQL injection
        $email_validation = $conn->prepare("SELECT * FROM user_tb WHERE user_email = ?");
        $email_validation->bind_param("s", $useremail);
        $email_validation->execute();
        $email_validation->store_result();

        if ($email_validation->num_rows > 0) {
            echo '<script>alert("Email already exists")</script>';
        } else {
            $query = $conn->prepare("INSERT INTO user_tb (user_name, user_email, user_password) VALUES (?, ?, ?)");
            $query->bind_param("sss", $username, $useremail, $hashed_password);

            if ($query->execute()) {
                echo '<script>alert("Data inserted successfully")</script>';
            } else {
                echo '<h1>Data insertion failed</h1>';
            }
        }
        $email_validation->close();
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
       body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.form-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
}

h1 {
    margin-bottom: 20px;
    margin-top: 10px;
    text-align: center;
    font-family: 'Times New Roman', Times, serif;
    color:#9c5ca8;
}

label {
    display: block;
    margin: 10px 0 5px;
    font-family: 'Times New Roman', Times, serif;
    font-size: large;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 80%;
    padding: 8px;
    margin-left: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    display: flex;
    font-family: 'Times New Roman', Times, serif;
}

button {
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

button:hover {
    background-color: #d760ec;
}

.existing-account {
    text-align: center;
    margin-top: 10px;
}

.existing-account p {
    margin: 0;
    margin-bottom: 10px;
}

.existing-account a {
    color: #b78dbd;
    text-decoration: none;
}

.existing-account a:hover {
    text-decoration: underline;
}
        </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="form-container">
          <form action="" method="post">
            <h1>Signup Form</h1>
            <label for="username">Name:</label>
            <input type="text" id="username" placeholder="username..." name="username" required oninput="validateusername()">
            <span id="usernameError"></span>
            <label for="email">Email:</label>
            <input type="email" id="email" placeholder="useremail..." name="email" required oninput="validateEmail()">
            <span id="emailError"></span>
            <label for="password">Password:</label>
            <input type="password" id="password" placeholder="userpassword..." name="password" required oninput="validatepassword()">
            <span id="passwordError"></span>
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" placeholder="confirm password..." name="confirm_password" required oninput="validatepassword()">
            <span id="cpasswordError"></span>
            <button type="submit" onclick="reg()">Sign Up</button>
            <div class="existing-account">
              <p>Already have an account? <a href="login.php">Log in here</a></p>
            </div>
          </form>
        </div>
      
        <script>
    function validateUsername() {
        var username = document.getElementById("username").value;
        var usernameError = document.getElementById("usernameError");
        var pattern = /^@[a-zA-Z]+[A-Z]/;
        if (!pattern.test(username)) {
            usernameError.innerHTML = "Username must start with @ and should contain one capital letter";
            document.getElementById("username").style.border = "2px solid red";
        } else {
            usernameError.innerHTML = "";
            document.getElementById("username").style.border = "2px solid green";
        }
    }

    function validateEmail() {
        var email = document.getElementById("email").value;
        var emailError = document.getElementById("emailError");
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            emailError.innerHTML = "Invalid email format";
            document.getElementById("email").style.border = "2px solid red";
        } else {
            emailError.innerHTML = "";
            document.getElementById("email").style.border = "2px solid green";
        }
    }

    function validatePassword() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirm_password").value;
        var passwordError = document.getElementById("passwordError");
        var confirmPasswordError = document.getElementById("confirmPasswordError");
        var strongRegex = /^[a-zA-Z0-9!@#$%^&*]{6,16}$/;

        if (!strongRegex.test(password)) {
            passwordError.innerHTML = "Weak password. Please enter a password with a minimum length of 6 characters.";
            document.getElementById("password").style.border = "2px solid red";
        } else {
            passwordError.innerHTML = "";
            document.getElementById("password").style.border = "2px solid green";
        }

        if (password !== confirmPassword) {
            confirmPasswordError.innerHTML = "Passwords do not match";
            document.getElementById("confirm_password").style.border = "2px solid red";
        } else {
            confirmPasswordError.innerHTML = "";
            document.getElementById("confirm_password").style.border = "2px solid green";
        }
    }

    function validateForm() {
        validateUsername();
        validateEmail();
        validatePassword();

        var usernameError = document.getElementById("usernameError").innerHTML;
        var emailError = document.getElementById("emailError").innerHTML;
        var passwordError = document.getElementById("passwordError").innerHTML;
        var confirmPasswordError = document.getElementById("confirmPasswordError").innerHTML;

        if (usernameError || emailError || passwordError || confirmPasswordError) {
            return false;
        }
        return true;
    }
</script>
      

</body>
</html>