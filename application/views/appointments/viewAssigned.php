<?php
include APPPATH.'/libraries/header.php';
?>


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Assigned Appointments</h1>
                    </div>
                <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel-body">

                                <div class="dataTable_wrapper">
                            
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Location</th>
                                                <th>Operator</th>
                                                <th>Model</th>
                                                <th>Car</th>
                                                <th>Owner</th>
                                                <th>Appointment Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach($results as $val)
                                            {
                                                $apptDate = $val->apptDate->iso;
                                                $date = strtotime($apptDate);
                                                $date = date('l, F jS Y \a\t g:ia', $date);

                                                    echo '
                                                    <tr>
                                                        <td>'.$val->apptLocation.'</td>
                                                        <td>'.$val->operatorId->username.'</td>
                                                        <td>'.$val->carId->model.'</td>
                                                        <td>'.$val->carId->license.'</td>
                                                        <td>'.$val->carId->ownerId->lastName.', '.$val->carId->ownerId->firstName.'</td>
                                                        <td>'.$date.'</td>
                                                    </tr>';
                                            }

                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                                
                            </div>
                            <!-- /.panel-body -->

                    </div>
                    <!-- /.col-lg-12 -->
                </div>
            <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    
<?php
include APPPATH.'/libraries/footer.php';
?>
