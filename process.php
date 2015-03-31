<?php
  mysql_connect("localhost","root","");
  mysql_select_db("test1_ajax");

  $name=$_POST["name"];
  $message=$_POST["message"];
  //storing file in filename variable
    $fileName = $_FILES['file']['name'];
    //destination dir
    $to="resume/".$fileName;

    move_uploaded_file($_FILES['file']['tmp_name'],$to);

  $query=mysql_query("INSERT INTO common(name,message,destination) values('$name','$message','$to') ");

  if($query){
    echo "Your comment has been sent";
  }
  else{
    echo "Error in sending your comment";
  }

?>
