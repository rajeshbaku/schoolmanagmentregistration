<?php
if(isset($_POST['login']))
{
    $uid=$_POST['uid'];

    //CONNECTION
    $conn=mysqli_connect('localhost','root','','rakesh');
    $check="SELECT * from school where uid='$uid'";
    $query=mysqli_query($conn,$check);
    $row=mysqli_num_rows($query);
    if($row=='0')
    {
        echo"there is no uid...please register <a href='studentregister.php'>studentregister</a><br><a href='teacherregister.php'>teacherregister</a>";
    }
    else
    {
        while($roww=mysqli_fetch_array($query))
        {
            $ui=$roww['uid'];
        }
        if($ui==$uid)
        {
            SESSION_START();
            $_SESSION['data']=$ui;
            header('location:read.php');

        }
        else
        {
            header('no email found');
        }
    }
}



?>



<html>
<body>
    

<h2>LOGIN</h2>
​
<form action="" method="POST">

        <label for="id">Uid:</label><br>
        <input type="Id"  name="uid" minlength="5"><br>
        <button type="login" name="login">login</button>
        

        </body>
        </html>