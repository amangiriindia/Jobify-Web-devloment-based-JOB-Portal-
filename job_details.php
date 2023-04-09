<?php include ('menu.php');?>
    <main>
     
        <!-- Hero Area Start-->
        <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Job Deatails</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Hero Area End -->

        <?php

       $job_id = $_GET['id'];


        $sql ="SELECT * FROM tbl_job_deatail WHERE job_id ='$job_id'" ;
        $res = mysqli_query($conn,$sql);
 
        if($res==TRUE){
          //Count row to whether we have data in database or not
          $count =mysqli_num_rows($res);//function get row in database
         if($count>0){
 
                $rows=mysqli_fetch_assoc($res);
                //loop get the all the data from database

                $vacancy=$rows['vacancy'];
                $date=$rows['application_date'];
                $curr_date=$rows['curr_date'];
                $job_des=$rows['job_description'];
                $skill=$rows['skill_requrird'];
                $education=$rows['education_exprence'];
                $link=$rows['apply_link'];
                $company_des=$rows['compny_des'];
                
            

                $sql2 ="SELECT * FROM tbl_job WHERE id =$job_id";
                $res2 = mysqli_query($conn,$sql2);

                if($res2==TRUE){
                //Count row to whether we have data in database or not
                   
                    $count2 =mysqli_num_rows($res2);//function get row in database
                   if($count2>0){
                    $rows=mysqli_fetch_assoc($res2);
                    $id=$rows['id'];
                    $category_name=$rows['category_name'];
                    $com_name=$rows['com_name'];
                    $com_logo=$rows['com_logo'];
                    $job_location=$rows['job_location'];
                    $salry=$rows['salry'];
                    $job_type=$rows['job_type'];
                    $experience=$rows['experience'];
                    ?>

                    

                    <!-- job post company Start -->
                        <div class="job-post-company pt-120 pb-120">
                            <div class="container">
                                <div class="row justify-content-between">
                                    <!-- Left Content -->
                                    <div class="col-xl-7 col-lg-8">
                                        <!-- job single -->
                                        <div class="single-job-items mb-50">
                                            <div class="job-items">
                                                <div class="company-img company-img-details">
                                                    <a href="#"><img src="admin/img/<?php echo $com_logo; ?>" alt=""></a>
                                                </div>
                                                <div class="job-tittle">
                                                    <a href="#">
                                                        <h4><?php echo $category_name; ?></h4>
                                                    </a>
                                                    <ul>
                                                        <li><?php echo $com_name; ?></li>
                                                        <li><i class="fas fa-map-marker-alt"></i><?php echo $job_location; ?></li>
                                                        <li><?php echo $salry; ?></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- job single End -->
                                    
                                        <div class="job-post-details">
                                            <div class="post-details1 mb-50">
                                                <!-- Small Section Tittle -->
                                                <div class="small-section-tittle">
                                                    <h4>Job Description</h4>
                                                </div>
                                                <p><?php echo $job_des; ?></p>
                                            </div>
                                            <div class="post-details2  mb-50">
                                                <!-- Small Section Tittle -->
                                                <div class="small-section-tittle">
                                                    <h4>Required Knowledge, Skills, and Abilities</h4>
                                                </div>
                                            <ul>
                                            <?php echo $skill; ?>
                                            </ul>
                                            </div>
                                            <div class="post-details2  mb-50">
                                                <!-- Small Section Tittle -->
                                                <div class="small-section-tittle">
                                                    <h4>Education + Experience</h4>
                                                </div>
                                            <ul>
                                            <?php echo $education; ?>
                                            </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Right Content -->
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="post-details3  mb-50">
                                            <!-- Small Section Tittle -->
                                        <div class="small-section-tittle">
                                            <h4>Job Overview</h4>
                                        </div>
                                        <ul>
                                            <li>Posted date : <span><?php echo $curr_date; ?></span></li>
                                            <li>Location : <span><?php echo $job_location; ?></span></li>
                                            <li>Vacancy : <span><?php echo $vacancy; ?></span></li>
                                            <li>Job nature : <span><?php echo $job_type; ?></span></li>
                                            <li>Salary :  <span><?php echo $salry; ?>  yearly</span></li>
                                            <li>Application date : <span><?php echo $date; ?></span></li>
                                        </ul>
                                        <div class="apply-btn2">
                                            <a href="<?php echo $link; ?>" class="btn">Apply Now</a>
                                        </div>
                                    </div>
                                        <div class="post-details4  mb-50">
                                            <!-- Small Section Tittle -->
                                        <div class="small-section-tittle">
                                            <h4>Company Information</h4>
                                        </div>
                                            <span>Colorlib</span>
                                            <p><?php echo $company_des; ?></p>
                                            <ul>
                                                <li>Name: <span><?php echo $com_name; ?></span></li>
                                                <li>Email: <span>amangiri@gmail.com</span></li>
                                            </ul>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- job post company End -->






                    <?php
                 
                }
            }
        }
        }else{
            echo"NO DATA ADDED";
        }
                  ?>
  
        </div>
        <!-- job post company End -->




    </main>
    <?php include ('footer.php');?>
       