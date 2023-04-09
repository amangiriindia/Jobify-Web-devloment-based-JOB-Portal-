<?php include ('menu.php');?>
<!-- Hero Area Start-->
<div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center"
        data-background="assets/img/hero/about.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Contact us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->


<div class="contact-section">




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




    <?php
    if(isset($_POST['submit']))
    {

    
       // get the data from form
         $name=$_POST['name'];
         $name =str_replace("<"," ",$name);
         $name =str_replace(">"," ",$name);
         $name =str_replace("'"," ",$name);

         $email=$_POST['email'];
         $email =str_replace("<"," ",$email);
         $email =str_replace(">"," ",$email);
         $email =str_replace("'"," ",$email);

         $massage=$_POST['description'];
         $massage =str_replace("<"," ",$massage);
         $massage =str_replace(">"," ",$massage);
         $massage =str_replace("'"," ",$massage);

         $subject=$_POST['subject'];
         $subject =str_replace("<"," ",$subject);
         $subject =str_replace(">"," ",$subject);
         $subject =str_replace("'"," ",$subject);
    
    
        
         if($name ==""){

         }else{
            //sql save data in database
         $sql = "INSERT INTO tbl_contact SET
         name='$name',
         email='$email',
         description='$massage',
         subject='$subject'
         ";
        //Executing Query and saving data in Database
        $res = mysqli_query($conn,$sql) or die (mysqli_error());
    
        //check wether the (Query is excuted) data in inserted or not and display appopriate message
        if($res==TRUE)
        {
            
    
           //session variable display massage
           echo  "<script> alert('We will be try to solve this problem Thanks For the contact We will give The reply with in 24 hours (Jobify Team)')</script>";
    
           
        }
        else
        {
          //  echo "data not inserted";
           //session variable display massage
          $_SESSION['add']="Failed to Add Admin";
        }
         }
    }

?>


         <!-- ==== Contact Section Start==== -->
            <div class="contact-extra">
            <h3 class="contact-title padd-15">Have you Any Question ?</h3>
                    <h4 class="contact-sub-title padd-15">I'M AT YOUR SERVICES</h4>
                    <div class=" row contact">
                        <!-- ===Contact info item start=== -->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <h4>Call Us on</h4>
                            <p>+91 7070099770</p>
                        </div>
                        <!-- ====Contact info item end=== -->
                        <!-- ===Contact info item start=== -->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-map-marker-alt"></i></div>
                            <h4>Office</h4>
                            <p>Lucknow</p>
                        </div>
                        <!-- ====Contact info item end=== -->
                        <!-- ===Contact info item start=== -->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <h4>Email</h4>
                            <p>amangiri381@gmail.com</p>
                        </div>
                        <!-- ====Contact info item end=== -->
                                                <!-- ===Contact info item start=== -->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-globe-europe"></i></div>
                            <h4>Website</h4>
                            <p>www.domain.com</p>
                        </div>
                        <!-- ====Contact info item end=== -->
                    </div>
            </div>
            <!-- ===== Contact Section End===== -->
        </div>



</div>















<!-- ================ contact section start ================= -->
<section class="contact-section">


   



    <!-- <div class="row">
        <div class="col-12">
            <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">

            <div class="form">
                <form action="" method="POST">
                    <table class="tbl-30">
                        <tr>
                            <td>Name</td>
                            <td>
                                <input type="text" name="name" placeholder="Enter your name" required>
                            </td>
                        </tr>

                        <tr>
                            <td>Email</td>
                            <td>
                                <input type="email" name="email" placeholder="Enter your Email" required>
                            </td>
                        </tr>

                        <tr>
                            <td>Subject</td>
                            <td>
                                <input type="text" name="subject" placeholder="Enter Your password" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Problem</td>
                            <td>
                                <textarea name="description" cols="30" rows="6" placeholder="Write your problem"
                                    required></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <div class="g-recaptcha" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
                            </td>

                        </tr>



                        <tr>
                            <td colspan="2">
                                <input type="submit" name="submit" value="Submit" class="btn-secondary">
                            </td>
                        </tr>
                    </table>

                </form>
            </div>



        






        </div>
        <div class="col-lg-3 offset-lg-1">
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-home"></i></span>
                <div class="media-body">
                    <h3>Lucknow India</h3>
                    <p>, CA 91770</p>
                </div>
            </div>

            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-facebook"></i></span>
                <div class="media-body">
                    <h3>+91 70434-45563</h3>
                    <p>Mon to Fri 24 hours</p>
                </div>
            </div>
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-linkedin"></i></span>
                <div class="media-body">
                    <h3>+91 70434-45563</h3>
                    <p>Mon to Fri 24 hours</p>
                </div>
            </div>
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-email"></i></span>
                <div class="media-body">
                    <h3>support@Jobify.com</h3>
                    <p>Send us your query anytime!</p>
                </div>
            </div>
        </div>
        <a href="https://chat.whatsapp.com/GlBTMcgRQs1IrqfgZDLzSY"
            style="display: table; font-family: sans-serif; text-decoration: none; margin: 1em auto; color: #fff; font-size: 0.9em; padding: 1em 2em 1em 3.5em; border-radius: 2em; font-weight: bold; background: #25d366 url('https://tochat.be/click-to-chat-directory/css/whatsapp.svg') no-repeat 1.5em center; background-size: 1.6em;">Contacto
            con WhatsApp</a>

    </div>
    </div> -->
</section>


<!--you can put this line anywhere in the site-->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<!-- ================ contact section end ================= -->



<?php include ('footer.php');?>