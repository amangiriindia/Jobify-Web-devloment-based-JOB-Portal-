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
              <li class="breadcrumb-item"><a href="job.php">job</a></li>
              <li class="breadcrumb-item"><a href="job-deatail.php">Deatail</a></li>
            </ol>
          </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
           <h1 class="h2">Job Deatails</h1>
  
          </div>
            <a href="add_deatail.php"><button>ADD JOB details</button></a>
            <br>
          <table id="example" class="display" style="width:100%">
        <thead>
            <tr>

            <th>SL</th>
                <th>job Id</th>
                <th>Company Name</th>
                <th>location</th>
                <th>vacancy</th>
                <th>Sallary</th>
                <th>Date</th>
                <th>Job Type</th>
             
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
           





        <?Php
        $sql ="SELECT * FROM tbl_job_deatail";
        $res = mysqli_query($conn,$sql);
 
        if($res==TRUE){
          //Count row to whether we have data in database or not
          $count =mysqli_num_rows($res);//function get row in database
          if($count>0){
 
            while($rows=mysqli_fetch_assoc($res)){
              //loop get the all the data from database
              $id=$rows['id'];
              $job_id=$rows['job_id'];
              $vacancy=$rows['vacancy'];
              $date=$rows['application_date'];
              $skill=$rows['skill_requrird'];
             
          

              $sql2 ="SELECT * FROM tbl_job WHERE id =$job_id";
              $res2 = mysqli_query($conn,$sql2);

              if($res2==TRUE){
                //Count row to whether we have data in database or not
                  $rows=mysqli_fetch_assoc($res2);
          
                  $com_name=$rows['com_name'];
                  $job_location=$rows['job_location'];
                  $salry=$rows['salry'];
                  $job_type=$rows['job_type'];
                  ?>
  
                    <tr>
                      <td><?php echo $id;?> </td>
                      <td><?php echo $job_id;?> </td>
                      <td><?php echo $com_name;?> </td>
                      <td><?php echo $job_location;?> </td>
                      <td><?php echo $vacancy;?> </td>
                      <td><?php echo $salry;?> </td>
                      <td><?php echo $date;?> </td>
                      <td><?php echo $job_type;?> </td>
                    



                      <td><button><a href="delete_jobdest.php?id=<?php echo $id; ?>" >Delete </a</button></td>
                      <!-- <button><a href="delete_customer.php?id=<?php echo $id; ?>" >Delete </a</button></td> -->
                        
                      
                    </tr>
        
        
        
                  <?php
                }
              }
           }
          }
        
        ?>
         
          
        </tbody>
        <tfoot>
                 <th>SL</th>
                <th>job Id</th>
                <th>Company Name</th>
                <th>location</th>
                <th>vacancy</th>
                <th>Sallary</th>
                <th>Date</th>
                <th>Job Type</th>
              
                <th>Action</th>
        </tfoot>
    </table>

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

          
        </main>
<?php include('footer.php')?>