<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page 2</title>
    <script type="text/javascript">
        function preventBack(){window.history.forward()};
        setTimeout("preventBack()", 0);
            window.onunload=function(){null;}
    </script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            justify-content: center;
            display: flex;
            align-items: center;
            text-align: center;
            min-height: 68vh;
            background: url("wew.jpg") no-repeat;
            background-size: cover;
            background-position: center;
        }
        div {
            margin-top: 10%;
        }
    </style>
</head>
<body>
    <div>
        <h1 style="color: black;" >Logged in as, <?php echo $_SESSION['emp_name'];?>!</h1>
        <h2 style="color: black;" >This is Page 2.</h2><br><br>
        <h2><a style="text-decoration: none; color: cyan;" href="page1.php">Go to Page 1</a></h2><br><br>
        <h2><a style="text-decoration: none; color: cyan;" href="index.php" >Logout</a></h2>
    </div>    
</body>
</html>
