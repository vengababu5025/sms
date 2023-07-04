<?php
//For database connection

$con=mysqli_connect("localhost","root","","vrjsm");

$msg="";
//id of record which we want to edit
$id=mysqli_real_escape_string($con,$_GET['id']);
//for form submit
if(isset($_POST['submit'])){
	//Sql injections
	$id=mysqli_real_escape_string($con,$_POST['adno']);
	$rollno=mysqli_real_escape_string($con,$_POST['rno']);
	$first_name=mysqli_real_escape_string($con,$_POST['fname']);
	$last_name=mysqli_real_escape_string($con,$_POST['lname']);
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
if($_FILES['image']['name']==NULL)
	$update=mysqli_query($con,"UPDATE `student` SET `id`='$id',`rollno`='$rollno',`firstname`='$first_name',`lastname`='$last_name',`mothername`='$mothername',`fathername`='$fathername',`dob`='$dob',`gender`='$gender',`mobile`='$mobile',`aadhar`='$aadhar',`department`='$department',`year`='$year',`section`='$section',`address`='$address' where id ='$id'");
else{
$file=$_FILES['image']['name'];
	$dst="./image/".$file;
	$dst_db="image/".$file;
	move_uploaded_file($_FILES['image']['tmp_name'],$dst);
$update=mysqli_query($con,"UPDATE `student` SET `id`='$id',`rollno`='$rollno',`firstname`='$first_name',`lastname`='$last_name',`mothername`='$mothername',`fathername`='$fathername',`dob`='$dob',`gender`='$gender',`mobile`='$mobile',`aadhar`='$aadhar',`department`='$department',`year`='$year',`section`='$section',`address`='$address',`image_url`='$dst_db' where id ='$id'");	
}
	
	//query to update records in database
	
	if(mysqli_affected_rows($con)>0){
		?><script>alert("record updated sucessfully");
            window.open('view_student.php','_self');
    </script><?php
		
	}
	else{
		$msg="<div class='alert alert-danger'>Record not updated Successfully</div>";
	}
}
//query for retriving the records which we want to edit
$query=mysqli_query($con,"select * from student where id='$id'");
$row=mysqli_fetch_array($query);
?>

<html>
  <head>
	<title> </title>
				<!--bootstrap libraray-->
				<link rel="stylesheet" href="css/bootstrap.min.css">
				<!--custom css-->
				<link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
<div class="content-wrap">
				<div class="main">
					<div class="container-fluid">
						
						<!-- /# row -->
						<div id="main-content" >

			<div class="row">
				<div class="col-sm-8 offset-2">
						<h1 class="">Edit Student</h1>
					
					<div class="col-sm-12">
					<?php
					echo $msg;
					?>
						<form action="" method="post" enctype="multipart/form-data" role="form" data-toggle="validator">
						 <table border="2" align="center">
    <tr>
	
		<td >Admission no:</td><td><input type="number" name="adno" class="form-control" value="<?php echo $row['id']; ?>"></input></td>
		<td >Roll number:</td><td><input type="text" name="rno" class="form-control"value="<?php echo $row['rollno']; ?>"></input></td>
	  </tr>
	  <tr>
		<td>First name</td>
		<td ><input type="text" name="fname" class="form-control" value="<?php echo $row['firstname']; ?>"></input></td>
		<td>Last name</td>
		<td ><input type="text" name="lname" class="form-control"value="<?php echo $row['lastname']; ?>"></input></td>
	  </tr>
	  <tr>
		<td>Father Name</td>
		<td ><input type="text" name="faname" value="<?php echo $row['fathername']; ?>" class="form-control"></input></td>
		<td>Mother Name</td>
		<td ><input type="text" name="mname" value="<?php echo $row['mothername']; ?>" class="form-control"></input></td>
		</tr>
		<tr>
		<td>Date Of Birth</td>
		<td ><input type="date" name="dob" class="form-control" value="<?php echo $row['dob']; ?>"></input></td>
		<td ><input type="radio" name="gender" class="form-control" value="male" <?php if($row['gender']=="male"){echo "checked";}?>>male</input>
		      <input type="radio" name="gender" class="form-control" value="female" <?php if($row['gender']=="female"){echo "checked";}?>>female</input></td>
		</tr>
		 <tr >
	  <td>Aadhar number</td>
	  <td><input type="edit" name="ano" class="form-control" value="<?php echo $row['aadhar']; ?>" ></input></td>
		<td>Mobile number</td>
		 <td> 
		<input type="edit" name="mno" class="form-control" value="<?php echo $row['mobile']; ?>"  ></input></td>
		
	  </tr>
	  
	  <tr>
	   <td>Department</td>
	  <td> <select name="depa" value="<?php echo $row['department'];?>"  required="required">

	     <option>CSE</option>
	     <option>ECE</option>
		 <option>EEE</option>
		 <option>MECH</option>
		  <option>CIVIL</option>
		   <option>IT</option>
		    <option>AID</option>
	   </select>
	   </td>
	   <td> <select name="year" value="<?php echo $row['year'];?>"  required="required">

	     <option>1</option>
	     <option>2</option>
		 <option>3</option>
		 <option>4</option>
	   </select>
	   </td>
	    <td>Section</td>
	   <td>
	   <select name="sec" value="<?php echo $row['section']; ?>"  required="required">

	     <option>---</option>
	     <option>A</option>
		 <option>B</option>
		 <option>C</option>
	   </select>
	   </td>
	   </tr>
	   <tr>
	     <td>Address</td>
		 <td colspan="3"><input type="text" value="<?php echo $row['address'];?>"  name="addrs" class="form-control"  ></td>
	   </tr>
	   
	   <tr>
	     <td> OLD image</td>
		 <td colspan="3"><img height="200" width="200" src="<?php echo $row['image_url'];?>"></td>
	   </tr>
	   
	   <tr>
	     <td>Choose new image</td>
		 <td colspan="3"><input type="file" name="image"></td>
	   </tr>
		</table>
   <center> <input type="submit" class="btn btn-primary" name="submit" value="update">
						
		
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	<body>
</html>