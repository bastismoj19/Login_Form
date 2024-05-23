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
    <title>Page 1</title>
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
            min-height: 90vh;
            background: seagreen;
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <h2>Logged in as, <?php echo $_SESSION['emp_name']; ?>!</h2>
        <h2>This is Page 1.</h2>
        <a href="page2.php">Go to Page 2</a>
    </div>
</body>
</html>