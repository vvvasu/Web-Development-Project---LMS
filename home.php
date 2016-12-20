<?php
  session_start();
  include 'DB.php';

  if (isset($_POST['login'])) {


    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password']);

    $username = stripslashes($username);
    $password = stripslashes($password);


        $username = mysqli_real_escape_string($DB,$username);
        $password = mysqli_real_escape_string($DB,$password);


        $sql = "SELECT * FROM users WHERE username ='$username' ";
        $query = mysqli_query($DB,$sql);

    $row = mysqli_fetch_array($query);
     $id =$row['id'];
     $db_password = $row['password'];

     if( $password == $db_password){

        $_SESSION['username']=$username;
        $_SESSION['id'] = $id;
        header("Location:index.php");

     }echo "error logged in.try again";
  }



 ?>
<!DOCTYPE html>

<html>
    <head>
        <title>NSBM LMS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="lms.css" rel="stylesheet" type="text/css" >

    </head>
    <body >

        <div class="transbox2 divnew" >

            <img src="nsbm.GIF" align="left" width="220px" height="130px" />
            <h1  style="color:#FFFFFF;" ><b><center>National School Of Business Management</center></b></h1>
            <h2  style="color:#FFFFFF;" ><b><center>e-Learning System</center></b></h2>


        </div>
<div class="log">

<br>
<br>
<br>
<br>
<br>
<br>
<form action="home.php" method="post">
<table align="center">
	<tr>
		<td>Index-No:</td>
		<td><input type="text" name="username" id="id"></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type="text" name="password" id="ps"></td>
	</tr>
	<tr>
		<td><input type="submit" name="login" value="LOGIN"></td>
		<td><input type="button" name="can" value="Cancel"></td>
	</tr>

</table>
</form>

<div>

<br>
<br>
<br>
<br>
<br>
<br>

    <div class="box1">
        <center>

            <br><h6 class="h6">Find us on</h6>
             <a href="https://www.facebook.com/nsbm.lk"> <img src="facebook.png" width="50px" height="50px" /> </a>
             <a href=""> <img src="google.gif" width="50px" height="50px" /> </a>
             <a href=""> <img src="youtube.png" width="50px" height="50px" /> </a>
             <a href="https://twitter.com/nsbm_srilanka"> <img src="twitter.jpg" width="50px" height="50px" /> </a>


            <img src="banner.png" align="center" width="1120px" height="90px">
            <br>

            <i><h6>Copyright @ National School of Business Management No 309, High Level Road, Colombo 05, Sri Lanka.</h6></i>
        </center>


    </div>

</body>
</html>
