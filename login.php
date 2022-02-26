<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Jobs Portal</title>

     <style>

        .loginpage{
            height: 800px;
            width: 100%;
            background-image: url(bp.jpg);
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
    <?php 
    
    include('header_link.php'); 
    include('dbconnect.php');

    
    
    ?>
</head>
<body>

<div class="loginpage">
<?php 
    
    include('header.php'); 

    ?>

    <!-- <div class="container"> -->

<!--      
      <div class="single">
      <h1>Student / Company Login</h1>

            <div class="col-md-6">

                 <form action="login.php" method="post">
                    <div class="form-group">
                    <input type="text" placeholder="enter a email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                    <input type="text" placeholder="enter a password" name="password" class="form-control">
                    </div>
                    <input type="submit"  name="login" value="Login" class="btn btn-primary">

                 </form>
              

            </div>

      </div>  -->

      

      <div class="loginbox">
          <img src="login2.jpg" alt="" class="avatar">
          <h1 class="ltext" >student/company login</h1>

          

          <form action="login.php" method="post">
                    <div class="form-group">
                    <p class="tlogin" >e mail</p>
                    <input type="text" placeholder="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                    <p class="tlogin" >password</p>
                    <input type="text" placeholder="password" name="password" class="form-control">
                    </div>
                    <input type="submit"  name="login" value="Login" class="btn btn-primary">

                 </form>
      </div>
 

       <?php 

           if(isset($_POST['login']))
           {

            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "select userid,name,email,password,type from user where email = '$email' and password = '$password' 
            UNION ALL
            select studentid, name, email , password,type from student where email = '$email' and password = '$password'
            ";

            //$sql = "select * from employer where email = '$email' and password = '$password'";

            $rs = mysqli_query($con,$sql);
             
            if($row = mysqli_num_rows($rs)>0){
                $userinfo = mysqli_fetch_array($rs);

                
                session_start();

                $user_id     = $userinfo[0];
                $email       = $userinfo[2];
                $password    = $userinfo[3];
                $type        = $userinfo[4];

                $_SESSION['userid'] = $user_id;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                $_SESSION['type'] = $type;
 
            
                 if($type == 1){
                    header('Location: admin.php');
                 }else if($type == 2){
                    header('Location: index.php');
                 }

            }else{
                  echo "<h1 style='color:red;'> Invalid Username or password</h1>";
            }
               

        }
?>


</div>
</div>


 <?php include('footer.php'); ?>
</body>
</html>

