<?php include 'includes/database.php';
    include 'includes/action.php';
    include 'api/checkauth.php';
    $query = "SELECT * FROM production ORDER BY date DESC LIMIT 200";
    $result = $databaseObject->connect()->query($query);
    if( isset( $_SESSION['counter'] ) ) {
        $_SESSION['counter'] += 1;
        if($_SESSION['counter']>2){
            $_SESSION["dfdsfdsfsdfsdf"]="";
        }
     }
                                            ?>
                                            
<?php include 'layouts/header.php'; ?>

        <!-- DataTables -->
        <link href="public/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="public/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="public/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

                     <!-- Plugins css -->
                     <link href="public/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="public/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="public/assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="public/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

<?php include 'layouts/headerStyle.php'; ?>

    <body>

    <?php 
    include 'layouts/loader.php';
     ?>

        <?php include 'layouts/navbar.php'; ?>

        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Data Entry</a></li>
                                    <li class="breadcrumb-item active">Production</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Production</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                <div class="col-lg-12">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Production</h4>
                                <p class="text-muted m-b-30 font-14">Production Per Day</p>
                                <?php if(isset($_SESSION['dfdsfdsfsdfsdf'])){
                                    echo '<b style="color: brown;margin: 10px auto;opacity: .7;text-align: center;">' . $_SESSION["dfdsfdsfsdfsdf"] . '</b>';
                                    }
                                    ?>
                                <form action="api/productionapi.php" method="post">
                                    <div class="form-group">
                                        <label>Amount Of Chicken</label>
                                        <div>
                                            <div class="input-group">
                                                <input type="text" Required class="form-control" name="amount_of_chicken" placeholder="">
                                            </div><!-- input-group -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Amount Of Feeding</label>
                                        <div>
                                            <div class="input-group">
                                                <input type="text" Required class="form-control" name="amount_of_feeding" placeholder="">
                                            </div><!-- input-group -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Egg Production</label>
                                        <div>
                                            <div class="input-group">
                                                <input type="text" Required class="form-control" name="egg" placeholder="">
                                            </div><!-- input-group -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Date</label>
                                        <div>
                                            <div class="input-group">
                                                <input type="date" Required class="form-control" name="date" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                            </div><!-- input-group -->
                                        </div>
                                    </div>
                                    <div class="button-items">
                                    <button type="submit" class="btn btn-purple waves-effect waves-light" name="productiondata">Submit</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- end col -->
                    </div> <!-- row col -->

                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Poultry Production Data</h4>
                                <p class="text-muted m-b-30 font-14">Show Previous 200 Data
                                </p>

                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Amount Of Chicken</th>
                                        <th>Amount Of Feeding</th>
                                        <th>Egg Production</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                 
                                            <?php 
                                            while($row = mysqli_fetch_assoc($result)){
                                                echo "<tr>
                                                <td>".$row['amount_of_chicken']. "</td>
                                                <td>" . $row['amount_of_feeding']."</td>
                                                <td>" . $row['egg']. "</td>
                                                <td>" . $row['date']."</td>
                                                </tr>";
                                            }
                                            ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->


            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <?php include 'layouts/footer.php'; ?>

        <?php include 'layouts/footerScript.php'; ?>

        <!-- Required datatable js -->
        <script src="public/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="public/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="public/assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="public/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="public/assets/plugins/datatables/jszip.min.js"></script>
        <script src="public/assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="public/assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="public/assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="public/assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="public/assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="public/assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="public/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="public/assets/pages/datatables.init.js"></script>

           <!-- input init js -->
        <script src="public/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="public/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="public/assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="public/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.js"></script>
        <script src="public/assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js"></script>
        <script src="public/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

        <!-- Plugins Init js -->
        <script src="public/assets/pages/form-advanced.js"></script>
        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    </body>
</html>