<?php

// remove php error messages
 error_reporting(E_ALL ^ E_DEPRECATED);

  mysql_connect("localhost","root","");
  mysql_select_db("test1_ajax");

  $firstname=$_POST["firstname"];
  $lastname=$_POST["lastname"];
  $email=$_POST["email"];
  $phonenumber=$_POST["phonenumber"];
  $message=$_POST["message"];

  //storing file in filename variable
    $fileName = $_FILES['file']['name'];
    //destination directory
    $to="resume/".$fileName;

    move_uploaded_file($_FILES['file']['tmp_name'],$to);

  $query=mysql_query("INSERT INTO common(firstname,lastname, email, phonenumber, message, destination) values('$firstname','$lastname','$email','$phonenumber', '$message', '$to') ");

  if($query){
    echo "Your comment has been sent";
  }
  else{
    echo "Error in sending your comment";
  }

?>
