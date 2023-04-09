
<?php


include('menu.php');

?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">DashBoard</a></li>
              <li class="breadcrumb-item"><a href="category.php">User Feedback</a></li>
            </ol>
          </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
           <h1 class="h2">User Feedback</h1>
  
          </div>

            <br/>
          <table id="example" class="display" style="width:100%">
        <thead>
            <tr>

              <th>SN</th>
              <th>User_Name</th>
              <th>Email</th>
              <th>Subject</th>
              <th>Description</th>
              <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
           





        <?Php
        $sql ="SELECT * FROM tbl_contact";
        $res = mysqli_query($conn,$sql);
 
        if($res==TRUE){
          //Count row to whether we have data in database or not
          $count =mysqli_num_rows($res);//function get row in database
          if($count>0){
 
            while($rows=mysqli_fetch_assoc($res)){
              //loop get the all the data from database
              $id=$rows['id'];
              $name=$rows['name'];
              $email=$rows['email'];
              $description=$rows['description'];
              $subject=$rows['subject'];
             $sn=1;
                  ?>
  
                    <tr>
                      <td><?php echo $sn++?> </td>
                      <td><?php echo $name;?> </td>
                      <td><?php echo $email;?> </td>
                      <td><?php echo $subject;?> </td>
                      <td><?php echo $description;?> </td>
                      <td><button><a href="delete_contact.php?id=<?php echo $id; ?>" >Delete </a</button></td>
                      <td><button><a href="contact_reply.php?id=<?php echo $id; ?>" >Reply </a</button></td>
                        
                      
                    </tr>
        
        
        
                  <?php
                }
              }
           }
          
        
        ?>
         
          
        </tbody>
        <tfoot>
            <th>SN</th>
            <th>User_Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Description</th>
            <th>Action</th>
        </tfoot>
    </table>

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

          
        </main>
<?php include('footer.php')?>