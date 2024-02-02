<?php

// Include the file that establishes the database connection
include("connect.php");

// Check if the form is submitted
if (isset($_POST["submit"])) {

  // Retrieve user input from the form
  $name = $_POST["name"];
  $description = $_POST["description"];

  // File upload handling
  $photo = $_FILES['photo']['name'];          // Get the original name of the uploaded file
  $temp_name = $_FILES['photo']['tmp_name'];  // Get the temporary name assigned to the file by the server
  $folder = "uploads/";                       // Set the folder where uploaded files will be stored

  // Move the uploaded file from the temporary location to the specified folder
  move_uploaded_file($temp_name, $folder . $photo);

  // Insert user data into the database
  $sql = "INSERT INTO `user` (`name`, `description`, `photo`) VALUES ('$name', '$description', '$photo')";
  $result = mysqli_query($conn, $sql);

  // Check if the database insertion was successful
  if ($result) {
    // Redirect to a page displaying user details upon success
    header("location: displayUserDetails.php");
  } else {
    // Print an error message if the database insertion fails
    echo "Error: " . mysqli_error($conn);
  }
}

// You can also write the above code in index.php
// Just remove action="handleInput.php" and give it blank like action=""
