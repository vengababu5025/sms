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
	        <th>mid1</th>
			<th>mid2</th>
			<th>avg_mid</th>
			
			
		
			
		 </tr>
		 
	
		 
		 
		 <?php
										     
											  if(isset($_POST['search']))
											  { 
											    $sub=$_POST['subject'];
											   
												$query="select * from mid_1 where sub='$sub'";
												$query_run=mysqli_query($con,$query);
												
												while($val=mysqli_fetch_array($query_run))
												{
												  ?>
												  
												<tr>
												<td><input type="text" name="rno[]" value="<?php echo $val["rollno"];?>"></input></td>
												<td><input type="text" name="su[]" value="<?php echo $val["sub"];?>"></input></td>
												<td><input type="text" name="fm[]" value="<?php echo $val["mid1"];?>"></input></td>
												<td><input type="text" name="sm[]" value="<?php echo $val["mid2"];?>"></input></td>
												<td><input type="number" name="avg[]" value="<?php 
		//average calculation										
		$number1 = $val["mid1"];  
        $number2 = $val["mid2"];  
		if($number1>=$number2)
		{
		  $num1=$number1*0.8;
		  $num2=$number2*0.2;
		  $result=ceil($num1+$num2);
		  echo $result;
		}
		else if($number1<$number2)
		{ 
		  $num2=$number2*0.8;
		  $num1=$number1*0.2;
		  $result=ceil($num1+$num2);
		  echo $result;
		}
												
												?>"></input></td>
												
												</tr>
											<?php
						 
												}
											  }
											  ?>
											  
											  
											  
		 
	</table>
	<center> <input type="submit" class="btn" name="enter" value="update marks">
</form>
<?php
?>
											  </div>
		</div>
 
</body>
</html>




	
	
	