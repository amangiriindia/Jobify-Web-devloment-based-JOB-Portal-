
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
              <li class="breadcrumb-item"><a href="customer.php">Coustmer</a></li>
              <li class="breadcrumb-item"><a href="add_customer.php">Add Coustmer</a></li>
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

        <form action="" method ="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name</td>
                    <td>
                        <input type="text" name="full_name" placeholder="Enter Your Name">
                    </td>
                </tr>
                <tr>
                    <td>Contact Number</td>
                    <td>
                        <input type="phone" name="phone" placeholder="Enter your Mobile Number">
                    </td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td>
                        <input type="email" name="email" placeholder="Enter your Email">
                    </td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td>
                        <input type="password" name="password" placeholder="Enter Your password">
                </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit"name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
            
        </form>
    </div>
</div>

<?php include('footer.php');
    ?>
<br>

 <?php
//process the from form and save it in database
//check whether the button is clicked or not
if(isset($_POST['submit']))
{
    

    //get the data from form
     $username=$_POST['full_name'];
     $email=$_POST['email'];
     $phone=$_POST['phone'];
     $password=md5($_POST['password']);//md5 is password encrypation
     //sql save data in database
     $sql = "INSERT INTO admin_login SET
     admin_email='$email',
     admin_username='$username',
     phone='$phone',
     admin_password='$password'
     ";
    //Executing Query and saving data in Database
    $res = mysqli_query($conn,$sql) or die (mysqli_error());

    //check wether the (Query is excuted) data in inserted or not and display appopriate message
    if($res==TRUE)
    {
       // echo "data inserted";

       //session variable display massage
       $_SESSION['add']="Admin Added Successfully";
       //redirect page IN Mange admin
       
    }
    else
    {
      //  echo "data not inserted";
       //session variable display massage
      $_SESSION['add']="Failed to Add Admin";
       //redirect page to Add admin
       header('location:add_customer.php');
    }
}

?>

