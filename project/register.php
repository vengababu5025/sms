<html>
<head>
</head>
<body>
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);
header .header{
  background-color: #fff;
  height: 45px;
}
header a img{
  width: 134px;
margin-top: 4px;
}
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.login-page .form .login{
  margin-top: -31px;
margin-bottom: 26px;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background-color: #328f8a;
  background-image: linear-gradient(45deg,#328f8a,#08ac4b);
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}

.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}

body {
  background-color: #328f8a;
  background-image: url(lbg.jpg);
   background-repeat:no-repeat;
	 background-size:cover;
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
} 
</style>
<body>  
<div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>LOGIN</h3>
            <p>Please enter your credentials to login.</p>
          </div>
        </div>
        <form class="login-form" action="register.php" method="post">
		  <input type="number" name="id" placeholder="id" class="form-control" require/>
          <input type="text" name="uname" placeholder="username" class="form-control" require/>
          <input type="password" name="pass" placeholder="password" class="form-control" require/>
          <input type="submit" name="subit" value="create" class="form-control" style="background-color:green">
          
        </form>
      </div>
    </div> 
</form>
</body>
</html>


<?php
$msg="";
$con=mysqli_connect("localhost","root","","vrjsm");
if(isset($_POST['subit'])){
    $id=mysqli_real_escape_string($con,$_POST['id']);
    $username=mysqli_real_escape_string($con,$_POST['uname']);
	$password=mysqli_real_escape_string($con,$_POST['pass']);

   $insert=mysqli_query($con,"INSERT INTO `admin`(id,username,password) VALUES ('$id','$username','$password')");
	if(mysqli_affected_rows($con)>0){
		?><script>alert("record updated sucessfully");
            window.open('login.php','_self');
    </script><?php
		
	}
	else{
		$msg="<div class='alert alert-danger'>record not added Successfully</div>";
	}
}
?>