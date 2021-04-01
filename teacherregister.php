<?php
if(isset($_POST['submit']))
{
    $rand= rand(10000,99999);

    $uid="TR".$rand."";
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $mobileno=$_POST['mobileno'];
    $dateofbirth=$_POST['dateofbirth'];
    $department=$_POST['department'];
    $two="teacher";
  

  //CONNECTION
  $conn=mysqli_connect('localhost','root','','rakesh');
 
  //INSERT
  $insert="INSERT INTO school(uid,firstname,lastname,mobileno,dateofbirth,department,type)values('$uid','$firstname','$lastname','$mobileno','$dateofbirth','$department','$two')";
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
<h2>TEACHERREGISTER</h2>
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

        <label for="department">select department:</label><br>
        <select  name="department" >
       

        <option value="english">english</option>

        <option value="maths">maths</option>

        <option value="physics">physics</option>
        
        <option value="chemistry">chemistry</option>

        <option value="telugu">telugu</option>

        <option value="sports">sports</option>


        </select><br>



        <button type="submit" name="submit">Submit</button>
       

</form>
</body>
</html>
​
