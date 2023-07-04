<html>
<head>
   <link rel="stylesheet" href="styles.css">
   <style>
   .tab{
  padding-top:7%;
   }
   	  .side-menu {
    position: fixed;
   background:#6c7cee;
    width: 20vw;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}
.btn {
    background:#6c7cee;
    color: white;
    padding: 5px 10px;
    text-align: center;
}
.btn:hover {
    color: white;
    background:#6c7cee;
    padding: 3px 8px;
    border: 2px solid #f05462;
}
.hide{
	display:none;
	position:absolute;
	margin:0px;
	padding:0px;
}
   </style>
<head>
<body>
       <div class="side-menu">
        <div class="brand-name">
            <h1>MENU</h1>
        </div>
        <ul>
            <li><img src="dashboard (2).png" alt="">&nbsp; <span><a href="home.php" class="btn">Dashboard</a></span> </li>
            <li><img src="reading-book (1).png" alt="">&nbsp;<span><a href="add_student.php" class="btn">Add Students</a></span> </li>
             <li><img src="reading-book (1).png" alt="">&nbsp;<span><a href="view_student.php" class="btn">Show Student</a></span> </li>
             <li><img src="reading-book (1).png" alt="">&nbsp;<span><a href="#" class="btn">Depatment</a></span> </li>
			  <li><img src="reading-book (1).png" alt="">&nbsp;<span><a href="marks.php" class="btn">Marks</a></span> </li>
            <li><img src="help-web-button.png" alt="">&nbsp;<span><a href="#" class="btn"> Help</a ></span></li>
            
        </ul>
    </div>
	<div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                   
                   <H1> STUDENT RECORD MANAGEMENT SYSTEM</H1>
                </div>
                <div class="user">
                    <a href="#" class="btn">Add New</a>
                    <img src="notifications.png" alt="">
                    <div class="img-case">
                        <img src="user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
		 <div class="tab">
	          <form action="" method="post">
  <table border="1">
   <tr>
   <th ><select name="depa"   required="required">
         <option>department</option>
	      <option>CSE</option>
	     <option>ECE</option>
		 <option>EEE</option>
		 <option>MECH</option>
		  <option>CIVIL</option>
		   <option>IT</option>
		    <option>AID</option>
	   </select></th>
	   
	   <th> <select name="year" value="<?php echo $row['year'];?>"  required="required">

	    <option>Year</option>
		<option>1</option>
	     <option>2</option>
		 <option>3</option>
		 <option>4</option>
	   </select>
	   </th>
    <th> <select name="sec" required="required">

	    <option>Section</option>
		<option>---</option>
	     <option>A</option>
		 <option>B</option>
		 <option>C</option>
	   </select></th>
	   <TH><input class="btn" type="submit" name="search" value="show"></TH>
	 
   </tr>
  </table>
  
  </form>

<table class="table table-striped table-bordered" border="2">
<thead>
<tr>
												
<th>Roll No</th>
	<th>First Name</th>
	 <th>Last Name</th>
	<th>Mother Name</th>
	<th>Father Name</th>
	<th>Dob(yyyy/mm/dd)</th>
	<th>Mobile</th>
    <th>Aadhar No</th>
	<th>Department</th>
	<th>Section</th>
	<th>Address</th>
</tr>
</thead>
	<?php
		 $con=mysqli_connect("localhost","root","","vrjsm");
		 $db=mysqli_select_db($con,'vrjsm');
		if(isset($_POST['search']))
		 { 
			 $department=$_POST['depa'];
			$section=$_POST['sec'];
			$year=$_POST['year'];
			$query="select *from student where department='$department' and section='$section' and year='$year'";
			$query_run=mysqli_query($con,$query);
			while($val=mysqli_fetch_array($query_run))
		{
	?>
	 <tr>
	<td><?php echo $val["rollno"];?></td>
	<td><?php echo $val["firstname"];?></td>
	<td><?php echo $val["lastname"];?></td>
	<td><?php echo $val["mothername"];?></td>
	<td><?php echo $val["fathername"];?></td>
	<td><?php echo $val["dob"];?></td>
<td><?php echo $val["mobile"];?></td>
<td><?php echo $val["aadhar"];?></td>
<td><?php echo $val["department"];?></td>
<td><?php echo $val["section"];?></td>
<td><?php echo $val["address"];?></td>
<?php
}
  }
 ?>
  </div>
		</div>
</body>
</html>