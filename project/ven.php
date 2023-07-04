<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>



h1{
	      text-shadow:2px 3px 5px blue;
		  color:red;
		  text-align:center;
		  font-size:50px;
		  }
		  
h2{
    text-shadow:2px 3px 5px blue;
		  color:red;
		  font-size:40px;
		  }
    
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
  padding: 1% 1% 1%;
  margin: 1% 2%;
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
.student-profile .card {
  border-radius: 10px;
  margin:%;

}

.student-profile .card .card-header .profile_img {
  width: 150px;
  height: 150px;
  object-fit: cover;
  margin-top:10px auto;
}

.student-profile .card h3 {
  font-size: 20px;
  font-weight: 700;
}

.student-profile .card p {
  font-size: 16px;
  color: #000;
}

.student-profile .table th,
.student-profile .table td {
  font-size: 14px;
  padding: 5px 10px;
  color: #000;
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
<form method="post" action="">
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
 
<?php
										      $con=mysqli_connect("localhost","root","","vrjsm");
											  $db=mysqli_select_db($con,'vrjsm');
											  if(isset($_POST['search']))
											  { 
											    $id=$_POST['ro'];
												$query="select s.id,s.rollno,s.firstname,s.lastname,s.mothername,s.fathername,s.dob,s.gender,s.mobile,s.aadhar,s.department,s.year,s.section,s.address,s.image_url,m.mid_1,m.mid_2 from student s inner join marks m on s.rollno=m.rollno;
												$query_run=mysqli_query($con,$query);
												
												while($row=mysqli_fetch_array($query_run))
												{
												  ?>
  <div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="<?php echo $row['image_url']; ?>">
            <h3><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></h3>
          </div>
          <div class="card-body">
           
            <p class="mb-0"><strong class="pr-1">Class:</strong><?php echo $row['department']; ?>-<?php echo $row['year']; ?><sup>nd</sup>Year</p>
            <p class="mb-0"><strong class="pr-1">Section:</strong><?php echo $row['section']; ?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered" border="1">
              <tr>
                <th width="30%">Roll</th>
                <td width="2%">:</td>
                <td><?php echo $row['rollno']; ?></td>
              </tr>
              <tr>
                <th width="30%">Mother name</th>
                <td width="2%">:</td>
                <td><?php echo $row['mothername']; ?></td>
              </tr>
			    <tr>
                <th width="30%">Father name</th>
                <td width="2%">:</td>
                <td><?php echo $row['fathername']; ?></td>
              </tr>
			    <tr>
                <th width="30%">Date of Birth</th>
                <td width="2%">:</td>
                <td><?php echo $row['dob']; ?></td>
              </tr>
			    <tr>
                <th width="30%">Mobile number</th>
                <td width="2%">:</td>
                <td><?php echo $row['mobile']; ?></td>
              </tr>
			    <tr>
                <th width="30%">Aadhar number</th>
                <td width="2%">:</td>
                <td><?php echo $row['aadhar']; ?></td>
              </tr>
			    <tr>
                <th width="30%">Addre</th>
                <td width="2%">:</td>
                <td><?php echo $row['address']; ?></td>
              </tr>
			  <tr>
                <th width="30%">mid1</th>
                <td width="2%">:</td>
                <td><?php echo $row['mid_1']; ?></td>
              </tr>
			  <tr>
                <th width="30%">mid2</th>
                <td width="2%">:</td>
                <td><?php echo $row['mid_2']; ?></td>
              </tr>
			 
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
						 
												}
											  }
											  ?>


</body>
</html>





