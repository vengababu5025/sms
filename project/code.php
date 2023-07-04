<?php
//For database connection

$con=mysqli_connect("localhost","root","","vrjsm");

$msg="";
//for form submit
if(isset($_POST['submit']))
{
    
	$rno=$_POST['rno'];
	$subject=$_POST['su'];
	$fm=$_POST['fm'];
	$mid=$_POST['mid'];
	if($mid=='mid1')
	{
	foreach($rno as $index=>$names)
	{
		$s_rno=$names;
		
		$s_fm=$fm[$index];
		
		//query to insert records intodatabase
	$insert=mysqli_query($con,"INSERT INTO `meafa`(rollno,mid1) VALUES 
	('$s_rno','$s_fm')");
	}
    }
	else if($mid=='mid2')
	{
	foreach($rno as $index=>$names)
	{
		$s_rno=$names;
		
		$s_fm=$fm[$index];
		
		//query to insert records intodatabase
	$insert=mysqli_query($con,"update meafa set mid2='$s_fm' where rollno='$s_rno'");
	}
}


else if($mid=='esm')
	{
	foreach($rno as $index=>$names)
	{
		$s_rno=$names;
		
		$s_fm=$fm[$index];
		
		//query to insert records intodatabase
	$insert=mysqli_query($con,"update meafa set endsem='$s_fm' where rollno='$s_rno'");
	}
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

