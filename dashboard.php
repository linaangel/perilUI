<?php include 'header.php';
    ?>
    <div class="container">
        <div class="content-wrapper">
            <div class="container-fluid main">

                <div class="row">
                    <div class="col-sm-12">
                        <h1>Dashboard</h1>
                        <hr>
                    </div>
                </div>

                <div class="row">

                </div>

                <div class="row">

                    <!-- CURRENT EMPLOYMENT INFO -->
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading container-fluid">
                                <h3 class="panel-title col-xs-8">Current Employment Information</h3>
                                <a href="http://104.236.101.192/profile/step/3" class="updatelink pull-right button-link">Update</a>
                            </div>
                            <div class="panel-body">
                                <p><b>Agency :</b> </p>
                                <p><b>Job Title :</b> </p>
                                <p><b>Shift Cycle :</b> </p>
                                <p><b>Shift :</b> </p>
                            </div>
                        </div>
                    </div>

                    <!-- PER SUMMARY -->
                    <div id="perSummary" class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading container-fluid">
                                <h3 class="panel-title">PER Summary</h3>
                            </div>
                            <div class="panel-body text-center container-fluid">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="well">
                                            <p>Total reports submitted in last 30 days:</p>
                                            <h3>0</h3>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="well">
                                            <p>Total reports submitted:
                                                <br class="hidden-xs">
                                                <br>
                                            </p>
                                            <h3>0</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- RECENT INCIDENTS -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading container-fluid">
                                <h3 class="panel-title col-sm-8">Activity Log: Most Recent PERS</h3>
                            </div>
                            <div class="panel-body container-fluid table-responsive">
                                <div id="modal-delete-173" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-danger">
                                                <h3 class="modal-title">
                                                    <i class="fa fa-warning"></i>   Warning   <i class="fa fa-warning"></i>
                                                </h3>
                                            </div>
                                            <div class="modal-body padding">
                                                <p class="mtop">
                                                    You are about to delete a PER.
                                                    <br> If you delete this PER, the information it contains cannot be recovered.
                                                </p>
                                                <p class="mtop"><strong>Are you sure you wish to proceed?</strong></p>
                                            </div>
                                            <div class="modal-footer">
                                                <a class="btn btn-danger" href="http://104.236.101.192/report/delete/173">Yes, Continue</a>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">No, Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="modal-delete-169" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-danger">
                                                <h3 class="modal-title">
                                                    <i class="fa fa-warning"></i>   Warning   <i class="fa fa-warning"></i>
                                                </h3>
                                            </div>
                                            <div class="modal-body padding">
                                                <p class="mtop">
                                                    You are about to delete a PER.
                                                    <br> If you delete this PER, the information it contains cannot be recovered.
                                                </p>
                                                <p class="mtop"><strong>Are you sure you wish to proceed?</strong></p>
                                            </div>
                                            <div class="modal-footer">
                                                <a class="btn btn-danger" href="http://104.236.101.192/report/delete/169">Yes, Continue</a>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">No, Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-condensed">
                                    <thead>
                                        <tr>
                                            <th class="hidden-xs"></th>
                                            <th>PER #</th>
                                            <th class="hidden-xs">Incident #</th>
                                            <th class="hidden-xs">Date &amp; Time</th>
                                            <th class="hidden-xs">Incident Type</th>
                                            <th class="hidden-xs">Status</th>
                                            <th>Date Last Updated</th>
                                            <th class="visible-xs"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="hidden-xs">
                                                <div class="actiondropdown">
                                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                        Action <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="http://104.236.101.192/report/review/173">View/Update</a></li>
                                                        <li><a class="tbdLink" href="">Print</a></li>
                                                        <li><a class="tbdLink" href="">Share</a></li>
                                                        <li><a class="tbdLink" href="">Export</a></li>
                                                        <li>
                                                            <a class="deleteLink" role="button" data-toggle="modal" data-target="#modal-delete-173">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <p>173</p>
                                            </td>
                                            <td class="hidden-xs">
                                                <p>333333</p>
                                            </td>
                                            <td class="hidden-xs">
                                                <p>


                                                </p>
                                            </td>
                                            <td class="hidden-xs">
                                                <p>Hazardous Material</p>
                                            </td>
                                            <td class="hidden-xs">
                                                <p>
                                                    In Progress
                                                </p>
                                            </td>
                                            <td class="hidden-xs">
                                                <p>October 10, 2016 12:58 PM</p>
                                            </td>
                                            <td class="visible-xs">
                                                <p>10/10/16 12:58 PM</p>
                                            </td>
                                            <td class="visible-xs">
                                                <div class="actiondropdown">
                                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                        Action <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="http://104.236.101.192/report/review/173">View/Update</a></li>
                                                        <li><a class="tbdLink" href="">Print</a></li>
                                                        <li><a class="tbdLink" href="">Share</a></li>
                                                        <li><a class="tbdLink" href="">Export</a></li>
                                                        <li>
                                                            <a class="deleteLink" role="button" data-toggle="modal" data-target="#modal-delete-173">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="hidden-xs">
                                                <div class="actiondropdown">
                                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                        Action <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="http://104.236.101.192/report/review/169">View/Update</a></li>
                                                        <li><a class="tbdLink" href="">Print</a></li>
                                                        <li><a class="tbdLink" href="">Share</a></li>
                                                        <li><a class="tbdLink" href="">Export</a></li>
                                                        <li>
                                                            <a class="deleteLink" role="button" data-toggle="modal" data-target="#modal-delete-169">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <p>169</p>
                                            </td>
                                            <td class="hidden-xs">
                                                <p></p>
                                            </td>
                                            <td class="hidden-xs">
                                                <p>


                                                </p>
                                            </td>
                                            <td class="hidden-xs">
                                                <p>Fire</p>
                                            </td>
                                            <td class="hidden-xs">
                                                <p>
                                                    In Progress
                                                </p>
                                            </td>
                                            <td class="hidden-xs">
                                                <p>September 25, 2016 11:19 PM</p>
                                            </td>
                                            <td class="visible-xs">
                                                <p>09/25/16 11:19 PM</p>
                                            </td>
                                            <td class="visible-xs">
                                                <div class="actiondropdown">
                                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                        Action <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="http://104.236.101.192/report/review/169">View/Update</a></li>
                                                        <li><a class="tbdLink" href="">Print</a></li>
                                                        <li><a class="tbdLink" href="">Share</a></li>
                                                        <li><a class="tbdLink" href="">Export</a></li>
                                                        <li>
                                                            <a class="deleteLink" role="button" data-toggle="modal" data-target="#modal-delete-169">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php';
    ?>