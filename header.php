<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page | Jobs Portal</title>
    <?php include('header_link.php'); ?>

    
  
</head>

<body>

<div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <!-- <div id="login-btn" class="fas fa-user" ></div> -->
            
</div>
  


<!-- <link rel="stylesheet" href="css/style1.css"> -->
<nav class="navbar navbar" role="navigation">
	<div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">eJob Portal</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="index.php"><img src="intake_black.png" alt=""  style= "width:70px;height:70px;"></a>
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">


				   <?php 

              error_reporting(0);

						  session_start();
						  $type = $_SESSION['type'];

						  if($type == 1){
							  echo '
							  <li><a href="admin.php">Dashboard</a></li>
							  <li><a href="categories.php">Categories</a></li>
							  <li><a href="uploadjob.php">Jobs</a></li>
								<li><a href="application.php">View Documents</a></li>
								<li><a href="logout.php">Logout</a></li>
							  ';
						  }else if($type == 2){
							echo '
							      <li><a href="index.php">Home</a></li>
							      <li><a href="viewappjob.php">View Applied Job</a></li>
							      <li><a href="logout.php">Logout</a></li>
							';
						  }else{
							  echo '
							  <li><a href="about.php">Who we are </a></li>
                <li><a href="login.php">Login</a></li>
						      <li><a href="register.php">Register</a></li>
                  
							  ';
						  }
				   ?>
				       
			         	
	        </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
  </body>

  <!-- style sheet  -->

    <style>
/* * {
  box-sizing: border-box;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
} */

* {
  box-sizing: border-box;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

.navbar-toggle collapsed{
  background-color: black;
  
}


.button{
  color: red;
}

.nav>li>a:focus, .nav>li>a:hover {
  /* background-color:#f15f43; */
  background-color:#4d0000;
  color:#fff;
}


#menu-btn {
  display: none;
}




#w3lDemoBar.w3l-demo-bar {
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  padding: 40px 5px;
  padding-top:70px;
  margin-bottom: 70px;
  background: #0D1326;
  border-top-left-radius: 9px;
  border-bottom-left-radius: 9px;
}

ul li a {
border-radius: 10px;
border: 2px solid black;
padding: 5px 5px; 
margin: 10px 10px;
background-color: white;
font-size: 15px;
color: white;
font-weight: bold;
background-color: black;
}

ul li a:hover{
  background-color: red;
}

#w3lDemoBar.w3l-demo-bar a {
  display: block;
  /* color: #e6ebff; */

  color: grey;
  text-decoration: none;
  line-height: 24px;
  opacity: .6;
  margin-bottom: 20px;
  text-align: center;
}

#w3lDemoBar.w3l-demo-bar span.w3l-icon {
  display: block;
}

#w3lDemoBar.w3l-demo-bar a:hover {
  opacity: 1;
}

#w3lDemoBar.w3l-demo-bar .w3l-icon svg {
  color: #e6ebff;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons {
  margin-top: 30px;
  border-top: 1px solid #41414d;
  padding-top: 40px;
}
#w3lDemoBar.w3l-demo-bar .demo-btns {
  border-top: 1px solid #41414d;
  padding-top: 30px;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
  font-size: 26px;
}
#w3lDemoBar.w3l-demo-bar .no-margin-bottom{
  margin-bottom:0;
}
.toggle-right-sidebar span {
 background: #0D1326; 
 background-color: black;
 width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  color: #e6ebff;
  border-radius: 50px;
  font-size: 26px;
  cursor: pointer;
  opacity: .5;
}
.pull-right {
  float: right;
  position: fixed;
  right: 0px;
  top: 70px;
  width: 90px;
  z-index: 99999;
  text-align: center;
}
/* 
RIGHT SIDEBAR SECTION
 */

#right-sidebar {
  width: 90px;
  position: fixed;
  height: 100%;
  z-index: 1000;
  right: 0px;
  top: 0;
  margin-top: 60px;
  -webkit-transition: all .5s ease-in-out;
  -moz-transition: all .5s ease-in-out;
  -o-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  overflow-y: auto;
}


/* 
RIGHT SIDEBAR TOGGLE SECTION
 */

.hide-right-bar-notifications {
  margin-right: -300px !important;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}



@media (max-width: 992px) {
  #w3lDemoBar.w3l-demo-bar a.desktop-mode{
      display: none;

  }
}
@media (max-width: 767px) {
  #w3lDemoBar.w3l-demo-bar a.tablet-mode{
      display: none;

  }
}
@media (max-width: 568px) {
  #w3lDemoBar.w3l-demo-bar a.mobile-mode{
      display: none;
  }
  #w3lDemoBar.w3l-demo-bar .responsive-icons {
      margin-top: 0px;
      border-top: none;
      padding-top: 0px;
  }
  #right-sidebar,.pull-right {
      width: 90px;
  }
  #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile{
      margin-bottom: 0;
  }
}
</style>