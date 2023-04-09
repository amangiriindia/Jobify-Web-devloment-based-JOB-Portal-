<?php include ('menu.php');?>

<main>
    <?php include ('search.php');?>










    <!-- counter  section  start -->
    <section class="py-5 bg-image overlay-primary fixed overlay" id="next"
        style="background-image: url('folder/images/hero_1.jpg');">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="section-title mb-2 text-white">JobBoard Site Stats</h2>
                    <p class="lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita unde
                        officiis
                        recusandae sequi excepturi corrupti.</p>
                </div>
            </div>
            <div class="row pb-0 block__19738 section-counter">

                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="1930">0</strong>
                    </div>
                    <span class="caption">Candidates</span>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="54">0</strong>
                    </div>
                    <span class="caption">Jobs Posted</span>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="120">0</strong>
                    </div>
                    <span class="caption">Jobs Filled</span>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="550">0</strong>
                    </div>
                    <span class="caption">Companies</span>
                </div>


            </div>
        </div>
    </section>
    <!-- ========counter section===== -->






    <div class="our-services section-pad-t30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>FEATURED TOURS Packages</span>
                        <h2>Browse Top Categories </h2>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-contnet-center">


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
                    $image_name=$rows['category_img'];
                    $total=$rows['total'];

                  ?>
                <!-- <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span>
                                <?php
                                if($image_name=="")
                              {
                                  //Display the image
                                  echo "<div class= 'error'>Image not Available</div>";
                              }
                              else
                              {
                                  ?>
                                <img src="admin/img/<?php echo $image_name; ?>" alt="">
                                <?php
                              }
                              ?>

                            </span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="job_listing.php">
                                    <?php echo $category;?>
                                </a></h5>
                            <span>(
                                <?php echo $total;?>)
                            </span>
                        </div>
                    </div>
                </div> -->

                <?php
                    }}}
                ?>





                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-cms">

                            </span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="job_listing.php">Design & Development</a></h5>
                            <span>(658)</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-report"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="job_listing.php">Sales & Marketing</a></h5>
                            <span>(658)</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-app"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="job_listing.php">Mobile Application</a></h5>
                            <span>(658)</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-helmet"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="job_listing.php">Data Scientist</a></h5>
                            <span>(658)</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-high-tech"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="job_listing.php">Information Technology</a></h5>
                            <span>(658)</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-real-estate"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="job_listing.php">Web Developer</a></h5>
                            <span>(658)</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-content"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="job_listing.php">Content Writer</a></h5>
                            <span>(658)</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- More Btn -->
            <!-- Section Button -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="browse-btn2 text-center mt-50">
                        <a href="job_listing.php" class="border-btn2">Browse All Sectors</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services End -->
    <!-- Online CV Area Start -->
    <div class="online-cv cv-bg section-overly pt-90 pb-120" data-background="assets/img/gallery/cv_bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="cv-caption text-center">
                        <p class="pera1">FEATURED TOURS Packages</p>
                        <p class="pera2"> Make a Difference with Your Online Resume!</p>
                        <a href="https://app.enhancv.com/onboarding#2" class="border-btn2 border-btn4">Make your cv</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Online CV Area End-->
    <!-- Featured_job_start -->
    <section class="featured-job-area feature-padding">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>Recent Job</span>
                        <h2>Featured Jobs</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10">


                    <?Php
                            $sql ="SELECT * FROM tbl_job Limit 4";
                            $res = mysqli_query($conn,$sql);

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



                    <!-- single-job-content -->
                    <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <a href="job_details.php"><img src="admin/img/<?php echo $com_logo;?>" alt="" width="90"
                                        height="90"></a>
                            </div>
                            <div class="job-tittle">
                                <a href="job_details.php">
                                    <h4>
                                        <?php echo $category_name;?>
                                    </h4>
                                </a>
                                <ul>
                                    <li>
                                        <?php echo $com_name;?>
                                    </li>
                                    <li><i class="fas fa-map-marker-alt"></i>
                                        <?php echo $job_location;?>
                                    </li>
                                    <li>
                                        <?php echo $salry;?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="items-link f-right">
                            <a href="job_details.php?id=<?php echo $id; ?>">
                                <?php echo $job_type;?>
                            </a>
                            <span>Recent uploded</span>
                        </div>
                    </div>

                    <?php

                                }
                            }
                        }
                    

                        ?>

                </div>
            </div>
        </div>
    </section>
    <!-- Featured_job_end -->
    
    <!-- How  Apply Process Start-->
    <div class="apply-process-area apply-bg pt-150 pb-150" data-background="assets/img/gallery/how-applybg.png">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle white-text text-center">
                        <span>Apply process</span>
                        <h2> How it works</h2>
                    </div>
                </div>
            </div>
            <!-- Apply Process Caption -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-search"></span>
                        </div>
                        <div class="process-cap">
                            <h5>1. Search a job</h5>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-curriculum-vitae"></span>
                        </div>
                        <div class="process-cap">
                            <h5>2. Apply for job</h5>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-tour"></span>
                        </div>
                        <div class="process-cap">
                            <h5>3. Get your job</h5>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- How  Apply Process End-->
    <!-- Featured_job_start -->
    <section class="featured-job-area feature-padding">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <h2>Work From Home Jobs</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10">


                    <?Php
                            $sql ="SELECT * FROM tbl_job WHERE job_type ='work From Home'";
                            $res = mysqli_query($conn,$sql);

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



                    <!-- single-job-content -->
                    <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <a href="job_details.php"><img src="admin/img/<?php echo $com_logo;?>" alt="" width="90"
                                        height="90"></a>
                            </div>
                            <div class="job-tittle">
                                <a href="job_details.php">
                                    <h4>
                                        <?php echo $category_name;?>
                                    </h4>
                                </a>
                                <ul>
                                    <li>
                                        <?php echo $com_name;?>
                                    </li>
                                    <li><i class="fas fa-map-marker-alt"></i>
                                        <?php echo $job_location;?>
                                    </li>
                                    <li>
                                        <?php echo $salry;?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="items-link f-right">
                            <a href="job_details.php?id=<?php echo $id; ?>">
                                <?php echo $job_type;?>
                            </a>
                            <span>Recent uploded</span>
                        </div>
                    </div>

                    <?php

                                }
                            }
                        }
                    

                        ?>

                </div>
            </div>
        </div>
    </section>
    <!-- Featured_job_end -->

         <!-- ==========Extra signup start========= -->
         <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h2 class="text-white">Looking For A Job?</h2>
                    <p class="mb-0 text-white lead">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora
                        adipisci
                        impedit.</p>
                </div>
                <div class="col-md-3 ml-auto">
                    <a href="#" class="btn btn-warning btn-block btn-lg">Sign Up</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Extra signup end========= -->

    <!-- ===========INTERNSHIP================== -->
    <section class="featured-job-area feature-padding">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <h2>INTERNSHIP</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10">


                    <?Php
                            $sql ="SELECT * FROM tbl_job WHERE job_type ='intership'";
                            $res = mysqli_query($conn,$sql);

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



                    <!-- single-job-content -->
                    <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <a href="job_details.php"><img src="admin/img/<?php echo $com_logo;?>" alt="" width="90"
                                        height="90"></a>
                            </div>
                            <div class="job-tittle">
                                <a href="job_details.php">
                                    <h4>
                                        <?php echo $category_name;?>
                                    </h4>
                                </a>
                                <ul>
                                    <li>
                                        <?php echo $com_name;?>
                                    </li>
                                    <li><i class="fas fa-map-marker-alt"></i>
                                        <?php echo $job_location;?>
                                    </li>
                                    <li>
                                        <?php echo $salry;?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="items-link f-right">
                            <a href="job_details.php?id=<?php echo $id; ?>">
                                <?php echo $job_type;?>
                            </a>
                            <span>Recent uploded</span>
                        </div>
                    </div>

                    <?php

                                }
                            }
                        }
                    

                        ?>

                </div>
            </div>
        </div>
    </section>
    <!-- Featured_job_end -->

    <!-- Blog Area Start -->

    <div class="home-blog-area blog-h-padding">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>Our latest blog</span>
                        <h2>Our recent news</h2>
                    </div>
                </div>
            </div>
            <div class="row">




                <?Php
                        $sql ="SELECT * FROM tbl_blog WHERE recent='yes'";
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
                            $dest=$rows['recent'];
                            $short_dest=$rows['sort_description'];

                             ?>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <?php
                            if($image_name=="")
                              {
                                  //Display the image
                                  echo "<div class= 'error'>Image not Available</div>";
                              }
                              else
                              {
                                  ?>
                                <img src="admin/img/<?php echo $image_name; ?>" alt="" height="330px">
                                <?php
                              }
                              ?>
                                <!-- Blog date -->
                                <div class="blog-date text-center">
                                    <span>
                                        <?php  echo $day?>
                                    </span>
                                    <p>
                                        <?php  echo $month?>
                                    </p>
                                </div>
                            </div>
                            <div class="blog-cap">
                                <p>|
                                    <?php  echo $category?>
                                </p>
                                <h3><a href="single-blog.php">
                                        <?php  echo $short_dest?>
                                    </a></h3>
                                <a href="#" class="more-btn">Read more »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                            }
                        }
                    }
                  ?>



                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="assets/img/blog/home-blog2.jpg" alt="">
                                <!-- Blog date -->
                                <div class="blog-date text-center">
                                    <span>24</span>
                                    <p>Now</p>
                                </div>
                            </div>
                            <div class="blog-cap">
                                <p>| Properties</p>
                                <h3><a href="single-blog.php">Footprints in Time is perfect House in Kurashiki</a></h3>
                                <a href="#" class="more-btn">Read more »</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->
     <!-- Callback Start -->

 <div class="container-fluid callback my-5 pt-5">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bg-white border rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Get In Touch
                            </p>
                            <h1 class="display-5 mb-5">Request A Call-Back</h1>
                        </div>
                        <div class="row g-3">
                            <!-- <form action="" method="POST"> -->
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="email" id="mail"
                                            placeholder="Your Email">
                                        <label for="mail">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="mobile" id="mobile"
                                            placeholder="Your Mobile">
                                        <label for="mobile">Your Mobile</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="subject" id="subject"
                                            placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea name="description" class="form-control"
                                            placeholder="Leave a message here" id="message"
                                            style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button name="submit" class="btn btn-primary w-100 py-3" type="submit">Submit
                                        Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Callback End -->
    <!-- =========Extra Image section start========== -->
    <section>
        <h2 class="text-center">CREATED BY</h2>
        <div class="ccontainer">
            <a href="<?php echo SITEURL;?>assets\portfolio\index.php">
            <div class="ccontainer1">
                <div class="cfront">
                    <img src="img/aman.jpeg" idata-aos="flip-right" height="195px" width="195px" alt="">
                </div>
                <div class="cback">
                    <h1>Aman giri</h1>
                </div>
            </div>
            </a>
        </div>
    </section>

    
    <!-- =========Extra Image section start========== -->

</main>


<?php include ('footer.php');?>