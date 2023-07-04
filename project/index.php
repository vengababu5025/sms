<!doctype html>
<html>
<head>


<link rel="stylesheet" href="css/styles.css"/>
<!--fav-icon-->
<link rel="shortcut icon" href="images/favicon.png"/>
<style>
    /* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    width: 400px;
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

</style>
</head>

<body>
    
    <section class="main" style="background-image: url(images/hero-bg.png);">
        
        <nav>
            <a href="#" class="logo">
                <img src="images/nbkr1.jpeg" width="320px" />
				
            </a>
            <input class="menu-btn" type="checkbox" id="menu-btn"/>
            <label class="menu-icon" for="menu-btn">
                <span class="nav-icon"></span>
            </label>
            <ul class="menu" style="border-radius: 5px;">
			<li><a href="student_profile.php">Student</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Notification</a></li>
               
                <li><a class="active" href="login.php" style="width:auto; border-radius: 5px; cursor: pointer;">Login</a></li>
            </ul>
        </nav>
       
        <!-- login modal start -->
        <div id="id01" class="modal">
  
            <form class="modal-content animate" action="/action_page.php" method="post" style="
            width: 400px;
        ">
              <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <p style="font-size: 22px;">Student Login </p>
                <hr>
              </div>
          
              <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
          
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                  
                <button type="submit">Login</button>
                <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
              </div>
          
              <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <span class="psw"><a href="#">Register Here</a></span>
                <span class="psw" style="margin-right: 11px;"><a href="#">Forgot  password?</a></span>
              </div>
            </form>
          </div>
        <!-- login modal end  -->


        <!--main-content-->
        <div class="home-content">
            
            <!--text-->
            <div class="home-text" >
                
                <h3 style="color: white; letter-spacing: 3px;">Welcome to N.B.K.R Engineering College</h3>
                <h1 style="color: white;"> Student Portal</h1>
                <p style="color: white;">The purpose of Colleges is to prepare students with promise
                    to enhance their intellectual, physical, social, emotional, spiritual,
                    and artistic growth so that they may realize their power for good
                    as citizens</p>
            <!--login-btn-->
            <a href="#" class="main-login" style="border-radius: 5px;">Apply Now</a>
            </div>
            <!--img-->
            <div class="home-img" style="width: 500px;">
                <img src="images/hero.png" width="500px" style="text-shadow: 20px 22px;"/>
                <marquee width="100%" direction="left" onmouseover="this.stop();"
                onmouseout="this.start();">
                    <a href="#" style="color: white;font-size:20px">Addmission open for Academic 2022-2023, Stream CSE ,ECE ,EEE ,MECH ,CIVIL .</a>
                    </marquee>
                    <marquee width="100%" direction="right" onmouseover="this.stop();"
                onmouseout="this.start();">
                    <a href="#" style="color: white;font-size:20px">Addmission open for Academic 2022-2023, Stream CSE ,ECE ,EEE ,MECH ,CIVIL .</a>
                    </marquee>
            </div>
            
        </div>
        
        <!--arrow-->
        <div class="arrow"></div>
        <span class="scroll">Scroll</span>
    </section>
    
    <!--services----------------------->
    <section class="services">
        <!--heading----------->
        <div class="services-heading">
            <h2>OUR PROFESSIONAL COURSES</h2>
           
        </div>
        <!--box-container----------------->
        <div class="box-container">
            <!--box-1-------->
            <div class="box">
                <img src="images/icon5.png">
                <font>Computer Science and Engineering</font>
                
                <!--btn--------->
                <a href="#">Apply Now</a>
            </div>
            <!--box-2-------->
            <div class="box">
                <img src="images/icon5.png">
                <font>Electronics and Communication Engineering</font>
               
                <!--btn--------->
                <a href="#">Apply Now</a>
            </div>
            <!--box-3-------->
            <div class="box">
                <img src="images/icon5.png">
                <font>Electrical and Electronics Engineering</font>
               
                <a href="#">Apply Now</a>
            </div>
            <!--box-4-------->
            <div class="box">
                <img src="images/icon5.png">
                <font>Mechanical Engineering</font>
               
                <!--btn--------->
                <a href="#">Apply Now</a>
            </div>
			 <div class="box">
                <img src="images/icon5.png">
                <font>Civil Engineering</font>
               
                <!--btn--------->
                <a href="#">Apply Now</a>
            </div>
            <!--box-1-------->
            
        </div>
    </section>
    
    <!--footer------------->
    <footer>
        <p>Copyright (C) - 2022 | Developed By <a href="https://kush.lexdigital.in/">****** </a> </p>
    </footer>
    <script>
        // Get the modal
        var modal = document.getElementById('id01');
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>
</body>

</html>
