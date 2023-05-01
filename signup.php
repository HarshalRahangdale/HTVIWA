<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Signup Page</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="styles.css">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!-- Custom JS -->
  <script src="custom.js"></script>
</head>
<body>
  <div class="container">
    <h1>Signup Form</h1>
    <form action="adduser_details.php" method="post">
      <div class="form-group">
        <label for="firstname">First Name:</label>
        <input type="text" class="form-control" id="firstname" name="firstname">
      </div>
      <div class="form-group">
        <label for="lastname">Last Name:</label>
        <input type="text" class="form-control" id="lastname" name="lastname">
      </div>
      <div class="form-group">
        <label for="mobile">Mobile Number:</label>
        <input type="tel" class="form-control" id="mobile" name="mobile">
      </div>
  
      <div class="form-group">
        <label for="state">State:</label>
        <select class="form-control" id="state" name="state">
          <option value="">--Select State--</option>
          <option value="Andhra Pradesh">Andhra Pradesh</option>
          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
          <option value="Assam">Assam</option>
          <option value="Bihar">Bihar</option>
          <option value="Chhattisgarh">Chhattisgarh</option>
          <option value="Goa">Goa</option>
          <option value="Assam">Assam</option>
          <option value="Assam">Assam</option>
          <option value="Assam">Assam</option>
          <option value="Assam">Assam</option>
          <option value="Assam">Assam</option>
          <option value="Assam">Assam</option>
          <option value="Assam">Assam</option>
          <!-- Add more options for each Indian state -->
        </select>
      </div>
      <div class="form-group">
        <label for="city">City:</label>
        <select class="form-control" id="city" name="city" disabled>
          <option value="">--Select City--</option>
        </select>
      </div>
       <div class="form-group">
        <label for="Username">Username:</label>
        <input type="tel" class="form-control" id="mobile" name="username">
      </div>
       <div class="form-group">
        <label for="pass">Password:</label>
        <input type="tel" class="form-control" id="mobile" name="password">
      </div>

      <!-- Add more form fields here -->
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!-- Custom JS -->
  <script src="custom.js"></script>
</body>
</html>
