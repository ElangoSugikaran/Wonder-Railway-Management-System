<!DOCTYPE html>
<html>
<head>
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        
        /* Basic styling for the navigation bar */
        ul.navbar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: rgba(0, 0, 0, 0.54); /* Black background with opacity 54% */
            overflow: hidden;
            display: flex;
            justify-content: space-between;
            height: 60px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1; /* Ensure the navigation bar stays on top */
        }
        
        .menu {
            margin-top: 20px; /* Apply margin to the menu container */
        }

        .menu a {
            text-decoration: none;
            border-bottom: none; /* Remove the line under the menu items */
            padding: 14px 16px;
            color: #fff; /* Set text color to white */
            font-weight: bold;
            font-size: 14px;
        }
        
        .navbar-logo {
            margin-left: 80px; /* Add left margin to the logo */
            margin-top: 20px;
            color: #fff; /* Set text color to white */
            font-size: 25px;
        }
        
        .navbar-right {
            margin-right: 50px; /* Apply margin to the right-aligned items */
            margin-top: 10px;

        }
        
        
        button {
            width: 90px;
            height: 30px;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.2); /* White background with opacity 20% */
            color: #fff; /* Set the text color to white */
            cursor: pointer;
        }
        
        body {
            background-image: url('img/homeBg.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            position: relative; /* Add position relative for the ::before pseudo-element */
        }
        
        body::before { /* Create the pseudo-element for the black overlay */
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.54); /* Black background with opacity 54% */
            z-index: -1; /* Set z-index to position the pseudo-element behind the content */
        }
        
         @media (max-width: 768px) {
            /* Add responsive styles for screens with a maximum width of 768px (e.g., tablets and smaller devices) */
            .navbar-logo {
                margin-left: 20px;
                font-size: 20px;
            }

            .menu a {
                font-size: 8px;
            }

            .navbar-right {
                margin-right: 20px;
            }
             
            h3 {
                font-size: 25px;
            }
        }
            
        @media (max-width: 480px) {
            /* Additional responsive styles for screens with a maximum width of 480px (e.g., smartphones) */
            h3 {
                font-size: 25px;
            }
        }
        
         /* CSS animation for fade-in effect */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .login-box {
        width: 400px;
        padding: 40px;
        background-color: rgba(0, 0, 0, 0.5);
        border: 1px solid #ffffff;
        border-radius: 5px;
        padding-bottom: 1px;
        margin-top: 50px;
        }
        
        .labelStyle{
            font-size: 15px;
            margin-left: 5px;
            color: rgb(255, 255, 255);
            text-shadow: 5px 3px 4px rgba(0, 0, 0, 0.5);
        }

        .headingLogin {
            font-size: 40px;
            margin-top: 10px;
            margin-bottom: 20px;
            text-align: center;
            font-family: Impact, Arial Black, sans-serif;
            color: #ffffff; 
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        

        .login-box input[type="text"],
        .login-box input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 20px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 3px;
        }

        .login-box input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            width: 80%;
            padding: 8px;
            display: block;
            margin: 0 auto;
            border: 1px solid #4CAF50;
            border-radius: 10px;
        }
        

        .login-box input[type="submit"]:hover {
        background-color: #45a049;
        }

        .password-container {
        position: relative;
        }

        .password-container input[type="password"] {
        padding-right: 30px;
        }

        .password-container .toggle-password {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        cursor: pointer;
        }
        
        .forget-password {
            text-align: left;
            margin-top:-1px;
        }
    
        .forget-password a {
            color: rgb(112, 255, 23);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            text-decoration: none;
        }
    
        .forget-password a:hover {
            text-decoration: underline;
        }

        .pstyle{
            color: #ffffff;
            text-align: center;
    
        }

        .pstyle a{
            color: rgb(65, 204, 255);
        }

        .labelStyleHint{
            color: #ffffff;
        }

        .alreadyLogin{
            color: rgb(255, 255, 255);
            text-align: center;
        }

        .alreadyLogin a{
            color: aqua;
        }

        .backToLogin {
            text-align: center;
            font-size: 20px;
        }

        .backToLogin a{
            color: aqua;
        }
                
        /* Add this CSS rule to highlight the active link */
        .menu a.active {
            border-bottom: 2px solid gold; /* Add a white underline to the active link */
            color: gold;
        }
                

        /* Style for the navigation bar */
        .navigationPassStaff {
            background-color: transparent;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50px;
        }

        /* Style for the navigation options */
        .nav-option {
            text-decoration: none;
            text-align:center;
            color: white;
            padding: 10px 20px;
            margin: 0 10px;
            width:80px;
            border-radius: 5px;
            border: 1px solid white; /* Add white border */
            transition: background-color 0.3s;
        }

        /* Hover effect for navigation options */
        .nav-option:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        /* Checked style for navigation options */
        
        .nav-option:checked {
            background-color: white;
            color: #333;
        }

        @media(max-width:700px){
            .navbar-logo{
                font-size: 15px;
                margin-right: 2px;
            }
            .navbar-right {
                display: flex;
                align-items: center; /* Center buttons horizontally */
            }
            .navbar-right a{
                font-size: 12px; /* Adjust the font size for better visibility */
                margin: 5px; /* margin to separate buttons */
                width: auto; /* buttons width */
            }
            
            .login-box {
                width: 350px;
                padding: 40px;
                background-color: rgba(0, 0, 0, 0.5);
                border: 1px solid #ffffff;
                border-radius: 5px;
                padding-bottom: 1px;
                margin-top: 80px;
            }
        }
    </style>
