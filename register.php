<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Jobs Portal</title>

    <style>
        .regpage{
            background-image: url(b2.jpg);
            background-size: cover;
            background-attachment: fixed;
            height: 800px;
            width: 100%;
        }
    </style>

   
    <?php 
    
    include('header_link.php'); 
    include('dbconnect.php');

    
    
    ?>
</head>
<body>
<div class="regpage" >
<?php 
    
    include('header.php'); 

    ?>


<div class="container">


      <div class="single">
           
            <div class="col-md-6">
            <h1>Student Register</h1>

                 <form action="register.php" method="post">

                     <div class="form-group">
                     <input type="text" placeholder="enter a name" name="name" class="form-control"> 
                     </div>
                     <div class="form-group">
                    <input type="text" placeholder="enter a email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                    <input type="text" placeholder="enter a password" name="password" class="form-control">
                    </div>
                    <input type="submit"  name="studentregister" value="Register Student" class="btn btn-primary">

                 </form>
              

            </div>

            <div class="col-md-6">
            <h1>Company Register</h1>
                 <form action="register.php" method="post">

                     <div class="form-group">
                     <input type="text" placeholder="enter a name" name="name" class="form-control"> 
                     </div>
                     <div class="form-group">
                    <input type="text" placeholder="enter a email" name="email" class="form-control ">
                    </div>
                    <div class="form-group">
                    <input type="text" placeholder="enter a password" name="password" class="form-control">
                    </div>
                    
                    <input type="submit"  name="userregister" value="Register Company" class="btn btn-primary">

                 </form>
              

            </div>
      </div>

      







     

       <?php 

           if(isset($_POST['studentregister']))
           {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

           $sql = "INSERT INTO `student`( `name`, `email`, `password`, `type`) VALUES ('$name','$email','$password','1')";
           mysqli_query($con,$sql);
           


           echo "<script>alert('Student Register')</script>";

        }

        if(isset($_POST['userregister']))
        {

         $name = $_POST['name'];
         $email = $_POST['email'];
         $password = $_POST['password'];

  
        $sql2 = "INSERT INTO `user`(`name`, `email`, `password`, `type`) VALUES ('$name','$email','$password','2')";
        mysqli_query($con,$sql2);
       

        echo "<script>alert('User Register')</script>";

     }

?>

 </div>

 </div>
 <br><br><br><br><br><br><br><br><br><br>
 <?php include('footer.php'); ?>

</body>
</html>