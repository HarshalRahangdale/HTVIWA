<?php
include'admin/db.php';
include'admin/fun.php';
$obj1=new connect();

$obj2=new fun($obj1->dbconnect());

$error=false;
$catname='';

$alert='';


  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $mobile=$_POST['mobile'];
  $state=$_POST['state'];
  $city=$_POST['city'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  






          $result=$obj2->add_user_details($firstname,$lastname,$mobile,$state,$city,$username,$password);
           
                                   if($result==0){
                            $alert='<div class="alert alert-danger" style="color:white">
                          <strong>failed!</strong>  entry already exists.
                        </div>';
                         }else if($result){
                           header("Location:index.php");

                          }else{
                            $alert='<div class="alert alert-danger" style="color:white">
                          <strong>failed!</strong> entry Unsuccessful.
                        </div>';
                          }             


?>