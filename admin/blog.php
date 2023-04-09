<?php


include('menu.php');

?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">DashBoard</a></li>
              <li class="breadcrumb-item"><a href="blog.php">blog</a></li>
            </ol>
          </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
           <h1 class="h2">Blogger</h1>
           
          </div>
            <a href="add_blog.php"><button>ADD Blog</button></a>
            <br/>
          <table id="example" class="display" style="width:100%">
        <thead>
            <tr>

              <th>SN</th>
              <th>Category</th>
              <th>Tag</th>
              <th>Image</th>
              <th>Day</th>
              <th>Month</th>
              <th>Year</th>
              <th>Spacial</th>
              <th>Description</th>
              <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
           





        <?Php
        $sql ="SELECT * FROM tbl_blog";
        $res = mysqli_query($conn,$sql);
 
        if($res==TRUE){
          //Count row to whether we have data in database or not
          $count =mysqli_num_rows($res);//function get row in database
          if($count>0){
 
            while($rows=mysqli_fetch_assoc($res)){
              //loop get the all the data from database
              $id=$rows['id'];
              $category=$rows['category'];
              $tag=$rows['tag'];
              $image_name=$rows['image'];
              $day=$rows['day'];
              $month=$rows['month'];
              $year=$rows['year'];
              $recent=$rows['recent'];
              $short_dest=$rows['sort_description'];

                  ?>
  
                    <tr>
                      <td><?php echo $id;?> </td>
                      <td><?php echo $category;?> </td>
                      <td><?php echo $tag;?> </td>
                      <td>
                      <?php
                          //check whether image is aviable or not
                              if($image_name=="")
                              {
                                  //Display the image
                                  echo "<div class= 'error'>Image not Available</div>";
                              }
                              else
                              {
                                  ?>
                                  <img src="img/<?php echo $image_name; ?>"  idata-aos="flip-right">
                              <?php
                              }
                        ?>
                      </td>
                      <td><?php echo $day;?> </td>
                      <td><?php echo $month;?> </td>
                      <td><?php echo $year;?> </td>
                      <td><?php echo $recent;?> </td>
                      <td><?php echo $short_dest;?> </td>
                    



                      <td><button><a href="delete_blog.php?id=<?php echo $id; ?>" >Delete </a</button></td>
                      <!-- <button><a href="delete_customer.php?id=<?php echo $id; ?>" >Delete </a</button></td> -->
                        
                      
                    </tr>
        
        
        
                  <?php
                }
              }
           }
          
        
        ?>
         
          
        </tbody>
        <tfoot>
          <th>SN</th>
          <th>Category</th>
          <th>Tag</th>
          <th>Image</th>
          <th>Day</th>
          <th>Month</th>
          <th>Year</th>
          <th>Spacial</th>
          <th>Description</th>
          <th>Action</th>
        </tfoot>
    </table>

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

          
        </main>
<?php include('footer.php')?>