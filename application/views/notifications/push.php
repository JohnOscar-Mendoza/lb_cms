<?php
    include APPPATH.'libraries/header.php';
    //die('<pre>'.print_r($appointmentsTimeline, true));
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            Push Notification
                        </div><!-- /.panel-heading -->
                        
                        <div class="panel-body">
                            <div class="col-lg-12">
                                <form role="form">
                                <div class="panel panel-default text-center">
                                    <div class="panel-heading">
                                        Choos your Recepients
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <th>
                                                    </th>
                                                    <th>AUDIENCE
                                                    </th>
                                                    <th>SIZE
                                                    </th>
                                                    <th>CREATED
                                                    </th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td> EVERYONE
                                                        </td>
                                                        <td> (SIZE)
                                                        </td>
                                                        <td> (DATE)
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                                                                </label>
                                                            </div>
                                                        </td >
                                                        <td> CUSTOM
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div><!-- /.table-responsive -->
                                        <div class="row text-center">
                                            <span class="pull-left"> cancel </span>CHOOSE PLATFORMS
                                            <h4>IOS</h4>
                                            INSTALLATION CONDITIONS
                                            <select class="form-control">
                                                <option value="localeIdentifier">localeIdentifier</option>
                                                <option value="GCMSenderId">GCMSenderId</option>
                                                <option value="appIdentifier">appIdentifier</option>
                                                <option value="appName">appName</option>
                                                <option value="appVersion">appVersion</option>
                                                <option value="badge">badge</option>
                                                <option value="channels">channels</option>
                                                <option value="installationUser">installationUser</option>
                                                <option value="parseVersion">parseVersion</option>
                                                <option value="pushType">pushType</option>
                                                <option value="timeZone">timeZone</option>
                                                <option value="user">user</option>
                                                <option value="alert">alert</option>
                                                <option value="createdAt">createdAt</option>
                                                <option value="updatedAt">updatedAt</option>
                                            </select>
                                            <select class="form-control">
                                                <option value="contains any of">contains any of</option>
                                                <option value="does not contain any of">does not contain any of</option>
                                                <option value="contains all of">contains all of</option>
                                                <option value="contains number">contains number</option>
                                                <option value="does not contain number">does not contain number</option>
                                                <option value="exists">exists</option>
                                                <option value="does not exist">does not exist</option>

                                            </select>
                                        </div>
                                        <div class="row">

                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        Will be sent to (count) device/s
                                    </div>
                                </div>
                                <div class="panel panel-default text-center">
                                    <div class="panel-heading">
                                        A/B Testing
                                        <p>
                                        Experiment with different messages or send times todiscover the optimal campaign variables.</p>
                                    </div>
                                    <div class="panel-body">
                                        <span class="pull-left">Use A/B Testing</span> <span class="pull-right"><input type="checkbox" name="enableAb" checked></span>
                                    </div>
                                </div>
                                <div class="panel panel-default text-center">
                                    <div class="panel-heading">
                                        Choose a Delivery time
                                        <p>We can send the campaign immediately, or any time in the next 2 weeks.
                                        </p>
                                    </div>
                                    <div class="panel-body" >
                                        NOW | LATER
                                    </div>
                                    <div class="panel-body">
                                        <span class="pull-left">Expires</span> <span class="pull-right"><input type="checkbox" name="enableExpiry" checked></span>
                                    </div>
                                </div>
                                <div class="panel panel-default text-center">
                                    <div class="panel-heading">
                                        Write Your Message
                                        <p>The best campaigns use short and direct messaging.
                                        </p>
                                    </div>
                                    <div class="panel-body">
                                        <textarea class="form-control">

                                        </textarea>
                                    </div>
                                    <div class="panel-body" >
                                        <span class="pull-left">Message Type</span> <span class="pull-right"><input type="checkbox" name="messageType" checked></span>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-body row-center   " style="height:613px;width:302px; background-image:url('https://www.parse.com/images/push_notifications/ios_device.png?1441926539');">
                                        
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Ready to send your campaign?
                                    </div>
                                    <div class="panel-body">
                                        <div class="alert alert-success">
                                            Campaign Send <a href="#" class="alert-link">Alert Link</a>.
                                        </div>
                                        <div class="alert alert-warning">
                                            Error Message <a href="#" class="alert-link">Alert Link</a>.
                                        </div>
                                        <div class="alert alert-danger">
                                            Sending Failed <a href="#" class="alert-link">Alert Link</a>.
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            <span class="glyphicon glyphicon-send"></span> SEND CAMPAIGN
                                        </button>
                                    </div>
                                </div>
 
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php

    include APPPATH.'libraries/footer.php';

?>
