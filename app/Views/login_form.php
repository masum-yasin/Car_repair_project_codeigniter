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
      <link rel="icon" href="<?php echo site_url('assets/images/fevicon.png')?>" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.min.css')?>" />
      <!-- site css -->
      <link rel="stylesheet" href="<?php echo site_url('assets/style.css')?>" />
      <!-- responsive css -->
      <link rel="stylesheet" href="<?php echo site_url('assets/css/responsive.css')?>" />
      <!-- color css -->
      <link rel="stylesheet" href="<?php echo site_url('assets/css/colors.css')?>" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap-select.css')?>" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="<?php echo site_url('assets/css/perfect-scrollbar.css')?>" />
      <!-- custom css -->
      <link rel="stylesheet" href="<?php echo site_url('assets/css/custom.css')?>" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="<?php echo site_url('assets/js/semantic.min.css')?>" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="inner_page login">
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <img width="210" src="assets/images/logo/logo.png" alt="#" />
                     </div>
                  </div>
                  <?php if (session()->getFlashdata('msg')) : ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?php echo session()->getFlashdata('msg'); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                            <?php endif; ?>
                  <div class="login_form">
                     <form method="post" action="<?php echo site_url('/loginuser') ?>">
                        <fieldset>
                       
                           <div class="field">
                              <label class="label_field">Email </label>
                              <input type="email" name="email" placeholder="E-mail" />
                           </div>
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input type="password" name="password" placeholder="Password" />
                           </div>
                           
                           <div class="field">
                              <label class="label_field hidden">hidden label</label>
                              <label class="form-check-label"><input type="checkbox" class="form-check-input"> Remember Me</label>
                              <a class="forgot" href="">Forgotten Password?</a>
                           </div>
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button class="main_bt">Sing Up</button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="<?php echo site_url('assets/js/jquery.min.js')?>"></script>
      <script src="<?php echo site_url('assets/js/popper.min.js')?>"></script>
      <script src="<?php echo site_url('assets/js/bootstrap.min.js')?>"></script>
      <!-- wow animation -->
      <script src="<?php echo site_url('assets/js/animate.js')?>"></script>
      <!-- select country -->
      <script src="<?php echo site_url('assets/js/bootstrap-select.js')?>"></script>
      <!-- nice scrollbar -->
      <script src="<?php echo site_url('assets/js/perfect-scrollbar.min.js')?>"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="<?php echo site_url('assets/js/custom.js')?>"></script>
   </body>
</html>