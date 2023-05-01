<?php
error_reporting (E_ALL ^ E_NOTICE); 
session_start();
$user=$_SESSION['user'];

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
  /*$result=$obj2->getspecializationdetailsbysr($edit_record);
echo "hello";
while($res=mysqli_fetch_array($result,MYSQLI_BOTH)){
    $sp_name=$res["specialization_name"];
    $sp_id=$res["id"];
}*/

//add image code

$alert='';
$alert1='';
$check1='';
$errors1='';

if(isset($_FILES['image'])){
   
      $errors1= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
     // echo $file_name;
     // echo $file_size;
     // echo $file_tmp;
     // echo $file_type;
      //echo $file_ext;
     
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
          
        $errors1='<div class="alert alert-danger" style="color:white">
                <strong>failed!</strong> photo extension not allowed, please choose a JPEG or PNG file..
                  </div>';
      }
      if($file_size > 1048576) {
        $errors1='<div class="alert alert-danger" style="color:white">
                <strong>failed!</strong> photo File size must be less than 1 MB.
                  </div>';
      }
      if(empty($errors1)==false){
         print_r($errors1);
      }
   }
   

   if(isset($_POST['upload'])){
       if(empty($errors1)==true) {
         move_uploaded_file($file_tmp,"verifyfp_img/".$file_name);
         $check1=1;
         $alert1='<div class="alert alert-success" style="color:white">
                  <strong>done!</strong> image added.
                </div>';
        
      }
      else{
        $alert1='<div class="alert alert-danger" style="color:white">
                <strong>failed!</strong>image not upload.
                  </div>';

      }
       
       if($check1==1)
        {
$vfp_data = file_get_contents("verifyfp_img/".$file_name);
// Encode the data as base64
$vfp_base64 = base64_encode($vfp_data);
$str2=$vfp_base64;
                $result=$obj2->get_pub_details();
                $I=1;
                $K=1;
                while($res=mysqli_fetch_array($result,MYSQLI_BOTH))
                {
                  $str1=$res['fdata'];
                    if (strcmp($str1, $str2) == 0) 
                    {
                      $K++;
                         header('location:matchfound.php');
                    } 
                  

                }
                if ( $K== 0) 
                     {
                        header('location:matchnotfound.php');
                      }

             //$result=$obj2->addfp($file_name,$fp_base64,$sr);
            
              //header('location:show_products.php');
              if($result==0){
                $alert='<div class="alert alert-danger" style="color:white">
              <strong>failed!</strong>  entry already exists.
            </div>';
              
                $alert1='<div class="alert alert-danger" style="color:white">
              <strong>failed!</strong> entry Unsuccessful.
            </div>';
              }else
              {
                 header('location:../index.php');
              }

                
        }
          
   }
   



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parallax Verify Page</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Custom CSS -->
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    /* Parallax container */
    .parallax {
      background-image: url("sj.webp");
      min-height: 1000px;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
      overflow: hidden;
    }

    /* Parallax content */
    .parallax-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      text-align: center;
    }

    /* Form container */
    .form-container {
      background-color: white;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }
    .sj {
    background-image: url('sj.webp');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}
  </style>
</head>
<body>

  <!-- Parallax container -->

  <div class="parallax ">

    <!-- Parallax con <div class="parallax-content">tent -->
    
<div class="row ">
  <div class="col-md-4 ml-3">

      <div class="container" style="padding-top: 200px;">
      <h1>Verify Finger Print</h1>
      <p>Upload a Image of Fingerprint</p>

      <!-- Form container -->
       <div class="container form-container ">
        <form action="#" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="image">Select image to upload:</label>
            <input type="file" class="form-control-file" id="image" name="image" required>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
 <div class="col-md-4 "></div>
 <div class="col-md-4 "></div>
  </div>
  


  </div>
</div>
</div>

  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
