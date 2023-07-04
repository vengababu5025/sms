<html>
<head>
   <link rel="stylesheet" href="styles.css">
   <style>
   .tab{
  padding-top:6%;
   }
   </style>
<head>
<body>
       
	
	          <form action="" method="post">
  <table border="1">
   <tr>
  
	   
	  
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
  <form action="code1.php" method="post">

    <table border="2" align="center">
	<tr><td colspan="9" style="text-align:center;font-weight:bold">ACADEMIC RECORD</td></tr>
	      


		<tr style="text-align:center" width="40">
		    <th >Roll number</th>
		    <th >subject</th>
	        <th>mid_avg</th>
			<th>End Semister</th>
			<th>Total Marks</th>
			
			
		
			
		 </tr>
		 
	
		 
		 
		 <?php
										     
											  if(isset($_POST['search']))
											  { 
											    $sub=$_POST['subject'];
											   
												$query="select * from mid_2 where sub='$sub'";
												$query_run=mysqli_query($con,$query);
												
												while($val=mysqli_fetch_array($query_run))
												{
												  ?>
												  
												<tr>
												<td><input type="text" name="rno[]" value="<?php echo $val["rollno"];?>"></input></td>
												<td><input type="text" name="su[]" value="<?php echo $val["sub"];?>"></input></td>
												<td><input type="text" name="avg[]" value="<?php echo $val["mid_avg"];?>"></input></td>
												<td><input type="text" name="esm[]" value="<?php echo $val["endsem"];?>"></input></td>
												<td><input type="number" name="total[]" value="<?php 
		//average calculation										
		$number1 = $val["mid_avg"];  
        $number2 = $val["endsem"];  
		$result=$number1+$number2;
		echo $result;
												
												?>"></input></td>
												
												</tr>
											<?php
						 
												}
											  }
											  ?>
											  
											  
											  
		 
	</table>
	<center> <input type="submit" class="btn" name="update" value="update marks">
</form>
<?php
?>
											  </div>
		</div>
 
</body>
</html>




	
	
	