
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Job | Jobs Portal</title>
    <?php 
    
    include('header_link.php'); 
    include('dbconnect.php'); 
    
   
   
    ?>
   <style>
        body{
             color: grey;
             background-color: lightgray;
        }
        input{
             width: 50%;
             height: 5%;
             border: 5px;
             border-radius: 2px;
             padding: 8px 15px 8px 15px;
             margin: 10px 0px 15px 0px;
             box-shadow: 1px 1px 2px 1px grey;
             
        }
   </style> 
</head>
<body>
<?php 
    
    include('header.php'); 
    if(!isset( $_SESSION['userid'] ) ){
        header('Location: login.php');
      } 
      
     $empid = $_SESSION['userid'];
    ?>
    <div class="container">
    

      <div class="single">
      <h1>Add Student Profile</h1>
            <div class="col-md-6">
                 <form action="uploadjob.php" method="post" enctype="multipart/form-data" >
                   
                   <div class="form-group">
                   <input type="text" placeholder="enter a name" name="name" class="form-control">  
                   </div>
                   <div class="form-group">
                   <!-- <input type="text" placeholder="enter a categories" name="categories" class="form-control">   -->
                   <select name="catid"  class="form-control">
                        <option value="">Select Categories</option>
                        <?php
                              $sql = "select * from categories";
                              $data = mysqli_query($con,$sql);
                              if(mysqli_num_rows( $data) > 0){
                                    while($rs=mysqli_fetch_array($data)){
                                         ?><option value="<?=$rs['catid']?>"><?= $rs['name']?></option><?php
                                    }
                              }else{
                                   ?><option>No category found</option><?php
                              }
                        ?>
                   </select>
                   </div>
                   
                   <div class="form-group">
                   <textarea name="description" id=""  placeholder="Enter a description about you" rows="10" cols="78" ></textarea>
                   </div>
                   <style>
                        textarea{
                             border: .5px solid black;
                        }
                   </style>
                   <div class="form-group">
                   <input type="text" placeholder="Enter positions you are looking" name="position" class="form-control">
                   <!-- <textarea name="position" id=""  placeholder="Enter the positions :" rows="10" cols="78" ></textarea> -->
                   </div>
                   
                   <div class="form-group">
                   <input type="text" placeholder="Enter Your skills" name="skills" class="form-control">
                   </div>

                   <div class="form-group">
                   <label for="">Upload profile picture</label> <br>
                   <input type="file"  name="file" class="form-control">
                   </div>

                   <div class="form-group">
                   <label for="">Upload CV</label> <br>
                   <input type="file"  name="pdf" class="form-control">
                   <!-- <input type="submit" name="submited" value="upload"> -->
                   </div>
                    <br> <br>

                    <input type="submit"  name="postprofile" value="Post Profile" class="btn btn-primary"> 
                 </form>
                  
          </div>
                  
                    
                    <!-- <input type="submit"  name="applyjob" value="Post Job" class="btn btn-primary"> -->
                   <!-- <div class="form-group">
                   <input type="text" placeholder="enter a timing" name="timing" class="form-control">
                   </div> -->
                   
              
            </div>
           
            <!-- table ends -->
      </div>
 
       <?php 
           if(isset($_POST['postprofile']))
           {
           
         $empid = $_SESSION['userid'];


            $name = $_POST['name'];
          //   $categories = $_POST['categories'];
            $catid = $_POST['catid']; 
            $desc = $_POST['description'];
            $position = $_POST['position'];
            $skills = $_POST['skills'];
            $image = $_FILES['file'];
           

            $imagefilename = $image['name'];
            $imagefileerror = $image['error'];
            $imagefiletemp = $image['temp_name'];


            $imagefile_seperate = explode('.', $imagefilename );

            $file_extension = strtolower(end($imagefile_seperate));

            $extension = array('jpeg', 'jpg', 'png');

            if(in_array($file_extension,$extension)){
                 $upload_image = 'image/'. $imagefilename;
                 move_uploaded_file($imagefiletemp,$upload_image );

                 $sql = "INSERT INTO `jobs`( name, catid, description, position, skills , image) VALUES ('$name', '$catid', '$desc','$position','$skills' , '$upload_image')";
                 mysqli_query($con,$sql);
                 
              
                 echo "<script>alert('Add Profile')</script>";


            }

   }
?>
</div>
<script>
$(document).ready(function(){
  $("#myinput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#mytable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<br><br>
 
<?php include('footer.php'); ?>
</body>
</html>
