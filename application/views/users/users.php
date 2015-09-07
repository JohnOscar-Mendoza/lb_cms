<?php
include APPPATH.'libraries/header.php';

?>


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Users</h1>
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
                                            <th>Username</th>
                                            <th>Last Name</th>
                                            <th>First Name</th>
                                            <th>Email</td>
                                            <th>Address</th>
                                            <th>Contact Number</th>
                                            <th>View Cars</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach($users as $row)
                                        {
                                            foreach($row as $val)
                                            {   
                                                echo '<tr><td>'.$val->username.'</td>
                                                <td>'.$val->lastName.'</td>
                                                <td>'.$val->firstName.'</td><td>'.$val->email.'</td>
                                                <td>'.$val->homeAddress.'</td><td>'.$val->phoneNumber.'</td>
                                                <td class="center"><a href="'.base_url().'index.php/users/'.$val->objectId.'/cars"><i class="fa fa-car fa-fw"></i></a></td>
                                                <td class="center">
                                                <a href="'.base_url().'index.php/users/edit/'.$val->objectId.'"><i class="glyphicon glyphicon-edit"></i></a>
                                                <a href="'.base_url().'index.php/users/delete/'.$val->objectId.'"><i class="glyphicon glyphicon-remove-circle"></i></a>
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
