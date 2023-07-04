<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <title>Admin Panel</title>
	 <style>
      * {
        box-sizing: border-box
      }
      body {
        font-family: Verdana, sans-serif;
        margin: 0
      }
      .mySlides {
        display: none
      }
      img {
        vertical-align: middle;
      }
      .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
      }
      /* Next & previous buttons */
      .prev,
      .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
      }
      /* Position the "next button" to the right */
      .next {
        right: 0;
        border-radius: 3px 0 0 3px;
      }
      /* On hover, add a black background color with a little bit see-through */
      .prev:hover,
      .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
      }
      /* Caption text */
      .text {
        color: #ffffff;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
      }
      /* Number text (1/3 etc) */
      .numbertext {
        color: #ffffff;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
      }
      /* The dots/bullets/indicators */
      .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #999999;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
      }
      .active,
      .dot:hover {
        background-color: #111111;
      }
      /* Fading animation */
      .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
      }
      @-webkit-keyframes fade {
        from {
          opacity: .4
        }
        to {
          opacity: 1
        }
      }
      @keyframes fade {
        from {
          opacity: .4
        }
        to {
          opacity: 1
        }
      }
      /* On smaller screens, decrease text size */
      @media only screen and (max-width: 300px) {
        .prev,
        .next,
        .text {
          font-size: 11px
        }
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

</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>MENU</h1>
        </div>
        <ul>
            <li ><img src="dashboard (2).png" alt="">&nbsp; <span><div class="btn">Dashboard</div></span> </li>
            <li><img src="reading-book (1).png" alt="">&nbsp;<span><a href="add_student.php" class="btn">Add Students</a></span> </li>
             <li><img src="reading-book (1).png" alt="">&nbsp;<span><a href="view_student.php" class="btn">Show Student</a></span> </li>
             <li><img src="reading-book (1).png" alt="">&nbsp;<span><a href="section.php" class="btn">Depatment</a></span> </li>
			  <li><img src="reading-book (1).png" alt="">&nbsp;<span><a href="marks.php" class="btn">Marks</a>
			  <li><img src="reading-book (1).png" alt="">&nbsp;<span><a href="yy.php" class="btn">Mid Average</a>
			  <li><img src="reading-book (1).png" alt="">&nbsp;<span><a href="yy1.php" class="btn">Final Marks</a>
			  <ul>
			  <div class="hide">
			     <li><a href="$"></a></li>
				 <li><a href="$"></a></li>
				 </div>
			  </ul>
			  
			  </span> </li>
            <li><img src="help-web-button.png" alt="">&nbsp; <span><div class="btn">Help</div></span></li>
            
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                   
                   <H1> STUDENT RECORD MANAGEMENT SYSTEM</H1>
                </div>
                <div class="user">
                    <a href="register.php" class="btn">Add New</a>
                    <img src="notifications.png" alt="">
                    <div class="img-case">
                       <a href="index.php"> <img src="user.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1><?php
						$con=mysqli_connect("localhost","root","","vrjsm");
                         $sql="select * from student";
						 $sql_run=mysqli_query($con,$sql);
						 if($total=mysqli_num_rows( $sql_run))
						 {
							  echo "<h1>".$total."</h1>";
						 }
						 else
						 {
							 echo "<h3> no data</h3>";
						 }
						?>
						</h1>
                        <h3>Students</h3>
                    </div>
                    <div class="icon-case">
                        <img src="students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>
						<?php
						$con=mysqli_connect("localhost","root","","vrjsm");
                         $sql="select * from student";
						 $sql_run=mysqli_query($con,$sql);
						 if($total=mysqli_num_rows( $sql_run))
						 {
							  echo "<h1>".$total."</h1>";
						 }
						 else
						 {
							 echo "<h3> no data</h3>";
						 }
						?>
						</h1>
                        <h3>Teachers</h3>
                    </div>
                    <div class="icon-case">
                        <img src="teachers.png" alt="">
                    </div>
                </div>
               
			   <div class="card">
                    <div class="box">
                        <h1>
						<?php
						$con=mysqli_connect("localhost","root","","vrjsm");
                         $sql="select * from student";
						 $sql_run=mysqli_query($con,$sql);
						 if($total=mysqli_num_rows( $sql_run))
						 {
							  echo "<h1>".$total."</h1>";
						 }
						 else
						 {
							 echo "<h3> no data</h3>";
						 }
						?>
						</h1>
                        <h3>Depatments</h3>
                    </div>
                    <div class="icon-case">
                        <img src="teachers.png" alt="">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                   <div class="slideshow-container">
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="nbkr1.jpeg" width="1300" height="400" style="width:100%">
        <div class="text">London, Ebgland</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="OIP (2).jpg" width="1300" height="400" style="width:100%">
        <div class="text">Sunset in Romania</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="OIP (3).jpg" width="1300" height="400" style="width:100%">
        <div class="text">New York, USA</div>
      </div>
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <script>
      var slideIndex = 0;
      showSlides();
      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for(i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if(slideIndex > slides.length) {
          slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
      }
    </script>
                </div>
                
            </div>
        </div>
    </div>
</body>

</html>









