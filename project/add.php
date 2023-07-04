<html>
<body>
  <form action="" method="POST">
  
    first mid:<input type="number" name="a"></input>
	second mid:<input type="number" name="b"></input>
	sem:<input type="number" name="c"></input>
	<input type="submit" name="submit">
  </form>
  
  <?php
     if(isset($_POST['submit']))
	 {
	   $a=$_POST['a'];
	   $b=$_POST['b'];
	   $c=$_POST['c'];
	   if($a>$b)
	   {
	       $a=($a)*0.8;
		   $b=($b)*0.2;
		   (int)$result=ceil($a+$b);
		   ?><input type="txet" value="<?php echo $result; ?>">
		 
		<?php
	   }
	   else
	   {
	       $a=($a)*0.2;
		   $b=($b)*0.8;
		   (int)$result=ceil($a+$b);
		   ?><input type="txet" value="<?php echo $result; ?>">
		 
		<?php
	   }
	   }
	   ?>
</body>
</html>