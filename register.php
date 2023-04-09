<?php
include('E:\xampp\htdocs\job-portal\connection\db.php');

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jobify login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="<?php echo SITEURL;?>css/login.css">
   
    <link rel="stylesheet" href="<?php echo SITEURL;?>assets/css/style.css">
   
</head>
<body>
    <!-- Login page started -->
    <div class="heroo">
                <div class="form-box">
        
         
            <div class="button-box">
                <div id="btn1"></div>
                <button type="button"  class="toggle-btn" onclick="login()">Log IN</button>
                <button type="button" class="toggle-btn" onclick="register()">register</button>
            </div>
            <form action="#" id="login" class="input-group" method="post">
                <input type="email" class="input-field" name="email"  placeholder="Email Id" required>  
                <input type="password" class="input-field" name="password"placeholder="Enter password" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <input type="submit" class="submit-btn" name="submit_login" value="Login">
                <a href="http://localhost/food-order/forget.php">forget password?</a>
            </form>
            <form action="#" id="register" class="input-group" method="post">
                <input type="text" class="input-field" name="name" placeholder="Name" required>
                <input type="email" class="input-field" name="email"  placeholder="Email Id" required>
                <input type="text" class="input-field"  name="mobile"  placeholder="Phone-Number" required>
                <input type="password" class="input-field"  name="password"  placeholder="Enter password" required>
                <input type="password" class="input-field"  name="cpassword"  placeholder="Reapet password" required>
                <input type="checkbox" class="check-box"><span> I agree to the terms & conditions</span>
                <input type="submit" class="submit-btn" name="submit"value="Register">
            </form>
        </div>

    </div>
    </div>
    </div>
  
   <!-- Login page end -->
   


   <script>
      var x = document.getElementById("login");
      var y = document.getElementById("register");
      var z = document.getElementById("btn1");

      function register() {
          x.style.left = "-400px";
          y.style.left = "50px";
          z.style.left = "110px";
      }
      function login() {
          x.style.left = "50px";
          y.style.left = "450px";
          z.style.left = "0px";
      }
  

  </script>
</body>
</html>

<?php
 if(isset($_POST['submit'])){
  $name =$_POST['name'];
  $name =str_replace("<"," ",$name);
  $name =str_replace(">"," ",$name);
  $name =str_replace("'"," ",$name);

   $email =$_POST['email'];
   $email =str_replace("<"," ",$email);
   $email =str_replace(">"," ",$email);
   $email =str_replace("'"," ",$email);

   $phone =$_POST['mobile'];
   $phone =str_replace("<"," ",$phone);
   $phone =str_replace(">"," ",$phone);
   $phone =str_replace("'"," ",$phone);

   $pass =$_POST['password'];
   $pass =str_replace("<"," ",$pass);
   $pass =str_replace(">"," ",$pass);
   $pass =str_replace("'"," ",$pass);

   $cpass =$_POST['cpassword'];
   $cpass =str_replace("<"," ",$cpass);
   $cpass =str_replace("<"," ",$cpass);
   $cpass =str_replace("'"," ",$cpass);

   $password=md5($_POST['password']);
  //  $password =str_replace("<"," ",$password); 
  //  $password =str_replace(">"," ",$password);
  //  $password =str_replace(":"," ",$password);"<script> alert('account hacced')</script>

  // check data already exist in data
  
  $sql ="SELECT * from user_login WHERE email='$email' ";
  $query=mysqli_query($conn,$sql);
  if($query){
   if(mysqli_num_rows($query)>0){
    echo  "<script> alert('You Have Already Account')</script>";
   }


  }
  if($pass!=$cpass){
    echo "<script> alert('Password Did Not Match')</script>";

  } 
  else{
    $sql  ="INSERT INTO user_login SET
    name ='$name',
    email ='$email',
    phone_number ='$phone',
    password= '$password'
    ";

    $res = mysqli_query($conn,$sql) or die (mysqli_error());

    //check wether the (Query is excuted) data in inserted or not and display appopriate message
    if($res==TRUE)
    {
    $_SESSION['email'] = $email;
    header('location:<?php echo SITEURL;?>index.php');
    } else{
    echo  "<script> alert('Email or Password is Incorrect Please Try again')</script>";
    }
  }
}


if(isset($_POST['submit_login'])){
  $email =$_POST['email'];
  $email =str_replace("<"," ",$email);
   $email =str_replace(">"," ",$email);
   $email =str_replace("'"," ",$email);
  $password =md5($_POST['password']);
 
  $sql ="SELECT * from user_login WHERE email='$email'AND password ='$password' ";
  $query=mysqli_query($conn,$sql);
  if($query){
   if(mysqli_num_rows($query)>0){

     $_SESSION['email'] = $email;
     header('location:index.php');
    } else{
     echo  "<script> alert('You Have Not Account Please Register')</script>";
    }
  }
  
}


?>