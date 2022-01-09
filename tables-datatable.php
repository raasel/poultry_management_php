<?php include 'includes/database.php';
    include 'includes/action.php';
    include 'api/checkauth.php';
    $query = "SELECT * FROM environment ORDER BY id DESC LIMIT 200";
    $result = $databaseObject->connect()->query($query);
                                            ?>
<?php include 'layouts/header.php'; ?>

        <!-- DataTables -->
        <link href="public/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="public/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="public/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<?php include 'layouts/headerStyle.php'; ?>

    <body>

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
                                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                    <li class="breadcrumb-item active">Datatable</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Datatable</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Poultry Environment Data</h4>
                                <p class="text-muted m-b-30 font-14">Show Previous 200 Data
                                </p>

                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Temperature</th>
                                        <th>Humidity</th>
                                        <th>Ammonia</th>
                                        <th>Noise</th>
                                        <th>Light Intensity</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                 
                                            <?php 
                                            while($row = mysqli_fetch_assoc($result)){
                                                echo "<tr>
                                                <td>".$row['temperature']. "</td>
                                                <td>" . $row['humidity']."</td>
                                                <td>" . $row['ammonia']. "</td>
                                                <td>" . $row['noise']. "</td>
                                                <td>" . $row['light_intensity']. "</td>
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

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    </body>
</html>