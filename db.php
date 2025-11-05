<?php

$con = mysqli_connect("localhost", "root", "", "marga");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


if (isset($_REQUEST['username'])) {
  
    $username = stripslashes($_REQUEST['username']);
    
    $username = mysqli_real_escape_string($con, $username);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);

   
    $stmt = $con->prepare("INSERT INTO register (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);


    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password = md5($_REQUEST['password']);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header('Location: login.php');
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

   
    $stmt->close();
}


mysqli_close($con);
?>