<?php

$conn = mysqli_connect("localhost","root","","sonet");
 if($conn->connect_error){
  die("connection_aborted ".$conn->connect_error);
 }
 else{
  
  $name= mysqli_real_escape_string($conn,$_REQUEST['name']);
  $email= mysqli_real_escape_string($conn,$_REQUEST['email']);
  $subject= mysqli_real_escape_string($conn,$_REQUEST['subject']);
  $msg= mysqli_real_escape_string($conn,$_REQUEST['message']);
  $sql=" INSERT INTO feedback2 (Name,Email,Subject,Message) VALUES ('$name', '$email', '$subject','$msg')";
}
if(mysqli_query($conn,$sql)){
  echo 'Your Remark Has Been Sent Successfully';
}
else{
  echo "Error: could not execute $sql. ".mysqli_error($conn);
}

mysqli_close($conn);
 ?>