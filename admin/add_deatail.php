
<?php include('menu.php');
    ?>
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
              <li class="breadcrumb-item"><a href="job_deatail.php"></a></li>
              <li class="breadcrumb-item"><a href="add_deatail.php">Add Job-Deatail</a></li>
            </ol>
          </nav>
         
    <div class="wrapper">
        <h1>Add Admin</h1>
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
                    <td>JOB-Id:</td>
                    <td>
                        <input type="text"name="id"placeholder="job id">
                    </td>
                </tr>
                <tr>
                    <td>Vacancy:</td>
                    <td>
                        <input type="text"name="vacancy"placeholder="Vacancy">
                    </td>
                </tr>
                <tr>
                    <td>Application-Date:</td>
                    <td>
                        <input type="date" name="app_date">
                    </td>
                </tr>
                <tr>
                    <td>:Current Date</td>
                    <td>
                        <input type="date"name="curr_date"placeholder="current Date">
                    </td>
                </tr>
                <tr>
                    <td>Job Link:</td>
                    <td>
                        <input type="text"name="job_link"placeholder="job-Link">
                    </td>
                </tr>
                <tr>
                    <td>Job-Description:</td>
                    <td>
                        <textarea name="job_dest"  cols="30" rows="5" placeholder="Description "></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Skills-Requried:</td>
                    <td>
                    <textarea name="skill"  cols="30" rows="5" placeholder="Description The Skill Requird"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Eduction-Experience:</td>
                    <td>
                    <textarea name="education"  cols="30" rows="5" placeholder="Description About Education Expreience"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Company Description:</td>
                    <td>
                    <textarea name="com_dest"  cols="30" rows="5" placeholder="Company Description"></textarea>
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
     $job_id=$_POST['id'];
     $vacancy=$_POST['vacancy'];
     $appli_date=$_POST['app_date'];
     $curr_date=$_POST['curr_date'];
     $job_des=$_POST['job_dest'];
     $skill=$_POST['skill'];
     $education=$_POST['education'];
     $link=$_POST['job_link'];
     $com_dest=$_POST['com_dest'];


        
     //sql save data in database
     $sql = "INSERT INTO tbl_job_deatail SET
     job_id='$job_id',
     vacancy='$vacancy',
     application_date='$appli_date',
     curr_date='$curr_date',
     job_description='$job_des',
     skill_requrird='$skill',
     education_exprence='$education',
     apply_link='$link',
     compny_des='$com_dest'
     ";
    //Executing Query and saving data in Database
    $res = mysqli_query($conn,$sql) or die (mysqli_error());

    //check wether the (Query is excuted) data in inserted or not and display appopriate message
    if($res==TRUE)
    {


       //session variable display massage
       $_SESSION['add']="Admin Added Successfully";
       //redirect page IN Mange admin
    //    header('location:job_deatail.php');

       
    }
    else
    {
      //  echo "data not inserted";
       //session variable display massage
      $_SESSION['add']="Failed to Add Admin";
    }
}

?>

