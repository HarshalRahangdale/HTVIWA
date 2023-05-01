<?php
error_reporting (E_ALL ^ E_NOTICE); 
session_start();
$user=$_SESSION['user'];
include'include/head.php';
include'include/nav.php';
include'db.php';
include'fun.php';
$obj1=new connect();

$obj2=new fun($obj1->dbconnect());

$error=false;
$catname='';

$alert='';
$alert1='';
$edit_record=$_GET['image'];
$sr=$edit_record;

?>
<!DOCTYPE html>
<html>
<head>
  <title>Upload Fingerprint</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+Y6QLdeLsNPmBJmWjh3RSfRVKnMqn5"
        crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1 class="mt-5">Upload Fingerprint</h1>
    <form action="store_fingerprint.php" method="post" enctype="multipart/form-data" class="mt-5">
      <div class="form-group">
        <label for="fingerprint">Select a PNG fingerprint image to upload:</label>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="fingerprint" name="fingerprint" accept="image/png">
            <input type="hidden" name="s_id" value="<?php echo $sr ?>"id="name2" class="form-control " required >
          <label class="custom-file-label" for="fingerprint">Choose file</label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Upload</button>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
          integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
          crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
          integrity="sha384-P87TmTfTVC1j0osWRBfN1MAzSbKjJhN9Oq23ZcJZW4l4hJjKxLn17LFWQHLdY5r5"
          crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
          integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+Y6QLdeLsNPmBJmWjh3RSfRVKnMqn5"
          crossorigin="anonymous"></script>
</body>
</html>