</head>
<body>
    <ul class="navbar">
        <li class="navbar-logo">Wonder</li>
        <li class="navbar-item">
            <div class="menu">
                <a  href="index.php" class="active">Home</a> <!-- Add the 'active' class to the Home link -->
                <a href="aboutPg.php">About</a>
                <a href="servicesPg.php">Services</a>
                <a href="contactPg.php">Contact</a>
            </div>
        </li>
        <li class="navbar-right">
            <a href="passengerRegister.php"><button class="reg">Register</button></a>
        </li>
    </ul>

    <!-- Login form start -->
    <div class="login-box">
        <form action="#" method="POST">
                    
        <div class="headingLogin">Get Your Hint</div> <!-- Login heading -->

        <!-- Inputs Email & password -->
        <label class="labelStyle"> Email :</label>
        <input type="text" name="email" id="email" placeholder="Enter your Email" required>

        <input type="submit" value="Submit"> <!-- submit button -->
        <br>
        <label class="labelStyle"> Your Hint is :</label>

        <?php
        if (isset($_POST['email'])) { // Check if the form has been submitted
            $servername = "localhost";
            $username = "Hazz_Wondor";
            $password = "Hazz@2023";
            $dbname = "hazz_wonder";
            $conn = new mysqli('localhost', 'Hazz_Wondor', 'Hazz@2023', 'hazz_wonder');

            if ($conn->connect_error) {
            die("connection failed:" . $conn->connect_error);
            }

            $email = $_POST['email']; // Retrieve the email from the form

            $sql = "SELECT hint from passenger WHERE email='$email'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<span style="color: white;">' . $row["hint"] . '</span>';
            }
            } else {
            echo '<span style="color: white;">' . "Email Not found" . '</span>';
            }

            $conn->close();
        }
        ?> 

        <p class="backToLogin"><a href="passengerLogin.php">Back to Login</a></p> <br>
        </form>
    </div>

    <script>
        // JavaScript to handle the click event and activate the "active" class
        document.addEventListener("DOMContentLoaded", function () {
            const links = document.querySelectorAll(".menu a");

            links.forEach(link => {
                link.addEventListener("click", function () {
                    // Remove "active" class from all links
                    links.forEach(link => link.classList.remove("active"));

                    // Add "active" class to the clicked link
                    this.classList.add("active");
                });
            });
        });
    </script>
</body>
</html>
