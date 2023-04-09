

<?php


include('menu.php');

$id = $_GET['id'];

//2.create sql in delete admin]
$sql = "DELETE FROM tbl_job WHERE id=$id";

//Exucute the Query
$res = mysqli_query($conn,$sql);
if($res==TRUE)
    {
       
     //session variable deleted
       $_SESSION['delete']="<div class ='succ'>Admin Deleted Successfully.</div>";
       //redirect page IN Mange admin
       header('location:job.php');
    }
    else
    {
     
       
       $_SESSION['detete']="<div class='error'>Failed to Delete Admin</div>";
       //redirect page to Add admin
       header('location:add_job.php');
    }
include('footer.php');
    ?>