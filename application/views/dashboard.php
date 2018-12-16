<!DOCTYPE html>
 
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <!-- Icons-->
    <link href="<?php echo base_url('assets');?>/vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets');?>/vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets');?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets');?>/vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="<?php echo base_url('assets');?>/css/style.css" rel="stylesheet">
    
    <link href="<?php echo base_url('assets');?>/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
  
    <link href="<?php echo base_url('assets');?>/style_more.css" rel="stylesheet">

  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
       
        <?php  $this->load->view('widget/navbar');?>
    </header>
    <div class="app-body">
      <div class="sidebar">
        <?php $this->load->view('widget/menu');?>
      </div>
      <!------------MAIN----------------------->
      <main class="main">
        <div class="container-fluid">
            <?php if ($this->router->fetch_method() == 'index'): ?>
                <?php $this->load->view('home/index');?>
            <?php endif; ?> 
            <?php if ($this->router->fetch_method() == 'demension'): ?>
                <?php $this->load->view('demension/index');?>
            <?php endif; ?> 
            <?php if ($this->router->fetch_method() == 'demensionreview'): ?>
                <?php $this->load->view('demension/review');?>
            <?php endif; ?> 
            
        </div>
      </main>

       <!------------END MAIN----------------------->
       
    </div>
    <footer class="app-footer">
      <div>
        <a href="#">Sonpx</a>
        <span>&copy; 2018 Sonpx.</span>
      </div>
      <div class="ml-auto">
        <span>Powered by</span>
        <a href="#">Sonpx</a>
      </div>
    </footer>
    <!-- CoreUI and necessary plugins-->
    <script src="<?php echo base_url('assets');?>/vendors/jquery/js/jquery.min.js"></script>
    <script src="<?php echo base_url('assets');?>/vendors/popper.js/js/popper.min.js"></script>
    <script src="<?php echo base_url('assets');?>/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets');?>/vendors/pace-progress/js/pace.min.js"></script>
    <script src="<?php echo base_url('assets');?>/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url('assets');?>/vendors/@coreui/coreui/js/coreui.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="<?php echo base_url('assets');?>/vendors/chart.js/js/Chart.min.js"></script>
    <script src="<?php echo base_url('assets');?>/vendors/@coreui/coreui-plugin-chartjs-custom-tooltips/js/custom-tooltips.min.js"></script>
    <script src="<?php echo base_url('assets');?>/js/main.js"></script>
  </body>
</html>
