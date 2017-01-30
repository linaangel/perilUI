<?php include 'header.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <h1>Welcome to the Firefighters Personal Exposure Reporting System!</h1>
                <p>The University of Miami is collaborating with Miami-Dade Fire Rescue and Palm Beach County Fire Rescue under the Firefighter Cancer Initiative (FCI) to learn more about firefighters’ exposures to toxins and to identify safety measures to reduce any identified risks. Through this collaboration, the Firefighters’ Personal Exposure Reporting System (FPERS) was developed. The FPERS enables firefighters timely access to report on varied exposures to hazardous environments.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" align="center">Reset Password</h3>
                    </div>
                    <div class="panel-body">
                        <p class="align-right">* Required Fields</p>
                        <form>
                            <div class="form-group inner-addon left-addon">
                                <i class="glyphicon glyphicon-envelope"></i>
                                <input type="email" class="form-control input-rsvp" id="emailuser" placeholder="User Email *" required>
                            </div>
                            <div align="center">
                                <button type="submit" class="btn btn-primary btn-lg btn-rsvp">
                                    <i class="glyphicon glyphicon-pencil"></i> Reset Password</button>
                            </div>
                        </form>
                        <div align="center">
                            <hr width="100">
                            <button type="submit" class="btn btn-primary btn-lg btn-rsvp"><i class="glyphicon glyphicon-log-in"></i> <a class="btn-homelink" href="index.php"> Back to Log In</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php';
    ?>