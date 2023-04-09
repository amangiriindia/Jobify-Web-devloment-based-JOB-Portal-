<?php


include('menu.php');

if(isset($_SESSION['add'])){
  echo $_SESSION['add'];  //displaying session massageS
  unset($_SESSION['add']);//removing session message
}
if(isset($_SESSION['delete']))
{
    echo $_SESSION['delete'];
    unset($_SESSION['delete']);
}
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">DashBoard</a></li>
              <li class="breadcrumb-item"><a href="customer.php">Coustmer</a></li>
            </ol>
          </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
           <h1 class="h2">customer</h1>
          </div>
            <a href="add_customer.php"><button>ADD CUSTOMER</button></a>
            <br>
          <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>

                
            </tr>
        </thead>
        <tbody>
           





        <?Php
       $sql ="SELECT * FROM admin_login";
       $res = mysqli_query($conn,$sql);
       $sn=1;//create variable from assign the value

       if($res==TRUE){
         //Count row to whether we have data in database or not
         $count =mysqli_num_rows($res);//function get row in database
         if($count>0){

           while($rows=mysqli_fetch_assoc($res)){
             //loop get the all the data from database
             $id=$rows['id'];
             $email=$rows['admin_email'];
             $username=$rows['admin_username'];
             $phone=$rows['phone'];
             $password=$rows['admin_password'];
             ?>
            <tr>
                <td><?php echo $id;?> </td>
                <td><?php echo $username;?> </td>
                <td><?php echo $phone;?> </td>
                <td><?php echo $email;?> </td>
                <td><?php echo $password;?> </td>
                <td>
                 <button><a href="delete_customer.php?id=<?php echo $id; ?>" >Delete </a</button></td>
                
            </tr>
         
          
         
            <?php
           }
          }
        }
        ?>
         
          
        </tbody>
        <tfoot>
               <th>SL</th>
                <th>Name</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
        </tfoot>
    </table>

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

          
        </main>
<?php include('footer.php')?>