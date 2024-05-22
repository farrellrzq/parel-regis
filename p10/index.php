
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            text-decoration: none;
            color: #4caf50;
            display: block;
            text-align: center;
        }

        a:hover {
            color: #45a049;
        }
    </style>
</head>

<body>
    <h2>Welcome to Our Website</h2>
    <?php
    if (isset($_SESSION['username'])) {
        echo "<p>Hello, " . $_SESSION['username'] . "!</p>";
        echo '<a href="welcome.php">Go to your dashboard</a><br>';
        echo '<a href="logout.php">Logout</a>';
    } else {
        echo '<a href="register.php">Register</a><br>';
        echo '<a href="login.php">Login</a>';
    }
    ?>
</body>
</html>
