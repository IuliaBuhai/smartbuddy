<?php

// Include database connection
include 'connect.php';

// Handle sign-up request
if(isset($_POST['signUp'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate input
    if(empty($name) || empty($email) || empty($password)){
        echo "Please fill in all fields.";
        exit();
    }

    // Check if email already exists
    $checkEmail = $conn->prepare("SELECT * FROM users WHERE Email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $result = $checkEmail->get_result();
    if($result->num_rows > 0){
        echo "Email Address Already Exists!";
        exit();
    }
    else{
        // Hash password securely
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        // Insert new user
        $insertQuery = $conn->prepare("INSERT INTO users (Nume, Email, Parola) VALUES (?, ?, ?)");
        $insertQuery->bind_param("sss", $name, $email, $passwordHash);
        if($insertQuery->execute()){
            header("location: ind.php");
            exit();
        }
        else{
            echo "Error: Failed to insert user.";
            exit();
        }
    }
}

// Handle sign-in request
if(isset($_POST['signIn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate input
    if(empty($email) || empty($password)){
        echo "Please provide email and password.";
        exit();
    }

    // Check if user exists
    $sql = $conn->prepare("SELECT * FROM users WHERE Email = ?");
    $sql->bind_param("s", $email);
    $sql->execute();
    $result = $sql->get_result();
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        // Verify password
        if(password_verify($password, $row['Parola'])){
            session_start();
            $_SESSION['email'] = $row['Email'];
            header("Location: dashboard.php");
            exit();
        }
        else{
            echo "Incorrect Email or Password";
            exit();
        }
    }
    else{
        echo "User Not Found";
        exit();
    }
}

?>
