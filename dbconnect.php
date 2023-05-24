<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "hotel";

// Create database connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}

// Handle order submission
if (!isset($_POST['submitOrder'])) {
  $name = $_POST['name'];
  $contact = $_POST['contact'];
  $menuItems = $_POST['menuItems'];

  // Insert order data into the database
  $sql = "INSERT INTO `orders`(`name`, `contact`, `menu_items`) VALUES ('$name', '$contact', '$menuItems')";
  $result=mysqli_query($conn,$sql);
  if ($result) {
    // Redirect the user to a success page
    echo "<script>alert('New record inserted')
    window.location.href='http://localhost/mac/</script>";
    //header ("Location: http://localhost/mac/");
  } 
  else 
  {
    echo "Error: ".mysqli_error($conn);
  }
  mysqli_close($conn);
}
else{
  echo "dfbsof";
}

// // Handle feedback submission
// if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submitFeedback'])) {
//   $feedbackName = $_POST['feedbackName'];
//   $email = $_POST['email'];
//   $message = $_POST['message'];

//   // Insert feedback data into the database
//   $sql = "INSERT INTO feedback (name, email, message) VALUES ('$feedbackName', '$email', '$message')";
//   if ($conn->query($sql) === TRUE) {
//     // Redirect the user to a success page
//     header('Location: feedback_success.php');
//     exit();
//   } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }
// }

// // Close the database connection
// $conn->close();
?>
