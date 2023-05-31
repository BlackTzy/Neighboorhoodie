<?php
$conn = mysqli_connect('localhost', 'root', '', 'Register');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Confirm_Password = $_POST['Confirm_Password'];

    $stmt = $conn->prepare("INSERT INTO user(Username, Email, Password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $Username, $Email, $Password);
    $stmt->execute();

    echo "Registered Successfully....";

    $stmt->close();
}
$conn->close();
?>