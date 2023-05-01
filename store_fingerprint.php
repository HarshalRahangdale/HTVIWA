<?php
// Get the uploaded image file
include'db.php';
include'fun.php';
$obj1=new connect();

$obj2=new fun($obj1->dbconnect());

$error=false;
$catname='';

$alert='';
$sr=$_POST['s_id'];
$fp_image = $_FILES['fingerprint']['tmp_name'];

// Check if the file is a PNG image
if ($_FILES['fingerprint']['type'] != 'image/png') {
  die("Error: Only PNG images are allowed.");
}
$fp_data = file_get_contents($fp_image);



// Encode the data as base64
$fp_base64 = base64_encode($fp_data);

// Connect to the database


// Insert the fingerprint data into the database

$result=$obj2->addfp($fp_base64,$sr);
//$result = mysqli_query($conn, $sql);

if ($result) {
  echo "Fingerprint uploaded successfully.";
} else {
  echo "Error uploading fingerprint: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
