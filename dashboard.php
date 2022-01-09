
<?php include 'layouts/header.php'; ?> 
<?php include 'api/api.php'; ?>

<!-- C3 charts css -->
<link href="public/assets/plugins/c3/c3.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="public/assets/plugins/morris/morris.css">
<!--Chartist Chart CSS -->
<link rel="stylesheet" href="public/assets/plugins/chartist/css/chartist.min.css">
<?php include 'layouts/headerStyle.php'; ?>

    <body>
        <?php include 'input.php'; ?>
        <?php include 'layouts/loader.php'; ?>

        <?php include 'layouts/navbar.php'; ?>

        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Poultry Farm</a></li>
                                    <li class="breadcrumb-item active">Dashboard </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col">
                        <div class="mini-stat clearfix bg-white">
                            <span class="mini-stat-icon bg-purple mr-0 float-right"><i class="fa fa-thermometer-2"></i></span>
                            <div class="mini-stat-info">
                                <span class="counter text-blue"><?php echo $temperature; ?>&deg; C</span>
                               <span style="color:#000099"> Temperature</span>
                            </div>
                            <div class="clearfix"></div>
                            <a href="#" class="btn btn-sm btn-warning m-t-20">View All Data</a>
                            <!-- <p class=" mb-0 m-t-20 text-muted">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p> -->
                        </div>
                    </div>
                    <div class="col">
                        <div class="mini-stat clearfix bg-white">
                            <span class="mini-stat-icon bg-blue-grey mr-0 float-right"><i class="wi wi-humidity"></i></span>
                            <div class="mini-stat-info">
                                <span class="counter text-blue-grey"><?php echo $humidity; ?>&deg; C</span>
                                Humidity
                            </div>
                            <div class="clearfix"></div>
                            <a href="#" class="btn btn-sm btn-warning m-t-20">View All Data</a>
                            <!-- <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p> -->
                        </div>
                    </div>
                    <div class="col">
                        <div class="mini-stat clearfix bg-white">
                            <span class="mini-stat-icon bg-brown mr-0 float-right"><i class="mdi mdi-gas-cylinder"></i></span>
                            <div class="mini-stat-info">
                                <span class="counter text-brown"><?php echo $ammonia; ?></span>
                                Ammonia
                            </div>
                            <div class="clearfix"></div>
                            <a href="#" class="btn btn-sm btn-warning m-t-20">View All Data</a>
                            <!-- <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p> -->
                        </div>
                    </div>
                    <div class="col">
                        <div class="mini-stat clearfix bg-white">
                            <span class="mini-stat-icon bg-teal mr-0 float-right"><i class="mdi mdi-surround-sound"></i></span>
                            <div class="mini-stat-info">
                                <span class="counter text-teal"><?php echo $noise; ?></span>
                                Noise
                            </div>
                            <div class="clearfix"></div>
                            <a href="#" class="btn btn-sm btn-success waves-effect waves-light m-t-20">View All Data</a>
                            <!-- <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p> -->
                        </div>
                    </div>

                    <div class="col">
                        <div class="mini-stat clearfix bg-white">
                            <span class="mini-stat-icon bg-teal mr-0 float-right"><i class="mdi mdi-spotlight-beam"></i></span>
                            <div class="mini-stat-info">
                                <span class="counter text-teal"><?php echo $light_intensity; ?></span>
                                Light Intensity
                            </div>
                            <div class="clearfix"></div>
                            <a href="#" class="btn btn-sm btn-success waves-effect waves-light m-t-20">View All Data</a>
                            <!-- <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p> -->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Temperature & Humidity</h4>

                                <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                  
                                </ul>

                                <div id="smil-animations" class="ct-chart ct-golden-section"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Ammonia</h4>

                                <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                
                                </ul>

                                <div id="simple-line-chart" class="ct-chart ct-golden-section"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Noise</h4>
                               
                                <div id="morris-line-example" style="height: 300px"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Light Intensity</h4>
                                <div id="morris-bar-example" style="height: 300px"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <?php include 'layouts/footer.php'; ?>

<?php include 'layouts/footerScript.php'; ?>


<!-- Page specific js -->
<!-- <script src="public/assets/pages/dashboard.js"></script> -->
<!-- App js -->
<script src="public/assets/js/app.js"></script>
<!--Morris Chart-->
         <script src="public/assets/plugins/morris/morris.min.js"></script>
        <script src="public/assets/plugins/raphael/raphael-min.js"></script>
        <script src="public/assets/pages/morris.init.js"></script>
 <!--Chartist Chart-->
 <script src="public/assets/plugins/chartist/js/chartist.min.js"></script>
        <script src="public/assets/plugins/chartist/js/chartist-plugin-tooltip.min.js"></script>
        <script src="public/assets/pages/chartist.init.js"></script>
    </body>
</html>