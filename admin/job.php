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
              <li class="breadcrumb-item"><a href="job.php">Job</a></li>
            </ol>
          </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
           <h1 class="h2">JOB</h1>
           
          </div>
            <a href="add_job.php"><button>ADD JOB</button></a>
            <br>
          <table id="example" class="display" style="width:100%">
        <thead>
            <tr>

                <th>SL</th>
                <th>Category</th>
                <th>Company Name</th>
                <th>Company Logo</th>
                <th>location</th>
                <th>Sallary</th>
                <th>Job Type</th>
                <th>Experience</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
           





        <?Php
       $sql ="SELECT * FROM tbl_job";
       $res = mysqli_query($conn,$sql);
       $sn=1;//create variable from assign the value

       if($res==TRUE){
         //Count row to whether we have data in database or not
         $count =mysqli_num_rows($res);//function get row in database
         if($count>0){

           while($rows=mysqli_fetch_assoc($res)){
             //loop get the all the data from database
             $id=$rows['id'];
             $category_name=$rows['category_name'];
             $com_name=$rows['com_name'];
             $com_logo=$rows['com_logo'];
             $job_location=$rows['job_location'];
             $salry=$rows['salry'];
             $job_type=$rows['job_type'];
             $experience=$rows['experience'];
             ?>
    
            <tr>
                <td><?php echo $id;?> </td>
                <td><?php echo $category_name;?> </td>
                <td><?php echo $com_name;?> </td>
                <td>
                      <?php
                          //check whether image is aviable or not
                              if($com_logo=="")
                              {
                                  //Display the image
                                  echo "<div class= 'error'>Image not Available</div>";
                              }
                              else
                              {
                                  ?>
                                  <img src="img/<?php echo $com_logo; ?>"  idata-aos="flip-right">
                              <?php
                              }
                        ?>
                      </td>
                <td><?php echo $job_location;?> </td>
                <td><?php echo $salry;?> </td>
                <td><?php echo $job_type;?> </td>
                <td><?php echo $experience;?> </td>
                <td><button><a href="delete_job.php?id=<?php echo $id; ?>" >Delete </a</button></td>
                 <!-- <button><a href="delete_customer.php?id=<?php echo $id; ?>" >Delete </a</button></td> -->
                
              
            </tr>
         
          
         
            <?php
           }
          }
        }
        ?>
         
          
        </tbody>
        <tfoot>
        <th>SL</th>
                <th>Category</th>
                <th>Company Name</th>
                <th>Company Logo</th>
                <th>location</th>
                <th>Sallary</th>
                <th>Job Type</th>
                <th>Experience</th>
                <th>Action</th>
        </tfoot>
    </table>

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

          
        </main>
<?php include('footer.php')?>