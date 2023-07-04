
<html>
<head>
   <link rel="stylesheet" href="styles.css">
   <style>
   .tab{
  padding-top:6%;
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
             <li><img src="reading-book (1).png" alt="">&nbsp;<span><a href="section.php" class="btn">Depatment</a></span> </li>
			  <li><img src="reading-book (1).png" alt="">&nbsp;<span><a href="view_student.php" class="btn">Marks</a></span> </li>
            <li><img src="help-web-button.png" alt="">&nbsp; <span><a href="view_student.php" class="btn">Help</a></span></li>
            
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
          <option>Department</option>
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
	   
	  
	   <th> <input type="radio"name="subject" value="MEAFA" class="form-control">MEAFA</input>
		      <input type="radio" name="subject" value="DAA" class="form-control">DAA</input>
              <input type="radio" name="subject" value="OS" class="form-control">OS</input>
		      <input type="radio" name="subject" value="SE" class="form-control">SE</input>
			  <input type="radio" name="subject" value="CN" class="form-control">CN</input>
			  </th>
	   
	 <TH><input class="btn" type="submit" name="search" value="show"></TH>
	 
   </tr>
  </table>
  
  </form>
  <?php
  
   $con=mysqli_connect("localhost","root","","vrjsm");
											  $db=mysqli_select_db($con,'vrjsm');
											  ?>
  <form action="code.php" method="post">
<table>
 <th>
	          <input type="radio" name="mid" value="mid1" class="form-control">mid1</input>
		      <input type="radio" name="mid" value="mid2" class="form-control">mid2</input></td>
			   <input type="radio" name="mid" value="esm" class="form-control">End semister</input></td> 
	   </th>
</table>
    <table border="2" align="center">
	<tr><td colspan="9" style="text-align:center;font-weight:bold">ACADEMIC RECORD</td></tr>
	      


		<tr style="text-align:center" width="40">
		    <th >subject</th>
			<th >Roll number</th>
	        <th>marks</th>
			
			
		
			
		 </tr>
		 
	
		 
		 
		 <?php
			 if(isset($_POST['search']))
				{ 
					$sub=$_POST['subject'];
					$department=$_POST['depa'];
					$section=$_POST['sec'];
					$year=$_POST['year'];
					$query="select *from student where department='$department' and section='$section' and year='$year'";
					$query_run=mysqli_query($con,$query);
					while($val=mysqli_fetch_array($query_run))
					{
					 ?>
												  
<tr>
<td><input type="text" name="su[]" value="<?php echo $sub;?>"></input></td>
<td><input type="text" name="rno[]" value="<?php echo $val["rollno"];?>"></input></td>
<td><input type="text" name="fm[]" id="firstnumber_1"></input></td>
</tr>
		<?php
			}
		}
		?>
		 
	</table>
	<center> <input type="submit" class="btn" name="submit" value="update marks">
</form>
<?php
?>
		 </div>
		</div>
</body>
</html>