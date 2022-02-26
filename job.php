
<body>
   <section class="home" id="home" >
   <!-- <div class="content">
      <h3 class="front-name"><span>Explore the industry &  <br><br> </span>Choose your career</h3>
   </div> -->
   </section>
</body>
 
   </div> 
 </div>  
 <!-- <div class="banner"> -->
<div class="container">

<div class="single">  
     
<?php


 $userid = $_SESSION['userid'];

  include('dbconnect.php');
  $sql = "select * from jobs";
  $rs = mysqli_query($con,$sql);
  while($data = mysqli_fetch_array($rs)){

   // $image = $data['image'];


    $_SESSION['jobid'] = $data['jobid'];
    $userid = $_SESSION['userid'];
  

?>
	   

       <div class="col-md-12" height="200px;" > 

         <div class="probox">
            

         <!-- <img class = "card-img-top" src= '.$image.' style = "height: 300px;object-fit:contain">  -->

                 <img src="echo <?= $data['image'] ?>" alt="">
                <h5 class="stuname">Name: <?= $data['name'] ?></h5> 
                <h5><?= $data['categories'] ?></h5> <br>
                <h5>Description :  <br>  <?= $data['description'] ?> </h5> <br>
                <h5>Positions looking for : <br> <br> <mark><?= $data['position'] ?> </mark></h5> <br> 
                
                <h5>Skills :  <br>  <?= $data['skills'] ?></h5>
              
         </div>
                
<!-- hire students -->
                 <?php

					$type = $_SESSION['type'];

					if($type == 2){

						echo "<a href='apply.php?jobid=".$data["jobid"]."' class='btn btn-primary'>Hire Now</a>";
                
						
					}else{
						echo '<a href="login.php" class="btn btn-primary"> Login </a> ';
						echo '<a href="register.php" class="btn btn-primary"> Register </a>';
                  echo '<a href="cv.pdf" class="btn btn-primary"> View CV </a>';
                  echo '<a href="viewprofile.php" class="btn btn-primary"> View more </a>';
                  
                  
					}
              

				 ?>
                 

        </div>



       <?php
  }
  ?>
	  
     </div>
     
         
</div>

<!-- </div> -->

<style>


.home {
      min-height: 130vh;
      display: flex;
      align-items: center;
      justify-content: flex-end;
      background-position: center;
      background-size: cover;
      
      
      

   }

   .stuname{
      font-size: 20px;
      font-weight: bold;
   }
   h5{
      /* font-weight: bold; */
      font-family: sans-serif;
      
   }

   .content{
      background-image: url(../images/f6.jpg);
   }
   .probox{
      border: 2px solid black;
      width: 100%;
      margin: 10px 0;
      padding: 30px 30px;
      background-color: whitesmoke;
      border-radius: 10px;
      
}






 
/* to change the home iamage */
.home{
   /* background-image: url(bp3.jpg); */
   background-image: url(bp5.jpg);
}

.btn-primary{
border-radius: 25px;
border: 1px solid lightsalmon;
padding: 2px 2px; 
margin-right: 2.5px;
background-color: #404040;
}






</style>