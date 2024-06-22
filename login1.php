<?php
require('C:\Users\HP\harbor-lights-master\admin\inc\essentials.php');
require("C:\Users\HP\harbor-lights-master\admin\inc\script.php");


// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "taj_hotel";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set the database connection charset
$conn->set_charset("utf8");

// Create a table for user information
$tableCreationQuery = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
)";

$conn->query($tableCreationQuery);

// Function to sanitize input data
function sanitizeInput($data) {
    global $conn;
    return htmlspecialchars(mysqli_real_escape_string($conn, trim($data)));
}

// Function to retrieve user information
function getUserInfo($username) {
    global $conn;
    $username = sanitizeInput($username);
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}

// Handle user registration
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    $regUsername = sanitizeInput($_POST["regUsername"]);
    $regEmail = sanitizeInput($_POST["regEmail"]);
    $regPassword = password_hash(sanitizeInput($_POST["regPassword"]), PASSWORD_DEFAULT);

    // Check if the username already exists
    $checkUserQuery = "SELECT * FROM users WHERE username='$regUsername'";
    $checkUserResult = $conn->query($checkUserQuery);

    if ($checkUserResult->num_rows > 0) {
        echo "Username already exists. Choose a different username.";
    } else {
        // Insert new user into the database
        $insertUserQuery = "INSERT INTO users (username, email, password) VALUES ('$regUsername', '$regEmail', '$regPassword')";
        if ($conn->query($insertUserQuery) === TRUE) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

// Handle user login
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $loginUsername = sanitizeInput($_POST["loginUsername"]);
    $loginPassword = sanitizeInput($_POST["loginPassword"]);

    // Retrieve hashed password and user information from the database
    $sql = "SELECT * FROM users WHERE username='$loginUsername'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password"];

        // Verify the password
        if (password_verify($loginPassword, $hashedPassword)) {
            // Login successful, retrieve user information
            $userInfo = getUserInfo($loginUsername);

            // Display user information (you can customize this part)
            echo "Login successful!<br>";
            echo "User ID: " . $userInfo['id'] . "<br>";
            echo "Username: " . $userInfo['username'] . "<br>";
            echo "Email: " . $userInfo['email'] . "<br>";
        } else {
            // alert("Login successfull");
            echo '<script>alert("Login successful");</script>';

            // echo "Login successfull";
            redirect('index.html');
        }
    } else {
        echo "User not found!";
    }
}

// Close the connection
$conn->close();
?>
