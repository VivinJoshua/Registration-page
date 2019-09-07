<?php
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $pass=$_POST['pass'];
  // echo $name;
  // echo $pass;

$link=mysqli_connect("localhost","#","#","#");
if($link === false)
{
  die("Error".mysqli_connect_error());
}
$sql="SELECT * FROM login where name='$name' and password='$pass'";
$result=mysqli_query($link,$sql);
$row=$result->fetch_assoc();
if($row['Name']==$name && $row['password']==$pass)
{
  // echo "success";
  // echo "<script> location.href='result.php'; </script>";
  $query="select * from details order by s_no";
$result=mysqli_query($link,$query);
if(!$result)
{
  die("Error");
}
// if (mysql_num_rows($result) == 0)
// {
//   die("Empty");
// }

?>
<!DOCTYPE html>
<html>
    <head>
        <title> result data </title>
        <link rel="stylesheet" href="main.css">

        <style media="screen">
        body
        {
          margin-top: 0;
          margin-left: 200px;
        }

          th
          {
            color:#000;
          }
        </style>
    </head>

    <body>
      <h2>Registered Students</h2>
        <table width="600"  border="1">

           <tr bgcolor="#DBD032">
                      <th>S.No</th>
                     <th> ID</th>
                     <th>Name</th>
                     <th>Email</th>
           </tr>
<?php
while($row=$result->fetch_assoc())
{
  echo "<tr>";
  echo "<td>".$row['s_no']."</td>";
  echo "<td>".$row['Id']."</td>";
  echo "<td>".$row['name']."</td>";
  echo "<td>".$row['mail_id']."</td>";

  echo "</tr>";
}
 ?>
 <div class="footer">
 <form class="" action="admin.html" method="post">
         <input type="submit" name="submit" value="Logout">
 </form>
 </div>

</table>
</body>
</html>
<?php
}

else
{
    $msg='Invalid Entry';
   echo "<script>alert('$msg');</script>";
   echo "<script> location.href='admin.html'; </script>";
}
// echo mysqli_query($link,$sql);
// echo $mysqli_result->num_rows;
// if ($mysqli_result->num_rows == 0)
// {
//   // die("Empty");
// // }
// // if(!$result)
// // {
//   $msg='Invalid Entry';
//
//   echo "<script>alert('$msg');</script>";
//   echo "<script> location.href='admin.html'; </script>";
// }
// else {
//   echo "success";
// echo "<script> location.href='result.php'; </script>";
// }
}
 ?>
