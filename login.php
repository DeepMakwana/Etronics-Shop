<?php
include 'connect.php';
?>
<html>
<head>

<style>
/* Bordered form */
form {
    border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
    width: 25%;
    align: center;
    padding: 12px 20px;
    margin: 8px ;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #000;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;
    align:center;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
    width: 20%;
    padding: 10px 18px;
    background-color: grey;
    align:center;
}

/* Center the avatar image inside this container */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

/* Avatar image */
img.image {
    width: 40%;
    border-radius: 50%;
}

/* Add padding to containers */
.container {
    padding: 16px;
}

/* The "Forgot password" text */


</style>

    <title> ETRONCS LOGIN </title>
</head>
<body>

	<form action="authenticate.php" method='post'>
		<div class="imgcontainer">
                    <img src="etronics-1437056133.jpg" width=10% alt="image" />
  </div>
            <center>
  <div class="container">
      
      <label><b><u>UserID:</u></b></label><br>
              <td><input type="text" placeholder="Enter UserID" name="userid"  required>
    <br>
    
    <label><b><u>Password:</u></b></label><br>
    <input type="password" placeholder="Enter Password" name="password"  required><br>
    <input type="checkbox" checked="checked"> Remember me<br>       
		   <button type="submit">Login</button>
  </div>

                <div class="container">
                    <button type="button" class="cancelbtn">Register</button></div>
  </div></center>
	</form>
</body>
</html>
