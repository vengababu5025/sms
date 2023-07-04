<html>
<head>
<link rel="stylesheet" href="styles.css">
<style>
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
</head>
<body>
 <div class="side-menu">
        <div class="brand-name">
            <h1>MENU</h1>
        </div>
        <ul>
            <li>&nbsp; <span><a href="home.php" class="btn"></span> </li>
            <li>&nbsp;<span><a href="add_student.php" class="btn"></a></span> </li>
             <li>&nbsp;<span><a href="view_student.php" class="btn"></a></span> </li>
             <li>&nbsp;<span><a href="section.php" class="btn"></a></span> </li>
			  <li>&nbsp;<span><a href="view_student.php" class="btn"></a></span> </li>
            <li>&nbsp; <span><a href="view_student.php" class="btn"></a></span></li>
            
        </ul>
    </div>
<?php
										      $con=mysqli_connect("localhost","root","","vrjsm");
											  $db=mysqli_select_db($con,'vrjsm');
											  if(isset($_POST['search']))
											  { 
											    $id=$_POST['ro'];
												$query="select * from student where rollno='$id'";
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
            <img class="profile_img" src="<?php echo $row['image_url']; ?>" width="100" height="100">
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
                <th width="30%">Address</th>
                <td width="2%">:</td>
                <td><?php echo $row['address']; ?></td>
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


<?php
										      $con=mysqli_connect("localhost","root","","vrjsm");
											  $db=mysqli_select_db($con,'vrjsm');
											  if(isset($_POST['search']))
											  { 
											    $id=$_POST['ro'];
												$query="select * from marks where rollno='$id'";
												$query_run=mysqli_query($con,$query);
												
												while($row=mysqli_fetch_array($query_run))
												{
												  ?>


 <table class="table table-bordered" border="1">
              <tr>
                <th width="30%">mid1</th>
                <td width="2%">:</td>
                <td><?php echo $row['mid_1']; ?></td>
              </tr>
              <tr>
                <th width="30%">Mid2</th>
                <td width="2%">:</td>
                <td><?php echo $row['mid_2']; ?></td>
              </tr>
			    <tr>
                <th width="30%">endsem</th>
                <td width="2%">:</td>
                <td><?php echo $row['end_sem']; ?></td>
              </tr>
			 
			  <?php
						 
												}
											  }
											  ?>
											  
</body>	
</html>										  