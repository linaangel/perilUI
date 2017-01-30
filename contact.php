<?php include 'header.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Contact</h1>
                <p>For more information, please call 305-243-1120.</p>
                <p>Please fill out the following information and we will contact you as soon as possible:</p>
                <form action="../app/php/contact.php" method="post" id="contact">
                    <div class="form-group inner-addon left-addon">
                        <i class="glyphicon glyphicon-user"></i>
                        <input type="text" class="form-control input-rsvp" name="contactname" id="contactname" placeholder="Name" required>
                    </div>
                    <div class="form-group inner-addon left-addon">
                        <i class="glyphicon glyphicon-envelope"></i>
                        <input type="email" class="form-control input-rsvp" name="contactemail" id="contactemail" placeholder="Preferred Email" required>
                    </div>
                    <div class="form-group inner-addon left-addon">
                        <i class="glyphicon glyphicon-pencil"></i>
                        <textarea class="form-control input-rsvp" name="message" id="message" rows="3" placeholder="Support, Comments, Questions?" required></textarea>
                    </div>
                    <div align="center">
                        <button type="submit" class="btn btn-primary btn-lg btn-rsvp">Send>></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
    <?php include 'footer.php';
    ?>