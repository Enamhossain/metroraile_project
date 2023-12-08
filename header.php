<?php
/*
* This template for displaying the header
*/
?>

<!DOCTYPE html>
<html lang="<?php language_attributes()?>">

<head lang="<?php language_attributes()?>">
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

                                                                                                                                                                                                                                                                                           
   

</head>
<?php wp_head()?>
<body <?php body_class(); ?>>

    <div class="container">
        <div class="row">
            <!-- =============== Start Heading================ -->
            <div
                class="col-12 col-md-12  d-lg-flex   justify-content-between align-items-center   text-white align-items-center p-2 m-0 top-nav">
                <div class="d-md-flex p-0 m-0">
                    <p class="w-100 h-100">
                        বাংলাদেশ জাতীয় তথ্য বাতায়ন
                    </p>
                     <div class="ms-4 d-md-flex mb-3  ">
                     <select class="custom-select">
                        <option value="0" selected>
                            অফিসের ধরণ
                        </option>
                        <option value="1">মন্ত্রণালয়/বিভাগ<option>
                        <option value="2">অধিদপ্তর বাতায়ন</option>
                        <option value="3">বিভাগীয় বাতায়ন</option>
                        <option value="4">জেলা বাতায়ন</option>
                        <option value="5">উপজেলা বাতায়ন</option>
                        <option value="6">ইউনিয়ন বাতায়ন</option>
                        <option value="7">অন্যান্য</option>

                    </select>
                    <button type="button" class="btn btn-primary fs-6 ">Go</button>
                     </div>
                </div>

                <div class="mx-5 d-inline">
                   
                       <span>
                       <input type="text" class="input p-1 mb-1">
                         <button class="btn btn-primary mb-1">search</button>
                       </span>
                    <p class="float-end fs-5 ms-4">বাংলা</p>
                </div>




            </div>

            <!--=================== start banner ================ -->

            <!-- ===============  End Heading ================= -->
            <!-- hero section start -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 box-shadow hero_banner">

                        <div class="d-flex align-items-center">
                            <?php echo the_custom_logo();?>
                            <p class="mt-5 fw-bold fs-3 ms-2 mb-2 text-white  ">ঢাকা ম্যাস ট্রানজিট কোম্পানি লিমিটেড
                                (ডিএমটিসিএল)
                            </p>
                        </div>
                        <span class=" text-white h5" style="margin-left: 6%;"> শতভাগ সরকারি মালিকানাধীন কোম্পানি </span>


                    </div>
                </div>
            </div>
            <!-- hero section end -->

            <!-- Menu section -->
            <div class="col-md-12  mt-1 menu ">

                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa-solid fa-bars"></i>

                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

                            <div class="navbar-nav">
                               
                                    <i class="fa-solid fa-house fa-lg"></i>
                              

                                        <!-- <a class="nav-link dropbtn" href="#"> আমাদের সম্পর্কে</a>

                                        <ul class="dropdown-content" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul> -->

                                     <?php echo wp_nav_menu( [
                                        'theme_location' => 'TM',
                                        'theme_class' => 'navbar-nav nav2'
                                     ] );?>


                                <!-- <li class="nav-item ">


                                    <div class="dropdown">

                                        <a class="nav-link dropbtn" href="#"> প্রকল্প</a>

                                        <ul class="dropdown-content" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>

                                    </div>

                                </li>
                                <li class="nav-item  ">


                                    <div class="dropdown">

                                        <a class="nav-link dropbtn" href="#"> প্রকিউরমেন্ট</a>

                                        <ul class="dropdown-content" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>

                                    </div>
                                </li>
                                <li class="nav-item  ">



                                    <div class="dropdown">

                                        <a class="nav-link dropbtn" href="#"> অগ্রগতি প্রতিবেদন</a>

                                        <ul class="dropdown-content" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>

                                    </div>
                                </li>
                                <li class="nav-item ">

                                    <div class="dropdown">

                                        <a class="nav-link dropbtn " href="#" target="_blank">আইন/বিধি</a>


                                        <ul class="dropdown-content" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>

                                    </div>
                                </li>
                                <li class="nav-item ">

                                    <div class="dropdown">

                                        <a class="nav-link dropbtn" href="#">গ্যালারী</a>

                                        <ul class="dropdown-content" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>

                                    </div>
                                </li>
                                <li class="nav-item  ">
                                    <div class="dropdow">
                                        <a class="nav-link dropbtn " href="#" target="_blank">যোগাযোগ</a>

                                    </div>
                                </li>
                                <li class="nav-item ">

                                    <div class="dropdow">
                                        <a class="nav-link  dropbtn " href="#" target="_blank">সচরাচর জিজ্ঞাসিত
                                            প্রশ্ন</a>

                                        </ul>
                                    </div>

                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link dropbtn  " href="#" target="_blank">ওয়েব মেইল</a>
                                </li> -->

                            </div>

                        </div>
                    </div>
                </nav>

  </div>