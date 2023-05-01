<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the user input
  $full_name = $_POST['full_name'];
  $address = $_POST['address'];
  $contact = $_POST['contact'];
  $date_of_birth = $_POST['date_of_birth'];
  $state = $_POST['state'];
  $city = $_POST['city'];

  // Calculate the age based on the date of birth
  $dob = new DateTime($date_of_birth);
  $now = new DateTime();
  $age = $now->diff($dob)->y;

  // TODO: Validate the user input

  // Connect to the database


  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "humantrafficiking";
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Insert the user information into the database
  $sql = "INSERT INTO public_info (full_name, address, contact, date_of_birth, age, state, city) VALUES ('$full_name', '$address', '$contact', '$date_of_birth', '$age', '$state', '$city')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Close the database connection
  $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Information Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <h1 class="my-5 text-center">User Information Form</h1>

  <form method="post" class="row g-3">
    <div class="col-md-6">
      <label for="full_name" class="form-label">Full Name</label>
      <input type="text" name="full_name" id="full_name" class="form-control" required>
    </div>
    <div class="col-md-6">
      <label for="contact" class="form-label">Contact</label>
      <input type="text" name="contact" id="contact" class="form-control" required>
    </div>
    <div class="col-12">
      <label for="address" class="form-label">Address</label>
      <textarea name="address" id="address" class="form-control" required></textarea>
    </div>
    <div class="col-md-6">
      <label for="date_of_birth" class="form-label">Date of Birth</label>
      <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" required>
    </div>
    <div class="col-md-6">
      <label for="state" class="form-label">State</label>
      <input type="text" name="state" id="state" class="form-control" required>
    </div>
    <div class="col-md-6">
      <label for="city" class="form-label">City</label>
      <select name="city" id="city" class="form-select" required>
        <option value="">Select a city</option>
        <!-- Add options for all cities here -->
      </select>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>

</body>
</html>
