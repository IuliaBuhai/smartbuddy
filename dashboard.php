<?php
// Start the session
session_start();

// Check if the user is logged in
if(isset($_SESSION['email'])){
    // Get the email from the session
    $email = $_SESSION['email'];

    // Include database connection
    include 'connect.php';

    // Prepare and execute query to get user's name based on email
    $stmt = $conn->prepare("SELECT Nume FROM users WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch the user's name
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['Nume'];
    } else {
        // If user data not found, handle it accordingly
        $name = 'User';
    }
} else {
    // If the user is not logged in, redirect them to the login page
    header("Location: ind.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <style>
         .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(11, 18, 41, 0.8); /* semi-transparent white background */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000; /* higher z-index to ensure it's displayed over everything */
        }

        body{

        background-image: url("back1.jpg");
            background-size:cover;
        }
        .dashboard-container {
            border-radius: 20px;
            overflow: hidden;
            position: absolute;
            top: 10vh;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }

        .dashboard {
            display: flex;
            position: relative;
            overflow: hidden;
        }

        .logo {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 120px;
            height: auto;
            z-index: 990;
        
        }

        .logo-o {
            width: 120px;
            height: auto;
            z-index: 1000;
          
        }

        .sidebar {
            width: 20vw;
            height: 80vh;
            padding: 20px;
        box-shadow: 10px 0px 20px rgb(34, 34, 62),
                    0px 0px 35px inset rgb(0, 0, 0)
                    ;
                    color: rgb(34, 34, 62);
        background-image: url("back.jpg");
            background-size:cover;
            border-radius: 30px;
            margin: 20px;
        }

        .sidebar h2 {
            margin-top: 0;
            font-size: 2rem;
            margin-bottom: 30px;
            
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .sidebar ul li:last-child {
            border-bottom: none;
        }

        .sidebar ul li a {
            text-decoration: none;
           
            font-size: 1.2rem;
            transition: color 0.3s ease;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        .sidebar ul li a:hover {
            color: #3459bd;
        }

        .main-content {
            flex: 1;
            padding: 30px;
           
        
        }

        .main-content h3{
            font-family: "Young Serif", serif;
            font-weight: 400;
            font-size: 50px;
            text-align: left;
            color: white;
        }

        .main-content h2 {
            margin-top: 0;

    
            background: linear-gradient(to right , rgb(113, 106, 138), rgb(68, 68, 124) );
    
    font-family: "Young Serif", serif;
    font-weight: 400;
    font-size: 80px;
    text-align: left;
    background-clip: text;
    -webkit-text-fill-color: transparent;
        }

        .main-content p {
            font-size: 1.3rem;
            line-height: 1.6;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        .contents{
            width: 80%;
            margin-left: auto;
            margin-left: auto;
            position: relative;
        }

        


    </style>
</head>
<body>
    
        <div class="dashboard">
            <img src="logooo.png" alt="Logo" class="logo">
            <div class="sidebar">
                <h2>Meniu</h2>
                <ul>
                    <li><a href="home.php">Acasa</a></li>
                    <li><a href="#analize">Analize</a></li>
                    <li><a href="#rapoarte">Rapoarte</a></li>
                    <li><a href="#setari">Setari</a></li>
                </ul>
            </div>
            <div class="main-content">
                <h2>Bine ai venit <?php  echo $name ?> !</h2>
                
                <h3 id="analize">Rezultate teste</h3>
                <hr>
                <h3 id="rapoarte">Rapoarte</h3>
                <hr>
                <h3 id="setari">Setări</h3>
                <hr>
                <h3>Review</h3>
            </div>
        </div>


        

</body>
</html>
