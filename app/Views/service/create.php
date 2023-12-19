<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="<?php

use Kint\Zval\Value;

 echo site_url('assets/images/fevicon.png') ?>" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.min.css') ?>" />
      <!-- site css -->
      <link rel="stylesheet" href="<?php echo site_url('assets/style.css') ?>" />
      <!-- responsive css -->
      <link rel="stylesheet" href="<?php echo site_url('assets/css/responsive.css') ?>" />
      <!-- color css -->
      <link rel="stylesheet" href="<?php echo site_url('assets/css/colors.css') ?>" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap-select.css') ?>" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="<?php echo site_url('assets/css/perfect-scrollbar.css') ?>" />
      <!-- custom css -->
      <link rel="stylesheet" href="<?php echo site_url('assets/css/custom.css') ?>" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <?php echo $this->include('includes/sidebar.php'); ?>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
              <?php echo $this->include('includes/topbar.php'); ?>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid mt-5">
                     <!-- package start -->
                     <div class="row column1 social_media_section">
                        <div class="col-md-6 col-lg-3">
                           <div class="full socile_icons fb margin_bottom_30">
                              <div class="social_icon">
                                 <i class="fa fa-facebook"></i>
                              </div>
                              <div class="social_cont">
                                 <ul>
                                    <li>
                                       <span><strong>35k</strong></span>
                                       <span>Friends</span>
                                    </li>
                                    <li>
                                       <span><strong>128</strong></span>
                                       <span>Feeds</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full socile_icons tw margin_bottom_30">
                              <div class="social_icon">
                                 <i class="fa fa-twitter"></i>
                              </div>
                              <div class="social_cont">
                                 <ul>
                                    <li>
                                       <span><strong>584k</strong></span>
                                       <span>Followers</span>
                                    </li>
                                    <li>
                                       <span><strong>978</strong></span>
                                       <span>Tweets</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full socile_icons linked margin_bottom_30">
                              <div class="social_icon">
                                 <i class="fa fa-linkedin"></i>
                              </div>
                              <div class="social_cont">
                                 <ul>
                                    <li>
                                       <span><strong>758+</strong></span>
                                       <span>Contacts</span>
                                    </li>
                                    <li>
                                       <span><strong>365</strong></span>
                                       <span>Feeds</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full socile_icons google_p margin_bottom_30">
                              <div class="social_icon">
                                 <i class="fa fa-google-plus"></i>
                              </div>
                              <div class="social_cont">
                                 <ul>
                                    <li>
                                       <span><strong>450</strong></span>
                                       <span>Followers</span>
                                    </li>
                                    <li>
                                       <span><strong>57</strong></span>
                                       <span>Circles</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- package Ending -->
                     <!-- chart start -->
                     <div class="row column2 graph margin_bottom_30">
                        <div class="col-md-l2 col-lg-12">
                           <div class="white_shd full">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Extra Area Chart</h2>
                                 </div>
                              </div>
                              <div class="full graph_revenue">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="content">
                                          <div class="area_chart">
                                             <canvas height="120" id="canvas"></canvas>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- chart ending -->
                    
                     <!-- row -->
                     <div class="row">
                        
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                             
                              <div class="table_section padding_infor_info">
                                
                              </div>
                           </div>
                        </div>
                         <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div >
                     <div class="center">
                        <img width="210" src="../assets/images/logo/pexels-cottonbro-studio-4489718.jpg" alt="" style="width:690px;" height="200px" />
                     </div>
                  </div>
                  <div class="login_form">
                     <form method="post" action="/service/store" enctype="multipart/form-data">
                        <fieldset>
                           <div class="field">
                              <label class="label_field">Service Name</label>
                              <input type="text" name="service" placeholder="Enter your Service"  />
                           </div>
                           <div class="field">
                              <label class="label_field">Description</label>
                              <input type="text" name="description" placeholder="Description"  />
                           </div>
                           <div class="field">
                              <label class="label_field" >Sevice Price</label>
                              <input type ="number" name="price" placeholder="Enter your Service Price" />
                           </div>
                           <div class="field">
                              <label class="label_field"> Post Date</label>
                              <input type="date" name="date" placeholder=" Service Post date" />
                           </div>
                           <div class="field">
                              <label class="label_field">UPLOAD IMAGE</label>
                              <input type="file" name="img" placeholder="UPLOAD IMAGE" />
                           </div>
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button class="btn btn-success w-100" type="submit">SUBMIT</button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
                        
                       
                        <!-- table section -->
                        
                     </div>
                  </div>
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2018 Designed by html.design. All rights reserved.</p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
         <!-- model popup -->
         <!-- The Modal -->
        
         <!-- end model popup -->
      </div>
      <!-- jQuery -->
      <script src="<?php echo site_url('assets/js/jquery.min.js') ?>"></script>
      <script src="<?php echo site_url('assets/js/popper.min.js') ?>"></script>
      <script src="<?php echo site_url('assets/js/bootstrap.min.js') ?>"></script>
      <!-- wow animation -->
      <script src="<?php echo site_url('assets/js/animate.js') ?>"></script>
      <!-- select country -->
      <script src="<?php echo site_url('assets/js/bootstrap-select.js') ?>"></script>
      <!-- owl carousel -->
      <script src="<?php echo site_url('assets/js/owl.carouselassets/.js') ?>"></script> 
      <!-- chart js -->
      <script src="<?php echo site_url('assets/js/Chart.min.js') ?>"></script>
      <script src="<?php echo site_url('assets/js/Chart.bundle.min.js') ?>"></script>
      <script src="<?php echo site_url('assets/js/utils.js') ?>"></script>
      <script src="<?php echo site_url('assets/js/analyser.js') ?>"></script>
      <!-- nice scrollbar -->
      <script src="<?php echo site_url('assets/js/perfect-scrollbar.min.js') ?>"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="<?php echo site_url('assets/js/custom.js') ?>"></script>
      <script src="<?php echo site_url('assets/js/chart_custom_style1.js') ?>"></script>
   </body>
</html>