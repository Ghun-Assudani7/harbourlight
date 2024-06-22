<?php      
    include('connection.php');  
    $username = $_POST['username'];
    $email = $_POST['email'];  
    $password = $_POST['password'];
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "User created successfully, Thank you for signing up :)";
    } else {
        echo "Error creating user: " . $conn->error;
    }
?>
