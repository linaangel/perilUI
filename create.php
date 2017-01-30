<?php include 'header.php';
    ?>
    <div class="container">
        <h1>Create a Report</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" align="center"> Incident Information</h3>
                    </div>
                    <div class="panel-body ">
                        <form>
                            <p class="align-right">* Required Fields</p>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Incident Number: *</label>
                                <input type="number" class="form-control" id="incidentnumber" placeholder="#">
                            </div>
                            <div align="center">
                                <button type="submit" class="btn btn-primary btn-lg btn-rsvp">
                                    <i class="glyphicon glyphicon-pencil"></i> Save and continue</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php';
    ?>