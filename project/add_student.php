<?php
//For database connection

$con=mysqli_connect("localhost","root","","vrjsm");

$msg="";
//for form submit
if(isset($_POST['submit'])){
	$id=mysqli_real_escape_string($con,$_POST['adno']);
	$rollno=mysqli_real_escape_string($con,$_POST['rno']);
	$firstname=mysqli_real_escape_string($con,$_POST['fname']);
	$lastname=mysqli_real_escape_string($con,$_POST['lname']);
	$mothername=mysqli_real_escape_string($con,$_POST['mname']);
	$fathername=mysqli_real_escape_string($con,$_POST['faname']);
	$dob=mysqli_real_escape_string($con,$_POST['dob']);
    $gender=mysqli_real_escape_string($con,$_POST['gender']);
	$mobile=mysqli_real_escape_string($con,$_POST['mno']);
	$aadhar=mysqli_real_escape_string($con,$_POST['ano']);
	$department=mysqli_real_escape_string($con,$_POST['depa']);
	$year=mysqli_real_escape_string($con,$_POST['year']);
	$section=mysqli_real_escape_string($con,$_POST['sec']);
	$address=mysqli_real_escape_string($con,$_POST['addrs']);
	$file=$_FILES['image']['name'];
	$dst="./image/".$file;
	$dst_db="image/".$file;
	move_uploaded_file($_FILES['image']['tmp_name'],$dst);
	
	//query to insert records intodatabase
	$insert=mysqli_query($con,"INSERT INTO `student`(id,rollno,firstname,lastname,mothername,fathername,dob,gender,mobile,aadhar,department,year,section,address,image_url) VALUES 
	('$id','$rollno','$firstname','$lastname','$mothername','$fathername','$dob','$gender','$mobile','$aadhar','$department','$year','$section','$address','$dst_db')");
	if(mysqli_affected_rows($con)>0){
		//status message
		?><script>alert("record added sucessfully");
            window.open('home.php','_self');
    </script><?php
	}
	else{
		$msg="<div class='alert alert-danger'>record not added Successfully</div>";
	}
}
?>





<html>
  <head>
<!--bootstrap libraray-->
		<link rel="stylesheet" href="css/bootstrap.min.css">
<!--custom css-->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		<style> 
	body{
	       background:#6c7cee;
		   border:5px;
		   border-style:dashed;
		   
	  }
      table{
	       font-family:verdana;
		   color:white;
		   font-size:20px;
		   font-style:normal;
		   font-weight:bold;
		   
		   border-collapse:collapse;
		  
	  }
	  table.inner{
	               border:10px;
				   }
	  h1{
	      text-shadow:2px 3px 5px blue;
		  color:white;
		  text-align:center;
		  font-size:50px;
		  }
	   input[type=submit],input[type=reset]{
	        padding:6px 12px;
			width:10%;
			box-sizing:border-box;
			margin:5px 0;
			font-size:20px;
			}
			
</style>
  </head>
  <body>
 
	<form action="#" method="POST" enctype="multipart/form-data">
	
   <table border="2" align="center">
    <h1><center>Welcome To N.B.K.R Institution of Science and Technology<center></h1>
    <tr>
	
		<td >Admission no:</td><td><input type="number" name="adno" class="form-control"></input></td>
		<td >Roll number:</td><td><input type="text" name="rno" class="form-control"></input></td>
	  </tr>
	  <tr>
		<td>First name</td>
		<td ><input type="text" name="fname" class="form-control"></input></td>
		<td>Last name</td>
		<td ><input type="text" name="lname" class="form-control"></input></td>
	  </tr>
	  <tr>
		<td>Father Name</td>
		<td ><input type="text" name="faname" class="form-control"></input></td>
		<td>Mother Name</td>
		<td ><input type="text" name="mname" class="form-control"></input></td>
		</tr>
		<tr>
		<td>Date Of Birth</td>
		<td ><input type="date" name="dob" class="form-control"></input></td>
		<td>Gender</td>
		<td ><input type="radio" name="gender" value="male" class="form-control">male</input>
		      <input type="radio" name="gender" value="female" class="form-control">female</input></td>
		</tr>
	  <tr >
	  <td>Aadhar number</td>
	  <td><input type="text" name="ano" class="form-control"  ></input></td>
		<td>Mobile number</td>
		 <td> 
		<input type="text" name="mno" class="form-control"  ></input></td>
		
	  </tr>
       <tr>
	   <td>Department</td>
	  <td > <select name="depa" required="required">

	     <option>CSE</option>
	     <option>ECE</option>
		 <option>EEE</option>
		 <option>MECH</option>
		  <option>CIVIL</option>
		   <option>IT</option>
		    <option>AID</option>
	   </select>
	   </td>
	    <td>year</td>
	  <td> <select name="year" required="required">

	     <option>1</option>
	     <option>2</option>
		 <option>3</option>
		 <option>4<option>
	   </select>
	   </td>
	    <td>Section</td>
	   <td>
	   <select name="sec" required="required">

	     <option>---</option>
	     <option>A</option>
		 <option>B</option>
		 <option>C</option>
	   </select>
	   </td>
	   </tr>
	   <tr>
	     <td>Address</td>
		 <td colspan="4"><textarea cols="100" rows="10" type="text" name="addrs" class="form-control"  ></textarea></td>
	   </tr>
	   
	   <tr>
	   
	   <td>
	   
          
           <input type="file" 
                  name="image">

          
     	

	   </td>
	   </tr>
	   
	 
   </table>
   <center> <input type="submit" class="btn btn-primary" name="submit" value="Add student">
</form>    
	<body>
</html>
