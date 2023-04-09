<?php


include('menu.php');

?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">DashBoard</a></li>
              <li class="breadcrumb-item"><a href="category.php">Category</a></li>
            </ol>
          </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
           <h1 class="h2">Category</h1>
          </div>
            <a href="add_category.php"><button>ADD Category</button></a>
            <br/>
          <table id="example" class="display" style="width:100%">
        <thead>
            <tr>

              <th>SN</th>
              <th>Category</th>
              <th>Image</th>
              <th>Category_Number</th>
              <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
           





        <?Php
        $sql ="SELECT * FROM tbl_category";
        $res = mysqli_query($conn,$sql);
 
        if($res==TRUE){
          //Count row to whether we have data in database or not
          $count =mysqli_num_rows($res);//function get row in database
          if($count>0){
 
            while($rows=mysqli_fetch_assoc($res)){
              //loop get the all the data from database
              $id=$rows['id'];
              $category=$rows['category_name'];
              $image=$rows['category_img'];
              $total=$rows['total'];

                  ?>
  
                    <tr>
                      <td><?php echo $id;?> </td>
                      <td><?php echo $category;?> </td>
                      <td>
                      <?php
                                        //check whether image is aviable or not
                                            if($image=="")
                                            {
                                                //Display the image
                                                echo "<div class= 'error'>Image not Available</div>";
                                            }
                                            else
                                            {
                                                ?>
                                                <img src="img/<?php echo $image; ?>"  idata-aos="flip-right">
                                            <?php
                                            }
                                    ?>
                      </td>
                      <td><?php echo $total;?> </td>
                      <td><button><a href="delete_category.php?id=<?php echo $id; ?>" >Delete </a</button></td>
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
            <th>Image</th>
            <th>Category_Number</th>
            <th>Action</th>
        </tfoot>
    </table>

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

          
        </main>
<?php include('footer.php')?>