
<?php
if(isset($_POST['submit']))
{
    $rand =  rand(100000,999999); //345667
    $uid="SR".$rand."";
    
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
 
  //INSERT
  $insert="INSERT INTO school(uid,firstname,lastname,mobileno,dateofbirth,class,fees,paid,remaining,type)values('$uid','$firstname','$lastname','$mobileno','$dateofbirth','$class','$fees','$paid','$remaining','$one')";
  $query=mysqli_query($conn,$insert);
 



}
?>
<!DOCTYPE html>
<html>
<style>
input[type=text],input[type=password],input[type=tel],input[type=email],input[type=number],input[type=id],input[type=date],select {
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

​
<h2>STUDENTREGISTER</h2>
​
<form action="" method="POST">

        <label for="fname">First name:</label><br>
        <input type="text" id="fname" class="form-control" type="text" pattern="[a-zA-Z][a-zA-Z ]{0,}"  name="firstname" ><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lastname" pattern="[a-zA-Z][a-zA-Z ]{0,}" ><br>
        <label for="fname">mobileno:</label><br>
        <input type="tel"name="mobileno"id="phone_number" pattern="^\d{10}$" required="required"/>
          <br>
        <label for="lname">date of birth:</label><br>
        <input type="date" id="dateofbirth" name="dateofbirth"><br>



                
        <label for="class">select class:</label><br>
        <select  name="class" >
        <option value="6th">6th</option>

        <option value="7th">7t</option>

        <option value="8th">8th</option>

        <option value="9th">9th</option>
        
        <option value="10th">10th</option>

        </select><br>


        <label for="lname">Fees</label><br>
        <input type="number"  name="fees"><br>

        <label for="lname">paid:</label><br>
        <input type="number"  name="paid"><br>

        <label for="lname">Remaining:</label><br>
        <input type="number"  name="remaining"><br>

        <button type="submit" name="submit">Submit</button>
       

</form>
</body>
</html>
​
