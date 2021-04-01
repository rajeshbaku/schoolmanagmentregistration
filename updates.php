<?php
//CONNECTION
$conn=mysqli_connect('localhost','root','','rakesh');
//READ
$read="SELECT * from school where type='student'";
$query=mysqli_query($conn,$read);



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
    $class=$_POST['class'];
    $fees=$_POST['fees'];
    $paid=$_POST['paid'];
    $remaining=$_POST['remaining'];
    $one="student";

  //CONNECTION
  $conn=mysqli_connect('localhost','root','','rakesh');
  $update="UPDATE school SET uid='$uid',firstname='$firstname',lastname='$lastname',mobileno='$mobileno',dateofbirth='$dateofbirth',class='$class',fees='$fees', paid='$paid',remaining='$remaining'WHERE id='$id'";
  $query=mysqli_query($conn,$update);
}

  ?>
<html>
<body>
<h2>STUDENTREGISTER</h2>
​
<form action="" method="POST">

        <label for="id">Uid:</label><br>
        <input type="Id"  name="uid" minlength="5" value="<?php echo"$uid"; ?>"><br>
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" class="form-control" type="text" pattern="[a-zA-Z][a-zA-Z ]{0,}"  name="firstname" value="<?php echo"$firstname"; ?>" ><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lastname" pattern="[a-zA-Z][a-zA-Z ]{0,}" value="<?php echo"$lastname"; ?>"><br>
        <label for="fname">mobileno:</label><br>
        <input type="tel"name="mobileno"id="phone_number" pattern="^\d{10}$" required="required" value="<?php echo"$mobileno"; ?>">
          <br>
        <label for="lname">date of birth:</label><br>
        <input type="text" id="dateofbirth" name="dateofbirth" value="<?php echo"$dateofbirth"; ?>"><br>



                
        <label for="class">select class:</label><br>
        <select  name="class" >
        <option value="6th">6th</option>

        <option value="7th">7t</option>

        <option value="8th">8th</option>

        <option value="9th">9th</option>
        
        <option value="10th">10th</option>

        </select><br>


        <label for="lname">Fees</label><br>
        <input type="number"  name="fees" value="<?php echo"$fees"; ?>"><br>

        <label for="lname">paid:</label><br>
        <input type="number"  name="paid" value="<?php echo"$paid"; ?>"><br>

        <label for="lname">Remaining:</label><br>
        <input type="number"  name="remaining" value="<?php echo"$remaining"; ?>"><br>

        <button type="submit" name="update">update</button>
       

</form>
</body>
</html>


<br>
