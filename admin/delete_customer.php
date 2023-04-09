

<?php

define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','job-portal');



$conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die (mysqli_error());
$db_select=mysqli_select_db($conn,DB_NAME) or die (mysqli_error());
//$conn =mysqli_connect("localhost","root","");








$id = $_GET['id'];

//2.create sql in delete admin]
$sql = "DELETE FROM admin_login WHERE id=$id";

//Exucute the Query
$res = mysqli_query($conn,$sql);
if($res==TRUE)
    {
       
     //session variable deleted
       $_SESSION['delete']="<div class ='succ'>Admin Deleted Successfully.</div>";
       //redirect page IN Mange admin
       header('location:customer.php');
    }
    else
    {
     
       
       $_SESSION['detete']="<div class='error'>Failed to Delete Admin</div>";
       //redirect page to Add admin
       header('location:add_customer.php');
    }
    ?>