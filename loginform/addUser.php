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
            <form action="addUserDB.php" method="post">
                <label style="color: cyan; font-size: 20px;">FullName:</label><br>
                <input style="background: transparent;" type="text" class="input" name="emp_name" required><br>
                <label style="color: cyan; font-size: 20px;">Username:</label><br>
                <input style="background: transparent;" type="text" class="input" name="username" required><br>
                <label style="color: cyan; font-size: 20px;">Password:</label><br>
                <input style="background: transparent;" type="password" class="input" name="password" required><br><br>
                <button style="background: transparent; color: cyan;" class="button" type="submit">Register</button>
                <a href="index.php" style="color: cyan; margin-left: 43%; font-size: 18px;" >Back</a>
            </form>
            
        </div>
    </div>

</body>
</html>