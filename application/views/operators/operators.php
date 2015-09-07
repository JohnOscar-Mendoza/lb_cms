<?php
include APPPATH.'libraries/header.php';

?>


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Operators</h1>
                    </div>
                <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <a href="<?php echo base_url(); ?>index.php/operators/add" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Operator</a>
                        <div class="panel-body">

                                <div class="dataTable_wrapper">
                            
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Email</th>
                                                <th>Last Name</th>
                                                <th>First Name</th>
                                                <th>Address</th>
                                                <th>Contact Number</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach($operators as $row)
                                            {
                                                foreach($row as $val)
                                                {   
                                                    echo '<tr><td>'.$val->email.'</td>
                                                    <td>'.$val->lastName.'</td>
                                                    <td>'.$val->firstName.'</td>
                                                    <td>'.$val->homeAddress.'</td><td>'.$val->phoneNumber.'</td>
                                                    <td class="center">
                                                    <a href="'.base_url().'index.php/operators/edit/'.$val->objectId.'"><i class="glyphicon glyphicon-edit"></i></a>
                                                    <a href="'.base_url().'index.php/operators/delete/'.$val->objectId.'"><i class="glyphicon glyphicon-remove-circle"></i></a>
                                                    </td>
                                                    </tr>';
                                                }
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
include APPPATH.'libraries/footer.php';
?>
