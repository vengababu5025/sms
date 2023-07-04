<?php
//For database connection

$con=mysqli_connect("localhost","root","","vrjsm");

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
								<div class="col-lg-12">
									<div class="card alert">
										<div class="card-header">
                                    <h4> View Students Data </h4>
									
                                    <div class="card-header-right-icon">
                                        <a href="add_student.php" class="btn btn-success" >Add Students</a>
                                    </div>
                                </div>
								<div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                
									<?php
									// PHP script for deliting the records from database
										if(isset($_GET['action'])&&$_GET['action']=="delete"){
		                   //id which we want to delete
									$id=mysqli_real_escape_string($con,$_GET['id']);
											$delet=mysqli_query($con,"delete from `student` WHERE id='$id'");
											if(mysqli_affected_rows($con)>0){
												$msg="<div class='alert alert-success'>Record deleted Successfully</div>";
											}
											else{
												$msg="<div class='alert alert-danger'>Record not deleted Successfully</div>";
											}
											echo $msg;
										}
										?>
										<!-- html table -->
                                        <table class="table table-striped table-bordered"  border="2">
 <thead>
  <tr>
<th>Image</th>
 <th>Id</th>
<th>Roll No</th>
 <th>First Name</th>
 <th>Last Name</th>
<th>Mother Name</th>
<th>Father Name</th>
<th>Date Of Birth</th>
<th>Gender</th>
<th>Mobile</th>
<th>Aadhar No</th>
<th>Department</th>
<th>Year</th>
<th>Section</th>
<th>Address</th>
<th>Action</th>
                                                   
                                                </tr>
                                            </thead>
                                            <?php
											//query for retriving the records from database
												$query= mysqli_query($con,"select * from student");
												foreach($query as $val){
											?>
											<tbody>
                                            <tr>
											    <td><a href="<?php echo $val["image_url"];?>">venga</a></td>
												<td><?php echo $val["id"];?></td>
												<td><?php echo $val["rollno"];?></td>
												<td><?php echo $val["firstname"];?></td>
												<td><?php echo $val["lastname"];?></td>
												<td><?php echo $val["mothername"];?></td>
												<td><?php echo $val["fathername"];?></td>
												<td><?php echo $val["dob"];?></td>
												<td><?php echo $val["gender"];?></td>
												<td><?php echo $val["mobile"];?></td>
												<td><?php echo $val["aadhar"];?></td>
												<td><?php echo $val["department"];?></td>
												<td><?php echo $val["year"];?></td>
												<td><?php echo $val["section"];?></td>
												<td><?php echo $val["address"];?></td>
											
												
												
												
		<!--actions buttons for edit and delete-->										
												<td><a href="edit_student.php?id=<?php echo $val['id']; ?>"  class="btn btn-info" >Edit </a><a href="view_student.php?action=delete&id=<?php echo $val['id']; ?>"  onclick="return confirmm();" class="btn btn-danger" >Delete</a></td>
											</tr>
											</tbody>
											<?php
											}
											?>
                                        </table>
					
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                   
							</div>
						</div>
					</div>
				</div>
			
        <!--bootstrap libraray-->
		<script src="js/bootstrap.min.js"></script>
		
    
	<script>
	// confirmation msg before deleting teh record 
		function confirmm(){
			return confirm("Are you sure to delete this record?");
		}
 </script>

<body>
</html>