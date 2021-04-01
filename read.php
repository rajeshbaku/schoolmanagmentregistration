<?php
SESSION_START();
$id=$_SESSION['data'];
if(!isset($_SESSION['data']))
{
 header('location:login.php');
}

?>
<style>
input[type=text],input[type=password],input[type=tel],input[type=email],input[type=number],input[type=id],select {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body style="background-color:powderblue;">
<?php
//CONNECTION
$conn=mysqli_connect('localhost','root','','rakesh');
//READ
$read="SELECT * from school where type='student' AND uid='$id'";
$query=mysqli_query($conn,$read);

$c = mysqli_num_rows($query);

if($c == '0')
{
  //nothing
}
else
{

echo"
<table border='1'>
<tr>
<th>uid</th>
<th>firstname</th>
<th>lastname</th>
<th>mobileno</th>
<th>dateofbirth</th>
<th>class</th>
<th>fees</th>
<th>paid</th>
<th>remaining</th>
<th>update</th>
<th>delete</th>




</tr>
";


while($row=mysqli_fetch_array($query))
{
    $id=$row['id'];
    $uid=$row['uid'];
    $firstname=$row['firstname'];
    $lastname=$row['lastname'];
    $mobileno=$row['mobileno'];
    $dateofbirth=$row['dateofbirth'];
    $class=$row['class'];
    $fees=$row['fees'];
    $paid=$row['paid'];
    $remaining=$row['remaining'];

    
 



echo"
<tr>
<td>".$uid."</td>
<td>".$firstname."</td>
<td>".$lastname."</td>
<td>".$mobileno."</td>
<td>".$dateofbirth."</td>
<td>".$class."</td>
<td>".$fees."</td>
<td>".$paid."</td>
<td>".$remaining."</td>
<td><a href='updates.php'>update</a></td>
<td><a href='delete.php?id=".$id."'>delete</a></td>




</tr>

";
    
}

echo"</table>";

}
?>
<br>
<?php
//CONNECTION
$conn=mysqli_connect('localhost','root','','rakesh'); 
//READ
$read="SELECT * from school where type='teacher' AND uid='$id'";
$query=mysqli_query($conn,$read);
$cs = mysqli_num_rows($query);

if($cs == '0')
{

}
else
{

echo"
<table border='1'>
<tr>
<th>uid</th>
<th>firstname</th>
<th>lastname</th>
<th>mobileno</th>
<th>dateofbirth</th>
<th>department</th>
<th>update</th>
<th>delete</th>


</tr>
";


while($row=mysqli_fetch_array($query))
{
    $id=$row['id'];
    $uid=$row['uid'];
    $firstname=$row['firstname'];
    $lastname=$row['lastname'];
    $mobileno=$row['mobileno'];
    $dateofbirth=$row['dateofbirth'];
    $department=$row['department'];
    
 



echo"
<tr>
<td>".$uid."</td>
<td>".$firstname."</td>
<td>".$lastname."</td>
<td>".$mobileno."</td>
<td>".$dateofbirth."</td>
<td>".$department."</td>
<td><a href='updatet.php'>update</a></td>
<td><a href='delete.php?id='.$id.''>delete</a></td>




</tr>

";
    
}

echo"</table>";

}
?>