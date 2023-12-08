<?php get_header();?>

            <div class="content row">

                <div class="col-md-9 mb-2">
                    <div class="container1">
                        <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
                        <img id="expandedImg" style="width:100%">
                        <div id="imgtext"></div>
                    </div>
                    <div class="row1">
                        <div class="column" >
                            <img src="<?php echo get_template_directory_uri()?>/Img/images/img1.jpg" onclick="myFunction(this);" alt="Nature" 
                           >
                        </div>
                        <div class="column">
                            <img src="<?php echo get_template_directory_uri()?>/Img/images/img2.jpg" alt="" 
                                onclick="myFunction(this);">
                        </div>
                        <div class="column">
                            <img src="<?php echo get_template_directory_uri()?>/Img/images/img3.jpg" alt=""> 
                        </div>
                        <div class="column">
                            <img src="<?php echo get_template_directory_uri()?>/Img/images/img4.jpg" alt=""
                                onclick="myFunction(this);">
                        </div>
                        <div class="column">
                            <img src="<?php echo get_template_directory_uri()?>/Img/images/img5.jpg" alt="" 
                                onclick="myFunction(this);">
                        </div>
                        <div class="column">
                            <img src="<?php echo get_template_directory_uri()?>/Img/images/img6.jpg" alt="" 
                                onclick="myFunction(this);">
                        </div>
                        <div class="column">
                            <img src="<?php echo get_template_directory_uri()?>/Img/images/img7.jpg" alt=""
                                onclick="myFunction(this);">
                        </div>


                      
                    </div>

              
                    
                    

                <div class="col col-md-12 mt-4 ">
                    <!-- <div class="row">
                        <div class="card  col-12 col-md-6   ">
                            <h4>আমাদের সম্পর্কে</h4>
                            <div class=" card-body d-flex  ">
                                <div class="img ">
                                    <img src="Img/icon1.png" alt="" width="100%">
                                </div>
                                <div class="side-text mx-5 ">
                                    <a href="#" class="text-decoration-none"> <i class="fa fa-angle-right">এক নজরে ঢাকা ম্যাস ট্রানজিট কোম্পানি লিমিটেড</i> 
                                    <br>
                                    <a href="#" class="text-decoration-none"> <i class="fa fa-angle-right">   </i>ভিশন ও মিশন </a>
                                    <br>
                                    <a href="#" class="text-decoration-none"><i class="fa fa-angle-right "></i>
                                    সেবা প্রদান প্রতিশ্রুতি (সিটিজেন্‌স চার্টার)</a>
                                    <br>
                                    <a href="#" class="text-decoration-none"><i class="fa fa-angle-right"></i>Repo
                                    সেবা প্রদান প্রতিশ্রুতি (সিটিজেন্‌স চার্টার) </a>
                                </div>
                            </div>
                        </div>
                        <div class="card col-12 col-md-6  ">
                            <h4>MEDIA & PRESS RELEASE</h4>
                            <div class="card-body d-flex  ">
                                <div class="img ">
                                    <img src="Img/icon2.png" alt="" width="100%">
                                </div>
                                <div class="side-text mx-5 ">
                                    <a href="#" class="text-decoration-none"> <i class="fa fa-angle-right"></i> MPS
                                        (july - December 2023)</a>
                                    <br>
                                    <a href="#" class="text-decoration-none"> <i class="fa fa-angle-right"></i> Monetary
                                        Policy</a>
                                    <br>
                                    <a href="#" class="text-decoration-none"><i class="fa fa-angle-right "></i>
                                        Banknotes & Coins</a>
                                    <br>
                                    <a href="#" class="text-decoration-none"><i class="fa fa-angle-right"></i> Repo
                                        Reverse Repo </a>
                                </div>
                            </div>
                        </div>
                      
                    </div> -->
                         <div class="row">
                         <div class="col col-md-12 card mt-2">
                  <?php dynamic_sidebar('card_section')?>

                  </div>
                                <div class="col-md-6 card gy-3">

                                    <?php dynamic_sidebar('card1_section')?>
                                </div>
                                <div class="col-md-6 card gy-3">

                                    <?php dynamic_sidebar('card1_section')?>
                                </div>
                                <div class="col-md-6 card gy-3">

                                    <?php dynamic_sidebar('card1_section')?>
                                </div>
                                <div class="col-md-6 card gy-3">

                                    <?php dynamic_sidebar('card1_section')?>
                                </div>
                                <div class="col-md-6 card gy-3">

                                    <?php dynamic_sidebar('card1_section')?>
                                </div>
                         </div>
                     
                </div>
                </div>


                
                <div class="col col-md-3 ">
                    <div class=" mt-1 border border-2" >
                         <?php dynamic_sidebar( 'left_sidebar' )?>
                    </div>
                </div>
            </div>

            

<?php get_footer();?>

   




