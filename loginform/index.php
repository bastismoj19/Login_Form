<?php
    // Creates database automatically 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "logindb";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Read SQL file
    $sql = file_get_contents('logindb.sql');

    // Execute SQL script
    if ($conn->multi_query($sql)) {
        do {
            // Store first result set
            if ($result = $conn->store_result()) {
                $result->free();
            }
        } while ($conn->more_results() && $conn->next_result());
    }

    $conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="bulma.css">
    
    <script type="text/javascript">
        function preventBack(){window.history.forward()};
        setTimeout("preventBack()", 0);
        window.onunload=function(){null;}
    </script>
    
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        body {
            color: white;
            background: url('img1.jpg') no-repeat;
            background-size: cover;
            background-position: center;
            display: flex;
            height: 100vh;
        }
        #form {
            background-color: transparent;
            width: 25%;
            margin: 120px auto;
            padding: 30px;
            margin-top: 10%;
            border-radius: 10px;
        }
        button {
            margin-left: 35%;
        }
    </style>

</head>
<body>
    <div class="columns is-vcentered container">
        <div id="form">
            <form action="database.php" method="post">
                <label style="color: cyan; font-size: 20px;">Username:</label><br>
                <input style="background: transparent;" type="text" class="input" name="username" required><br>
                <label style="color: cyan; font-size: 20px;">Password:</label><br>
                <input style="background: transparent;" type="password" class="input" name="password" required><br><br>
                <button style="background: transparent; color: cyan;" class="button" type="submit">Login</button><br>
                <br><a href="addUser.php" style="color: cyan; margin-left: 40%;" >Signup</a>
        </form>
            
        </div>
    </div>

</body>
</html>