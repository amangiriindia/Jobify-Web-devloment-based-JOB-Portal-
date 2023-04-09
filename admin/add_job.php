
<?php include('menu.php'); ?>
<?php
if(isset($_SESSION['add'])){
  echo $_SESSION['add'];  //displaying session massageS
  unset($_SESSION['add']);//removing session message
}
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
<div class="main-content">
     
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              
              <li class="breadcrumb-item"><a href="admin_dashboard.php">DashBoard</a></li>
              <li class="breadcrumb-item"><a href="job.php">Job</a></li>
              <li class="breadcrumb-item"><a href="add_job.php">Add Job</a></li>
            </ol>
          </nav>
         
    <div class="wrapper">
        <h1>Add  Job</h1>
        <br><br>

        <?php
        // if(isset($_SESSION['add'])){//checking the session set or not
        //     echo $_SESSION['add'];  //displaying session massageS if set
        //     unset($_SESSION['add']);//removing session message
        //   }
        ?>

  <!--Add food form starts-->
  <form action=""method="POST" enctype="multipart/form-data">
            <table class='tbl-30'>
                <tr>
                    <td>Job category:</td>
                    <td>
                    <select name="category">
                              <?php
                                    //display category from database
                                    //1.create sql to get all active category from database
                                    $sql="SELECT * FROM tbl_category";
                                    //Executing Query
                                    $res=mysqli_query($conn,$sql);
                                    //count rows to wether we have categories or not
                                    $count = mysqli_num_rows($res);
                                    if($count>0)
                                    {
                                        //WE have category
                                        while($row=mysqli_fetch_assoc($res))
                                        {
                                            //get the details of categories
                                            $id=$row['id'];
                                            $title=$row['category_name'];
                                            ?>
                                            <option value="<?php echo $title;?>"><?php echo $title;?></option>
                                            <?php
                                        }
                                    } 
                                    else
                                    {
                                        //we do not have category
                                        ?>
                                        <option value="0">No Category Found </option>
                                        <?php
                                    }
                               ?>
                               
                          </select>
                    </td>
                </tr>
                <tr>
                    <td>Company Name:</td>
                    <td>
                        <input type="text"name="com_name"placeholder="Company Name">
                    </td>
                </tr>
                <tr>
                    <td>Company Logo:</td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>
                <tr>
                    <td>Job location:</td>
                    <td>
                        <input type="text"name="job_location"placeholder="Job Location">
                    </td>
                </tr>
                <tr>
                    <td>Sallary:</td>
                    <td>
                        <input type="text"name="salry"placeholder="Salry">
                    </td>
                </tr>
                <tr>
                   <td>Job Type:</td>
                    <td>
                       <select name="job_type">
                          <option value="Full Time">Full Time</option>
                          <option value="Part Time">Part Time</option>
                          <option value="Intership">InternShip</option>
                          <option value="Work From Home">Work From Home</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Experience</td>
                    <td>
                        <input type="text"name="experience" placeholder="Experience">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name ="submit"  class=btn-secondary>
                    </td>
                </tr>

            </table>
        </form>

    </div>
</div>

<?php include('footer.php'); ?>

<br>

 <?php
//process the from form and save it in database
//check whether the button is clicked or not
if(isset($_POST['submit']))
{
    

    //get the data from form
     $category=$_POST['category'];
     $com_name=$_POST['com_name'];
    // $com_logo=$_POST['com_logo'];
     $location=$_POST['job_location'];
     $salry=$_POST['salry'];
     $job_type=$_POST['job_type'];
     $experience=$_POST['experience'];


        //2.uplode the image if selected
        if(isset($_FILES['image']['name']))
        {
            //Get the details of selected image
            $image_name=$_FILES['image']['name'];
            //check the image is selected otr not and uplode the image only if selected
            if($image_name!="")
            {
                //image is setected
                //A.rename the image
                //Get the Extension of our image(jpg,png,gif,etc)e.g."spcailfood1.jpg"
                $tmp = explode('.', $image_name);
                $ext = end($tmp);

                //Rename the image
                $image_name = "com_logo".rand(000,999).'.'.$ext;//e.g.Food-name-345.jpg

                //B.Uplode the image

                $source_path=$_FILES['image']['tmp_name'];
                $destination_path="img/".$image_name;

                //Finally upload the image
                $upload=move_uploaded_file($source_path,$destination_path);

                
                //check whether the image is uploded or not
                //and if the image is not uploded then we will stop the process and redirect with error
                if($upload==false)
                {
                    //set massege
                    $_SESSION['upload']="<div class='error'>Failed to Upload Image.</div>";
                    //Redirect to add category page
                    header('location"add-fob.php');
                    //stop the process
                    die();
                } 

  
                            //upload the only image is selected
                 
  
  
  
  
  
                         
                      }
                  }
                  else
                  {
                      $image_name="";
                  }






    
     //sql save data in database
     $sql = "INSERT INTO tbl_job SET
     category_name='$category',
     com_name='$com_name',
     com_logo='$image_name',
     job_location='$location',
     salry='$salry',
     job_type='$job_type',
     experience='$experience'
     ";
    //Executing Query and saving data in Database
    $res = mysqli_query($conn,$sql) or die (mysqli_error());

    //check wether the (Query is excuted) data in inserted or not and display appopriate message
    if($res==TRUE)
    {
        

       //session variable display massage
       $_SESSION['add']="Admin Added Successfully";
       //redirect page IN Mange admin
       header('location:job.php');

       
    }
    else
    {
      //  echo "data not inserted";
       //session variable display massage
      $_SESSION['add']="Failed to Add Admin";
    }
}

?>

