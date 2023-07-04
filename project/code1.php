<?php
    $con=mysqli_connect("localhost","root","","vrjsm");
	$msg="";
	
	if(isset($_POST['enter']))
{
    
	$rno=$_POST['rno'];
	$subject=$_POST['su'];
	$avg=$_POST['avg'];
	
	foreach($rno as $index=>$names)
	{
		$s_rno=$names;
		$s_subject=$subject[$index];
		$s_avg=$avg[$index];
		//query to insert records intodatabase
	$insert=mysqli_query($con,"INSERT INTO `mid_2`(rollno,sub,mid_avg) VALUES 
	('$s_rno','$s_subject','$s_avg')");
	}
	
	
	
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





<?php
    $con=mysqli_connect("localhost","root","","vrjsm");
	$msg="";
	
	if(isset($_POST['update']))
{
    
	$rno=$_POST['rno'];
	$subject=$_POST['su'];
	$total=$_POST['total'];
	
	foreach($rno as $index=>$names)
	{
		$s_rno=$names;
		$s_subject=$subject[$index];
		$s_total=$total[$index];
		//query to insert records intodatabase
	    $insert=mysqli_query($con,"update mid_2 set total='$s_total' where rollno='$s_rno' and sub='$s_subject'");
	}
	
	
	
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