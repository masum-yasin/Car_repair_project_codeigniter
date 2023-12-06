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
      <link rel="icon" href="<?php echo site_url('assets/images/fevicon.png') ?>" type="image/png" />
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
                  <div class="container-fluid">
                    
                     <!-- row -->
                     <div class="row">
                        
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                             
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table table-hover">
                                       <thead>
                                          <tr>
                                             <th>Firstname</th>
                                             <th>Lastname</th>
                                             <th>Email</th>
                                             <th>Phone Number</th>
                                             <th>Stage_Position</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>John</td>
                                             <td>Doe</td>
                                             <td>john@example.com</td>
                                             <td>lkjhgi</td>
                                             <td>jgjhg</td>
                                          </tr>
                                          <tr>
                                             <td>Mary</td>
                                             <td>Moe</td>
                                             <td>mary@example.com</td>
                                             <td>lkjhgi</td>
                                             <td>jgjhg</td>
                                          </tr>
                                          <tr>
                                             <td>July</td>
                                             <td>Dooley</td>
                                             <td>july@example.com</td>
                                             <td>lkjhgi</td>
                                             <td>jgjhg</td>
                                          </tr>
                                          <tr>
                                             <td>July</td>
                                             <td>Dooley</td>
                                             <td>july@example.com</td>
                                             <td>lkjhgi</td>
                                             <td>jgjhg</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                       
                        <!-- table section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Responsive Tables</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th>#</th>
                                             <th>Firstname</th>
                                             <th>Lastname</th>
                                             <th>Age</th>
                                             <th>City</th>
                                             <th>Country</th>
                                             <th>Sex</th>
                                             <th>Example</th>
                                             <th>Example</th>
                                             <th>Example</th>
                                             <th>Example</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>1</td>
                                             <td>Anna</td>
                                             <td>Pitt</td>
                                             <td>35</td>
                                             <td>New York</td>
                                             <td>USA</td>
                                             <td>Female</td>
                                             <td>Yes</td>
                                             <td>Yes</td>
                                             <td>Yes</td>
                                             <td>Yes</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
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