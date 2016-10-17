<!DOCTYPE html>
<?php
include 'connect.php';
?>

<html lang="en">
<head>
  <title>ETRONICS SHOP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="strength.js"></script>
   <style>
      .w3-theme-d1 {color:#000 !important; background-color:#ecb535 !important}
    /* Remove the navbar's default rounded borders and increase the bottom margin */
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
	/* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
	 a, .dropbtn {
    display: inline-block;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	}
	progress {
		color: #0063a6;
		font-size: .6em;
		line-height: 1.5em;
		width: 150px;
		height: 20px;
		border: 1px solid 0063a6;
		background: #fff;
	}
	progress::-moz-progress-bar {background:0063a6;}
	progress::-webkit-progress-bar (background: #fff;)
	progress::-webkit-progress-value {background: #0063a6;}
	</style>
</head>
<body>
<form action="register_insert.php" method='post'>
<div class="jumbotron">
  <div class="container">
      <div class="row"> 
          <div class="col-md-4">
              <img src="etronics-1437056133.jpg" width="50%" style="align:center;" />
          </div>
          <div class="col-md-8">
             <h1>ETRONICS SHOP</h1>
             <p>Enjoy Excellent Shopping Experience</p>
          </div>
  </div>
</div>
<nav class="navbar navbar-inverse">
  <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-center">
          <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"> </span> Home</a></li>
		  <li class-"active"><a href="login.php">Login</a></li>
	  </ul>
  </div>
</nav>
		
			<table align="center">
				<tr>
					<td>Name:<br><br></td>
					<td><input type ="text" name="name" maxlength=50 required/><br><br></td>
                                </tr>
                                <tr>
                                    <td>Address:</td>
                                    <td><textarea name="address" cols="22" rows="10" required></textarea><br><br></td>
                                </tr>
                                 <tr>
                                    <td>Contact Number:<br><br></td>
                                    <td><input type="number" name="contact" required><br><br></td>
                                </tr>
				<tr>
					<td>Email<br><br></td>
					<td><input type="email" name="email" maxlength=50 required/><br><br></td>
				</tr>
                                <tr>
                                    <td>User ID:<br><br></td>
                                    <td><input type="text" name="userid" required><br><br></td>
                                </tr>
				<tr>
					<td>Password<br><br></td>
					<td><input type="password" name="password" id="password" onkeyup="get_result()" maxlength=50 required>&emsp;Strength: <progress value=0 max=5 id="strength"></progress><br><br></td>
				</tr>
				<tr>
					<td colspan=2><center><input type="submit" name="register_submit"/></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>