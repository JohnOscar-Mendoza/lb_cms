<?php
include APPPATH.'/libraries/header.php';

?>


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Car Types</h1>
                    </div>
                <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <a href="<?php echo base_url(); ?>index.php/packages/add" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Package</a>
                        <div class="panel-body">

                                <div class="dataTable_wrapper">
                            
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Details</th>
                                                <th>Cost</th>
                                                <th>Est. Wash Time</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach($results as $val)
                                            {
                                                    echo '<tr>
                                                    <td>'.$val->title.'</td>
                                                    <td>'.$val->details.'</td>
                                                    <td>$'.$val->price.'</td>
                                                    <td>'.$val->estTime.'</td>
                                                    <td class="center">
                                                    <a href="'.base_url().'index.php/packages/edit/'.$val->objectId.'"><i class="glyphicon glyphicon-edit"></i></a>
                                                    <a href="'.base_url().'index.php/packages/delete/'.$val->objectId.'"><i class="glyphicon glyphicon-remove-circle"></i></a>
                                                    </td>
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
