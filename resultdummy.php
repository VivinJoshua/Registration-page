<?php
$link=mysqli_connect("localhost","admin","admin","reg_details");
if($link === false)
{
  die("Error".mysqli_connect_error());
}

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
