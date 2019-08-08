<?php
if(isset($_POST['submit']))
{
  $id=$_POST['id'];
  $name=$_POST['name'];
  $email=$_POST['email'];

  $link=mysqli_connect("localhost","admin","admin","reg_details");
  if($link === false)
  {
    die("Error".mysqli_connect_error());
  }
  $sql="insert into details values('$id','$name','$email',' ')";
  if(mysqli_query($link,$sql))
  {
    $msg='Registered Succefully';

    echo "<script>alert('$msg');</script>";
    echo "<script> location.href='index.html'; </script>";

  }
  else {

    // echo "Error adding".mysqli_error($link);
    $msg='UserName Already exists';
    echo "<script>alert('$msg');</script>";

    }
}


else {
  die("Enter Values");
}

mysqli_close($link);
 ?>
