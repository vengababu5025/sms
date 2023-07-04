<?php
 error_reporting(0);
?>
<html>
<body>
  <form action="" method="post" enctype="multipart/form-data">
     <input type="file" name="img"></input><br><br>
	 <input type="submit" name="submit" value="upload"></input>
  </form>
</body>
</html>

<?php
  
   $filename=$_FILES["img"]["name"];
   $tempname= $_FILES["img"]["tmp_name"];
   $folder="images/.$filename";
   echo $folder;
   move_uploaded_file($tempname,$folder);
?>