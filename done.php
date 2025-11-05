<?php
$conn = mysqli_connect("localhost", "root", "", "marga");

if (!$conn) {
    echo "Failed";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

   
    $stmt = $conn->prepare("INSERT INTO login (email, password) VALUES (?, ?)");

   
    if ($stmt) {
      
        $stmt->bind_param("ss", $email, $password);

       
        $result = $stmt->execute();

        if ($result) {
            echo "Data sent";
            header("Location: Home.html");
            exit;
        } else {
            echo "Data not sent";
        }

      
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
}

$conn->close();
?>