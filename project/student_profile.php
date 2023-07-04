<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>



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
  background-color:rgb(0,0,0,0.3);
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
  margin: 0 0 15px;  padding: 15px;
  box-sizing: border-box;
  font-size: 20px;
  border-radius:10px 10px 10px 10px;
 
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
  background-color:skyblue;
  background-image: url(lbg.jpg);
   background-repeat:no-repeat;
	 background-size:cover;
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
} 
.login-header{
	font-size:16px;
	color:white;
}
</style>
<link rel="stylesheet" href="./materialize.css">
</head>
<body>
<h1><center></br>Welcome To</br>N.B.K.R Institution of Science and Technology<br><h2>Student Record Management System</h2><center></h1>
<div class="admintitle">
    <div>

    </div>


  
</div>
</div>
<div class="img"></div>
<form method="post" action="student_view.php">
  <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
         
            <h2>Student Details</h2>
          </div>
        </div>
        <form class="login-form" action="ven.php" method="post">
         Enter Rollno:<input type="text" name="ro" placeholder="rollno" require/>
         <input type="submit" name="search" value="show" class="form-control" style="background-color:green;color:white">
        </form>
      </div>
    </div>

</form>
 

											  
											  
											  
 </table>
</body>
</html>





