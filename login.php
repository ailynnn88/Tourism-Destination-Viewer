<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
} 

$servername = "localhost";
$username = "root";
$password = "";
$database = "tourism_db";

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['login'])) {
        $user = $_POST["username"];
        $pass = $_POST["password"];

        $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
        $result = $connection->query($sql);

        if ($result->num_rows == 1) {
            $_SESSION['username'] = $user;
            header("Location: index.php");
            exit();
        } else {
            $error = "Invalid username or password!";
        }
    } elseif (isset($_POST['signup'])) {
        $username = $_POST["signup_username"];
        $password = $_POST["signup_password"];
        $email = $_POST["signup_email"];
        $city = $_POST["signup_city"];

        $sql = "INSERT INTO users (username, password, email, city) VALUES ('$username', '$password', '$email', '$city')";
        if ($connection->query($sql) === TRUE) {
            $success = "Account created successfully! You can now log in.";
        } else {
            $error = "Error: " . $connection->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-size: cover;                
            background-position: center;           
            background-repeat: no-repeat;          
            background-attachment: fixed;
            background-image: url('images/bg1.jpg');        
            color: #333; 

            display: flex;
            justify-content: center; 
            align-items: center;      
            height: 100vh;            
        }

        .login-container, .signup-container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.8); 
        }

        h2 {
            color: #467948;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            background-color: #467948;
            color: white;
            border-radius: 5px;
            border: none;
            padding: 10px;
            width: 100%;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        .toggle-btn {
            text-align: center;
            margin-top: 15px;
            font-size: 0.9rem;
        }

        .toggle-btn a {
            color: #467948;
            text-decoration: none;
            font-weight: bold;
        }

        .toggle-btn a:hover {
            text-decoration: underline;
        }

        .signup-container {
            display: none;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="text-center">Login</h2>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php elseif (isset($success)): ?>
            <div class="alert alert-success"><?php echo $success; ?></div>
        <?php endif; ?>
        <form method="POST" action="login.php">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" name="login">Login</button>
        </form>
        <div class="toggle-btn">
            <p>Don't have an account? <a href="javascript:void(0);" onclick="toggleSignUp()">Sign Up</a></p>
        </div>
    </div>
    
</body>
</html>
