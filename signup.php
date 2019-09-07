<?php
$link=mysqli_connect("localhost","#","#","#");
if(!$link)
    die("error connection".mysqli_connect_error());
$name=$_POST['name'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
if($pass==$cpass)
{
  $sql="insert into login values('$name','$pass')";
  if(mysqli_query($link,$sql))
    {
        $msg='Signed Up Succefully';
        echo "<script>alert('$msg');</script>";
        echo "<script> location.href='admin.html'; </script>";
    }
  else {
        // echo "Error adding".mysqli_error($link);
        $msg='UserName Already exists';
        echo "<script>alert('$msg');</script>";
        echo "<script> location.href='signup.html'; </script>";
        }
}
else {
  $msg='Password and Confirm password mismatch';
 echo "<script>alert('$msg');</script>";
}
mysqli_close($link);
 ?>
