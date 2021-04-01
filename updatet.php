<?php
//CONNECTION
$conn=mysqli_connect('localhost','root','','rakesh');
//READ
$read="SELECT * from school where type='teacher'";
$query=mysqli_query($conn,$read);



while($row=mysqli_fetch_array($query))
{
    $id=$row['id'];
    $uid=$row['uid'];
    $firstname=$row['firstname'];
    $lastname=$row['lastname'];
    $mobileno=$row['mobileno'];
    $dateofbirth=$row['dateofbirth'];
    $department=$row['department'];
    
  
}

?>

<?php
if(isset($_POST['update']))
{
    $uid=$_POST['uid'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $mobileno=$_POST['mobileno'];
    $dateofbirth=$_POST['dateofbirth'];
    $department=$_POST['department'];
    $two="teacher";
  

  //CONNECTION
  $conn=mysqli_connect('localhost','root','','rakesh');
  $update="UPDATE school SET uid='$uid',firstname='$firstname',lastname='$lastname',mobileno='$mobileno',dateofbirth='$dateofbirth',department='$department'WHERE id='$id'";
  $query=mysqli_query($conn,$update);

}
 ?>






<html>
<body>
<h2>TEACHERREGISTER</h2>
​
<form action="" method="POST">

        <label for="id">Uid:</label><br>
        <input type="Id"  name="uid" minlength="5" value=<?php echo"$uid"; ?>><br>
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" class="form-control" type="text" pattern="[a-zA-Z][a-zA-Z ]{0,}"  name="firstname" value="<?php echo"$firstname"; ?>" ><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lastname" pattern="[a-zA-Z][a-zA-Z ]{0,}" value="<?php echo"$lastname"; ?>" ><br>
        <label for="fname">mobileno:</label><br>
        <input type="tel"name="mobileno"id="phone_number" pattern="^\d{10}$" required="required" value="<?php echo"$mobileno"; ?>">
          <br>
        <label for="lname">date of birth:</label><br>
        <input type="text" id="dateofbirth" name="dateofbirth" value="<?php echo"$dateofbirth"; ?>"><br>

        <label for="department">select department:</label><br>
        <select  name="department" >
       

        <option value="english">english</option>

        <option value="maths">maths</option>

        <option value="physics">physics</option>
        
        <option value="chemistry">chemistry</option>

        <option value="telugu">telugu</option>

        <option value="sports">sports</option>


        </select><br>



        <button type="submit" name="update">update</button>
       
​

</body>
</html>