<?php include 'header.php';
    ?>
    <div class="container">
        <h1>Create a Report</h1>
        <div class="row">
            <div class="wizard">
                <div class="wizard-inner">
                    <div class="connecting-line"></div>
                    <ul class="nav nav-tabs" role="tablist">

                        <li role="presentation" class="active">
                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                <span class="round-tab">
                                <i class="glyphicon glyphicon-fire"></i>
                            </span>
                            </a>
                        </li>

                        <li role="presentation" class="disabled">
                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                            </a>
                        </li>
                        <li id="step3li" role="presentation" class="disabled">
                            <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                <span class="round-tab">
                                <img src="img/helmet.png" class="helmet">
                            </span>
                            </a>
                        </li>

                        <li role="presentation" class="disabled">
                            <a href="#step4" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                <span class="round-tab">
                                <i class="glyphicon glyphicon-tint"></i>
                            </span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a href="#step5" data-toggle="tab" aria-controls="complete" role="tab" title="Step5">
                                <span class="round-tab">
                                <i class="glyphicon glyphicon-heart"></i>
                            </span>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-tabs steps" role="tablist">
                        <li><strong>Step 1:</strong> Incident Information</li>
                        <li><strong>Step 2:</strong> Incident Detail</li>
                        <li><strong>Step 3:</strong> PPE</li>
                        <li><strong>Step 4:</strong> Decontamination</li>
                        <li><strong>Step 5:</strong> Medical Symptoms</li>
                    </ul>
                </div>

                <div class="tab-content">
                    <!--                                                Incident Info-->
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">PER #XXXXXX, Type: Fire - Incident Information</h3>
                                    </div>
                                    <div class="panel-body">
                                        <!--                           Buttons-->
                                        <div>
                                            <ul class="list-inline pull-right">
                                                <li>
                                                    <button type="button" class="btn btn-primary next-step btn-lg btn-rsvp"><i class="glyphicon glyphicon-log-in"></i> Save and continue</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <br>
                                        <br>
                                        <!--                                        <br> * Required Fields-->

                                        <form role="form" autocomplete="off" class="container-fluid" method="POST" action="http://104.236.101.192/report/create/step/1">
                                            <input type="hidden" name="_token" value="AP885XyucEEd9uR94Mu4y32KYyxf123eZtNgQ6Rm">
                                            <div class="row">
                                                <div class="col-md-12 form-group ">
                                                    <label for="incident_number">Incident Number:</label>#XXXXXXXX
                                                    <div class="form-inline">
                                                        <label for="">Incident Type: *</label>
                                                        <br>
                                                        <label class="btn btn-fire">
                                                            <input type="radio" name="options" id="option2" autocomplete="off" chacked>
                                                            <span class="glyphicon glyphicon-fire">Fire</span>
                                                        </label>

                                                        <label class="btn btn-danger">
                                                            <input type="radio" name="options" id="option1" autocomplete="off">
                                                            <span class="glyphicon glyphicon-warning-sign">Hazardous</span>
                                                        </label>

                                                        <label class="btn btn-dive">
                                                            <input type="radio" name="options" id="option2" autocomplete="off">
                                                            <span><img src="img/scuba.png" width="20px" class="scuba">Dive</span>
                                                        </label>

                                                        <label class="btn btn-air">
                                                            <input type="radio" name="options" id="option2" autocomplete="off">
                                                            <span class="glyphicon glyphicon-plane">Aircraft</span>
                                                        </label>
                                                    </div>
                                                    <br>
                                                    <div>
                                                        <p class="bg-warning mtop paddingless">
                                                            <i class="glyphicon glyphicon-warning-sign"></i> Please take care to select the correct incident type as this selection will populate the related report fields. If you do change the incident type, you will lose all information previously entered for this PER.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- incident_date
          ================================== -->
                                                <div class="col-md-6 form-group ">
                                                    <label for="incident_date">Incident Date:</label>
                                                    <input class="form-control input-rsvp us-date" id="date" placeholder="MM/DD/YYYY">
                                                </div>
                                                <!-- incident_zip_code
          ================================== -->
                                                <div class="col-md-6 form-group ">
                                                    <label for="incident_zip_code">Incident Zip Code:</label>
                                                    <input type="number" class="form-control" name="incident_zip_code" value="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- alarm_time
          ================================== -->
                                                <!-- <fieldset> -->
                                                <div class="col-md-6 form-group ">
                                                    <label>Alarm Time:</label>
                                                    <input type="time" class="form-control col-sm-6" name="alarm_time" placeholder="HH:MM AM/PM" value="">
                                                </div>
                                                <!-- asleep_at_alarm_time
          ================================== -->
                                                <div class="col-md-6 form-group ">
                                                    <label for="asleep_at_alarm_time">Were you asleep at alarm time?</label>
                                                    <br>
                                                    <input type="radio" name="gender" id="no3" value="male">
                                                    <label class="label-inner" for="no3">No</label>
                                                    <input type="radio" name="gender" id="yes3" value="female">
                                                    <label class="label-inner" for="yes3">Yes</label>
                                                    <button class="btn btn-primary next-step btn-lg btn-rsvp" type="button" id="reset" value="Clear" />Clear
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- time_spent_at_incident
          ================================== -->
                                                <div class="col-md-6 form-group ">
                                                    <label>How long were you at the incident (Hours)?</label>
                                                    <div class="row">
                                                        <div class="col-md-6 form-group ">
                                                            <div class="demo-big__example">
                                                                <!--
                                                               <span class="irs js-irs-5 irs-with-grid">
                                                            <span class="irs">
                                                            <span class="irs-line" tabindex="-1">
                                                            <span class="irs-line-left"></span>
<span class="irs-line-mid"></span>
<span class="irs-line-right"></span></span><span class="irs-min" style="visibility: hidden;">0</span><span class="irs-max" style="visibility: visible;">4</span><span class="irs-from" style="visibility: hidden;">0</span><span class="irs-to" style="visibility: hidden;">0</span><span class="irs-single" style="left: 1.08303%;">0</span></span><span class="irs-grid" style="width: 94.7653%; left: 2.51733%;"><span class="irs-grid-pol" style="left: 0%"></span><span class="irs-grid-text js-grid-text-0" style="left: 0%; margin-left: -0.99278%;">0</span><span class="irs-grid-pol small" style="left: 17.55%"></span><span class="irs-grid-pol small" style="left: 11.7%"></span><span class="irs-grid-pol small" style="left: 5.85%"></span><span class="irs-grid-pol" style="left: 23.4%"></span><span class="irs-grid-text js-grid-text-1" style="left: 23.4%; visibility: visible; margin-left: -2.07581%;">1</span><span class="irs-grid-pol small" style="left: 40.95%"></span><span class="irs-grid-pol small" style="left: 35.1%"></span><span class="irs-grid-pol small" style="left: 29.25%"></span><span class="irs-grid-pol" style="left: 46.8%"></span><span class="irs-grid-text js-grid-text-2" style="left: 46.8%; visibility: visible; margin-left: -2.16606%;">2</span><span class="irs-grid-pol small" style="left: 64.35%"></span><span class="irs-grid-pol small" style="left: 58.5%"></span><span class="irs-grid-pol small" style="left: 52.65%"></span><span class="irs-grid-pol" style="left: 70.2%"></span><span class="irs-grid-text js-grid-text-3" style="left: 70.2%; visibility: visible; margin-left: -2.16606%;">3</span><span class="irs-grid-pol small" style="left: 87.75%"></span><span class="irs-grid-pol small" style="left: 81.9%"></span><span class="irs-grid-pol small" style="left: 76.05%"></span><span class="irs-grid-pol" style="left: 93.6%"></span><span class="irs-grid-text js-grid-text-4" style="left: 93.6%; margin-left: -2.07581%;">4</span><span class="irs-grid-pol small" style="left: 96.8%"></span><span class="irs-grid-pol" style="left: 100%"></span><span class="irs-grid-text js-grid-text-5" style="left: 100%; visibility: visible; margin-left: -1.44404%;">+4 hours</span></span><span class="irs-bar" style="left: 2.61733%; width: 0%;"></span><span class="irs-bar-edge"></span><span class="irs-shadow shadow-single" style="display: none;"></span><span class="irs-slider single" style="left: 0%;"></span></span>    
-->
                                                                <input id="range_30" class="irs-hidden-input" readonly=""> Hours
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- unit_number
          ================================== -->
                                                <div class="col-md-6 form-group ">
                                                    <label for="unit_number">Unit Number:</label>
                                                    <input type="number" class="form-control" name="unit_number" value="">
                                                </div>
                                            </div>
                                            <div>
                                                <ul class="list-inline pull-right">
                                                    <li>
                                                        <button type="button" class="btn btn-primary next-step btn-lg btn-rsvp"><i class="glyphicon glyphicon-log-in"></i> Save and continue</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--                                   Incident Detail-->
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Incident Detail</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div>
                                            <ul class="list-inline pull-right">
                                                <li>
                                                    <button type="button" class="btn btn-default prev-step btn-lg btn-rsvp"><i class="glyphicon glyphicon-chevron-left"></i> Previous</button>
                                                </li>
                                                <li>
                                                    <button type="button" class="btn btn-default next-step btn-lg btn-rsvp">Skip</button>
                                                </li>
                                                <li>
                                                    <button type="button" class="btn btn-primary next-step btn-lg btn-rsvp"><i class="glyphicon glyphicon-log-in"></i> Save and continue</button>
                                                </li>
                                            </ul>
                                        </div>

                                        <!--                                        <br> * Required Fields-->
                                        <br>
                                        <br>
                                        <form id="steponeform" autocomplete="off" role="form" class="container-fluid" method="POST" action="http://104.236.101.192/report/create/step/2">
                                            <input type="hidden" name="_token" value="TLDqWrXTBLMEwwdiGzwXpm8mpby5JCmJ39EAXwap">
                                            <div class="row">
                                                <!-- incident_type
    			================================== -->
                                                <div class="col-md-12 form-group ">
                                                    <label for="fire_type">Fire Type:</label>
                                                    <div class="form-inline">
                                                        <input type="radio" name="tabaccotype" id="Residential" value="male">
                                                        <label class="label-inner" for="Residential">Residential Fire</label>
                                                        <input type="radio" name="tabaccotype" id="Vehicle" value="female">
                                                        <label class="label-inner" for="Vehicle">Vehicle Fire</label>
                                                        <input type="radio" name="tabaccotype" id="Commercial" value="other">
                                                        <label class="label-inner" for="Commercial">Commercial Fire</label>
                                                        <input type="radio" name="tabaccotype" id="Trash" value="other">
                                                        <label class="label-inner" for="Trash">Trash/Dumpster Fire</label>
                                                        <input type="radio" name="tabaccotype" id="Brush" value="other">
                                                        <label class="label-inner" for="Brush">Brush/Wildland Fire</label>
                                                        <input type="radio" name="tabaccotype" id="other2" value="other">
                                                        <label class="label-inner" for="other2">Other</label>
                                                        <br>
                                                        <button class="btn btn-primary next-step btn-lg btn-rsvp" type="button" id="reset1" value="Clear" />Clear
                                                    </div>
                                                    <input id="otherFireTypeInput" type="text" class="form-control mtop" name="other_fire_type" placeholder="Enter Other Fire Type Here" style="display: none;">
                                                </div>
                                            </div>
                                            <div id="classificationsDiv" class="row" style="">
                                                <!-- occupancy_classification
    			================================== -->
                                                <div class="col-md-6 form-group">
                                                    <label for="occupancy_classification">Occupancy Classification:</label>
                                                    <br>
                                                    <input class="magicsearch" id="basic" placeholder="Race">
                                                    <!--
                                                    <select name="occupancy_classification" id="classSelect" class="form-control">
                                                        <option value=""></option>
                                                        <option value="Single story">Single story</option>
                                                        <option value="Multistory">Multistory</option>
                                                        <option value="High-rise">High-rise</option>
                                                        <option value="Residential Board and Care">Residential Board and Care</option>
                                                        <option value="Mixed use">Mixed use</option>
                                                        <option value="Other">Other</option>
                                                    </select>
-->
                                                    <input id="otherClassInput" type="text" class="form-control mtop" name="occupancy_classification_other" placeholder="Other Occupancy Classification" style="display: none;">
                                                </div>
                                                <!-- Structure Classification
    			================================== -->
                                                <div class="col-md-6 form-group">
                                                    <label for="structure_classification">Structure Classification:</label>
                                                    <br>
                                                    <input class="magicsearch" id="basic" placeholder="Race">
                                                    <!--
                                                    <select id="structSelect" name="structure_classification" class="form-control">
    <option value=""></option>
    <option value="Type I (Fire-resistive Construction)">
        Type I (Fire-resistive Construction)
    </option>
    <option value="Type II (Non-combustible Construction)">
        Type II (Non-combustible Construction)
    </option>
    <option value="Type III (Ordinary Construction)">
        Type III (Ordinary Construction)
    </option>
    <option value="Type IV (Heavy-timber Construction)">
        Type IV (Heavy-timber Construction)
    </option>
    <option value="Type V (Wood-frame Construction)">
        Type V (Wood-frame Construction)
    </option>
</select>
-->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- fire_stage_at_arrival
    			================================== -->
                                                <div class="col-md-6 form-group ">
                                                    <label>Fire Stage at Arrival:</label>
                                                    <div class="form-inline">
                                                        <input type="radio" name="stage" id="Incipient" value="male">
                                                        <label class="label-inner" for="Incipient">Incipient</label>
                                                        <input type="radio" name="stage" id="Growth" value="female">
                                                        <label class="label-inner" for="Growth">Growth</label>
                                                        <input type="radio" name="stage" id="Fully" value="other">
                                                        <label class="label-inner" for="Fully">Fully Involved</label>
                                                        <input type="radio" name="stage" id="Smoldering" value="other">
                                                        <label class="label-inner" for="Smoldering">Smoldering</label>
                                                        <input type="radio" name="stage" id="other2" value="other">
                                                        <label class="label-inner" for="other2">Other</label>
                                                        <br>
                                                        <button class="btn btn-primary next-step btn-lg btn-rsvp" type="button" id="reset2" value="Clear" />Clear
                                                    </div>
                                                    <input id="otherStageInput" type="text" class="form-control mtop" name="other_stage" placeholder="Other Stage" style="display: none;">
                                                </div>
                                                <!-- fire_scale
    			================================== -->
                                                <div id="fireScaleDiv" class="col-md-6 form-group" style="">
                                                    <label for="fire_scale">Fire Scale:</label>
                                                    <div class="form-inline">
                                                        <input type="radio" name="scale" id="single" value="male">
                                                        <label class="label-inner" for="single">Single Item</label>
                                                        <input type="radio" name="scale" id="multiple" value="female">
                                                        <label class="label-inner" for="multiple">Multiple Items</label>
                                                        <input type="radio" name="scale" id="room" value="other">
                                                        <label class="label-inner" for="room">Room of Origin</label>
                                                        <input type="radio" name="scale" id="building" value="other">
                                                        <label class="label-inner" for="building">Building of Origin</label>
                                                        <input type="radio" name="scale" id="beyond" value="other">
                                                        <label class="label-inner" for="beyond">Beyond Building</label>
                                                        <input type="radio" name="scale" id="other4" value="other">
                                                        <label class="label-inner" for="other4">Other</label>
                                                        <br>
                                                        <button class="btn btn-primary next-step btn-lg btn-rsvp" type="button" id="reset4" value="Clear" />Clear
                                                    </div>
                                                    <input id="otherScaleInput" type="text" class="form-control mtop" name="other_scale" placeholder="Other Scale" style="display: none;">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- smoke_color_at_arrival
    			================================== -->
                                                <div class="col-md-6 form-group ">
                                                    <label>Smoke Color at Arrival:</label>
                                                    <div class="form-inline">
                                                        <input type="radio" name="color" id="White" value="male">
                                                        <label class="label-inner" for="White">White</label>
                                                        <input type="radio" name="color" id="Gray" value="female">
                                                        <label class="label-inner" for="Gray">Gray</label>
                                                        <input type="radio" name="color" id="Yellow" value="other">
                                                        <label class="label-inner" for="Yellow">Yellow/Brown</label>
                                                        <input type="radio" name="color" id="Black" value="other">
                                                        <label class="label-inner" for="Black">Black</label>
                                                        <input type="radio" name="color" id="Green" value="other">
                                                        <label class="label-inner" for="Green">Green/Blue</label>
                                                        <input type="radio" name="color" id="other3" value="other">
                                                        <label class="label-inner" for="other3">Other</label>
                                                        <br>
                                                        <button class="btn btn-primary next-step btn-lg btn-rsvp" type="button" id="reset5" value="Clear" />Clear
                                                    </div>
                                                    <input id="otherColorInput" type="text" class="form-control mtop" name="other_color" placeholder="Other Smoke Color" style="display: none;">
                                                </div>

                                                <!-- smoke_density_at_arrival
    			================================== -->
                                                <div class="col-md-6 form-group ">
                                                    <label>Smoke Density at Arrival:</label>
                                                    <div class="form-inline">
                                                        <input type="radio" name="density" id="none" value="male">
                                                        <label class="label-inner" for="none">None</label>
                                                        <input type="radio" name="density" id="Light" value="female">
                                                        <label class="label-inner" for="Light">Light</label>
                                                        <input type="radio" name="density" id="Moderate" value="other">
                                                        <label class="label-inner" for="Moderate">Moderate</label>
                                                        <input type="radio" name="density" id="Heavy" value="other">
                                                        <label class="label-inner" for="Heavy">Heavy</label>
                                                        <input type="radio" name="density" id="other4" value="other">
                                                        <label class="label-inner" for="other4">Other</label>
                                                        <br>
                                                        <button class="btn btn-primary next-step btn-lg btn-rsvp" type="button" id="reset6" value="Clear" />Clear
                                                    </div>
                                                    <input id="otherDensityInput" type="text" class="form-control mtop" name="other_density" placeholder="Other Density" style="display: none;">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <hr>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Activities performed</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- <div class="col-md-12"> -->
                                                <div class="container-fluid" style="padding-left: 0px; padding-right: 0px;">
                                                    <!-- ACTIVITIES PERFORMED
    				================================== -->
                                                    <div class="well " style="margin-bottom: 10px;">
                                                        <div id="activitiesWrapper">
                                                            <div class="activity row mtops">
                                                                <div class="col-md-6 form-group">
                                                                    <label>Activity Type:</label>
                                                                    <br>
                                                                    <input class="magicsearch" id="basic" placeholder="Race">
                                                                    <input type="text" class="otherActivityTypeInput form-control mtops" name="other_activity_types[]" placeholder="Other Activity Type" style="display: none;">
                                                                </div>
                                                                <div class="col-md-6 form-group">
                                                                    <label>Activity Exertion:</label>
                                                                    <br>
                                                                    <div class="form-inline">
                                                                        <input type="radio" name="extertion" id="Low2" value="male">
                                                                        <label class="label-inner" for="Low2">Low</label>
                                                                        <input type="radio" name="extertion" id="Moderate2" value="other">
                                                                        <label class="label-inner" for="Moderate2">Moderate</label>
                                                                        <input type="radio" name="extertion" id="High" value="other">
                                                                        <label class="label-inner" for="High">High</label>
                                                                        <button class="btn btn-primary next-step btn-lg btn-rsvp" type="button" id="reset2" value="Clear" />Clear
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 form-group ">
                                                                    <div class="demo-big__example">
                                                                        <label>Activity Duration:</label>
                                                                        <br>
                                                                        <span class="irs js-irs-5 irs-with-grid">
                                                            <span class="irs">
                                                            <span class="irs-line" tabindex="-1">
                                                            <span class="irs-line-left"></span>
                                                                        <span class="irs-line-mid"></span>
                                                                        <span class="irs-line-right"></span></span><span class="irs-min" style="visibility: hidden;">0</span><span class="irs-max" style="visibility: visible;">4</span><span class="irs-from" style="visibility: hidden;">0</span><span class="irs-to" style="visibility: hidden;">0</span><span class="irs-single" style="left: 1.08303%;">0</span></span><span class="irs-grid" style="width: 94.7653%; left: 2.51733%;"><span class="irs-grid-pol" style="left: 0%"></span><span class="irs-grid-text js-grid-text-0" style="left: 0%; margin-left: -0.99278%;">0</span><span class="irs-grid-pol small" style="left: 17.55%"></span><span class="irs-grid-pol small" style="left: 11.7%"></span><span class="irs-grid-pol small" style="left: 5.85%"></span><span class="irs-grid-pol" style="left: 23.4%"></span><span class="irs-grid-text js-grid-text-1" style="left: 23.4%; visibility: visible; margin-left: -2.07581%;">1</span><span class="irs-grid-pol small" style="left: 40.95%"></span><span class="irs-grid-pol small" style="left: 35.1%"></span><span class="irs-grid-pol small" style="left: 29.25%"></span><span class="irs-grid-pol" style="left: 46.8%"></span><span class="irs-grid-text js-grid-text-2" style="left: 46.8%; visibility: visible; margin-left: -2.16606%;">2</span><span class="irs-grid-pol small" style="left: 64.35%"></span><span class="irs-grid-pol small" style="left: 58.5%"></span><span class="irs-grid-pol small" style="left: 52.65%"></span><span class="irs-grid-pol" style="left: 70.2%"></span><span class="irs-grid-text js-grid-text-3" style="left: 70.2%; visibility: visible; margin-left: -2.16606%;">3</span><span class="irs-grid-pol small" style="left: 87.75%"></span><span class="irs-grid-pol small" style="left: 81.9%"></span><span class="irs-grid-pol small" style="left: 76.05%"></span><span class="irs-grid-pol" style="left: 93.6%"></span><span class="irs-grid-text js-grid-text-4" style="left: 93.6%; margin-left: -2.07581%;">4</span><span class="irs-grid-pol small" style="left: 96.8%"></span><span class="irs-grid-pol" style="left: 100%"></span><span class="irs-grid-text js-grid-text-5" style="left: 100%; visibility: visible; margin-left: -1.44404%;">+4 hours</span></span><span class="irs-bar" style="left: 2.61733%; width: 0%;"></span><span class="irs-bar-edge"></span><span class="irs-shadow shadow-single" style="display: none;"></span><span class="irs-slider single" style="left: 0%;"></span></span>
                                                                        <!--                                                                        <input id="range_30" class="irs-hidden-input" readonly=""> Hours-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mtop">
                                                                <div class="col-md-12">
                                                                    <button id="addActivity" type="button" class="btn btn-default pull-right">
                                                                        + Add Another
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- </div> -->
                                                </div>
                                                <div class="row">
                                                    <hr>
                                                </div>
                                                <div class="row">
                                                    <!-- EXTINGUISHMENT MEANS
    			================================== -->
                                                    <div class="col-md-12 form-group ">
                                                        <label>Extinguishment Means</label>
                                                        <br>
                                                        <div class="form-inline">
                                                            <input type="checkbox" name="extinguish" id="water" value="male">
                                                            <label class="label-inner" for="water">Water with 0.25% Foam (Fireaide 2000, Class A/B)</label>
                                                            <input type="checkbox" name="extinguish" id="foam" value="female">
                                                            <label class="label-inner" for="foam">3-6% Foam (Fireaide 2000, Class A/B)</label>
                                                            <input type="checkbox" name="extinguish" id="foam2" value="other">
                                                            <label class="label-inner" for="foam2">6% Foam (Fireaide 2000, Class A/B)</label>
                                                            <br>
                                                            <input type="checkbox" name="extinguish" id="extinguisher" value="other">
                                                            <label class="label-inner" for="extinguisher">Extinguisher A/B/C (Dry Chem, Amerex)</label>
                                                            <input type="checkbox" name="extinguish" id="co2" value="other">
                                                            <label class="label-inner" for="co2">Extinguisher CO2 (Carbon Dioxide)</label>
                                                            <input type="checkbox" name="extinguish" id="water2" value="other">
                                                            <label class="label-inner" for="water2">Extinguisher Water with 0.25% Foam (Fireaide 2000, Class A/B)</label>
                                                            <br>
                                                            <input type="checkbox" name="extinguish" id="foam3" value="other">
                                                            <label class="label-inner" for="foam3">Foam 68 (AR-AFFF, Fireaide)</label>
                                                            <input type="checkbox" name="extinguish" id="otherext" value="other">
                                                            <label class="label-inner" for="otherext">Other</label>
                                                            <br>
                                                        </div>
                                                        <!--
                                                        <div class="checkboxGroup">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="extinguishmentmeans[]" value="1"> Water with 0.25% Foam (Fireaide 2000, Class A/B)
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="extinguishmentmeans[]" value="2"> 3-6% Foam (Fireaide 2000, Class A/B)
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="extinguishmentmeans[]" value="3"> 6% Foam (Fireaide 2000, Class A/B)
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="extinguishmentmeans[]" value="4"> Extinguisher A/B/C (Dry Chem, Amerex)
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="extinguishmentmeans[]" value="5"> Extinguisher CO2 (Carbon Dioxide)
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="extinguishmentmeans[]" value="6"> Extinguisher Water with 0.25% Foam (Fireaide 2000, Class A/B)
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="extinguishmentmeans[]" value="7"> Foam 68 (AR-AFFF, Fireaide)
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input id="otherCheckbox" type="checkbox" value="other"> Other
                                                                </label>
                                                            </div>
                                                            <button class="btn btn-primary next-step btn-lg btn-rsvp" type="button" id="reset2" value="Clear" />Clear
                                                        </div>
-->
                                                        <input id="otherMeanInput" type="text" class="form-control mtop" name="other_mean" placeholder="Enter Other Extinguishment Mean Here" style="display: none;">
                                                    </div>
                                                </div>
                                                <div>
                                                    <ul class="list-inline pull-right">
                                                        <li>
                                                            <button type="button" class="btn btn-default prev-step btn-lg btn-rsvp"><i class="glyphicon glyphicon-chevron-left"></i> Previous</button>
                                                        </li>
                                                        <li>
                                                            <button type="button" class="btn btn-default next-step btn-lg btn-rsvp">Skip</button>
                                                        </li>
                                                        <li>
                                                            <button type="button" class="btn btn-primary next-step btn-lg btn-rsvp"><i class="glyphicon glyphicon-log-in"></i> Save and continue</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--                      PPE: Personal Protective Equipment-->
                    <div class="tab-pane" role="tabpanel" id="step3">

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">PER #XXXXXX, Type: Fire - Personal Protective Equipment</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div>
                                            <ul class="list-inline pull-right">
                                                <li>
                                                    <button type="button" class="btn btn-default prev-step btn-lg btn-rsvp"><i class="glyphicon glyphicon-chevron-left"></i> Previous</button>
                                                </li>
                                                <li>
                                                    <button type="button" class="btn btn-default next-step btn-lg btn-rsvp">Skip</button>
                                                </li>
                                                <li>
                                                    <button type="button" class="btn btn-primary next-step btn-lg btn-rsvp"><i class="glyphicon glyphicon-log-in"></i> Save and continue</button>
                                                </li>
                                            </ul>
                                        </div>

                                        <!--                                        <br> * Required Fields-->
                                        <br>
                                        <br>
                                        <form role="form" autocomplete="off" class="container-fluid" method="POST" action="http://104.236.101.192/report/create/step/4">
                                            <input type="hidden" name="_token" value="TLDqWrXTBLMEwwdiGzwXpm8mpby5JCmJ39EAXwap">
                                            <div class="row">
                                                <!-- where_was_geared_stored_between_shifts
    			================================== -->
                                                <div class="col-md-12 form-group ">
                                                    <label>Where was your gear stored between shifts?</label>
                                                    <div class="form-inline">
                                                        <input type="radio" name="gear" id="fire" value="male">
                                                        <label class="label-inner" for="fire">Fire Station</label>
                                                        <input type="radio" name="gear" id="trunk" value="female">
                                                        <label class="label-inner" for="trunk">Personal Vehicle Trunk</label>
                                                        <input type="radio" name="gear" id="bed" value="other">
                                                        <label class="label-inner" for="bed">Personal Truck Bed</label>
                                                        <input type="radio" name="gear" id="backseat" value="other">
                                                        <label class="label-inner" for="backseat">Back seat of car</label>
                                                        <input type="radio" name="gear" id="home" value="other">
                                                        <label class="label-inner" for="home">Home Garage</label>
                                                        <input type="radio" name="gear" id="other5" value="other">
                                                        <label class="label-inner" for="other5">Other</label>
                                                        <br>
                                                        <button class="btn btn-primary next-step btn-lg btn-rsvp" type="button" id="reset" value="Clear" />Clear
                                                    </div>
                                                    <input id="otherGearInput" type="text" class="form-control mtop" name="other_gear" placeholder="Enter Other Storage Place" style="display: none;">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- PPE TYPE
    			================================== -->
                                                <div class="col-md-6 col-sm-12 form-group ">
                                                    <label>What type of personal protective equipment did you wear at this incident?</label>
                                                    <br>
                                                    <div class="form-inline">
                                                        <input type="checkbox" name="ppe" id="Bunker" value="male">
                                                        <label class="label-inner" for="Bunker">Bunker pants</label>
                                                        <input type="checkbox" name="ppe" id="Boots" value="female">
                                                        <label class="label-inner" for="Boots">Boots</label>
                                                        <input type="checkbox" name="ppe" id="Gloves" value="other">
                                                        <label class="label-inner" for="Gloves">Gloves</label>
                                                        <input type="checkbox" name="ppe" id="Helmet" value="other">
                                                        <label class="label-inner" for="Helmet">Helmet</label>
                                                        <br>
                                                        <input type="checkbox" name="ppe" id="Hood" value="other">
                                                        <label class="label-inner" for="Hood">Hood</label>
                                                        <input type="checkbox" name="ppe" id="scuba" value="other">
                                                        <label class="label-inner" for="scuba">SCUBA</label>
                                                        <input type="checkbox" name="ppe" id="none" value="other">
                                                        <label class="label-inner" for="none">None</label>
                                                        <input type="checkbox" name="ppe" id="otherppe" value="other">
                                                        <label class="label-inner" for="otherppe">Other</label>
                                                        <br>
                                                    </div>
                                                    <!--
                                                    <div class="checkboxGroup">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="fire_ppe_types[]" value="1"> 
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="fire_ppe_types[]" value="2"> Bunker jacket
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="fire_ppe_types[]" value="3"> Boots
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="fire_ppe_types[]" value="4"> Gloves
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="fire_ppe_types[]" value="5"> Helmet
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="fire_ppe_types[]" value="6"> Hood
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="fire_ppe_types[]" value="7"> SCUBA
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input id="noneCheckbox" type="checkbox" name="fire_ppe_types[]" value="8"> None
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input id="otherCheckbox" type="checkbox" value="Other"> Other
                                                            </label>
                                                        </div>
                                                    </div>
-->
                                                    <input id="otherTypeInput" type="text" class="form-control mtop" name="other_fire_type" placeholder="Enter Other Type Here" style="display: none;">
                                                </div>
                                                <!-- wore_full_ppe
    			================================== -->
                                                <div class="col-md-6 form-group ">
                                                    <label>Did you wear full personal protective equipment (skin and respiratory protection) for all overhaul activities?</label>
                                                    <div class="form-inline">
                                                        <input type="radio" name="tabaccotype" id="no2" value="male">
                                                        <label class="label-inner" for="no2">No</label>
                                                        <input type="radio" name="tabaccotype" id="yes2" value="female">
                                                        <label class="label-inner" for="yes2">Yes</label>
                                                        <br>
                                                        <button class="btn btn-primary next-step btn-lg btn-rsvp" type="button" id="reset" value="Clear" />Clear

                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <ul class="list-inline pull-right">
                                                    <li>
                                                        <button type="button" class="btn btn-default prev-step btn-lg btn-rsvp"><i class="glyphicon glyphicon-chevron-left"></i> Previous</button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="btn btn-default next-step btn-lg btn-rsvp">Skip</button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="btn btn-primary next-step btn-lg btn-rsvp"><i class="glyphicon glyphicon-log-in"></i> Save and continue</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--                                Decontamination-->
                    <div class="tab-pane" role="tabpanel" id="step4">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">PER #XXXXXX, Type: Fire - Decontamination</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div>
                                            <ul class="list-inline pull-right">
                                                <li>
                                                    <button type="button" class="btn btn-default prev-step btn-lg btn-rsvp"><i class="glyphicon glyphicon-chevron-left"></i> Previous</button>
                                                </li>
                                                <li>
                                                    <button type="button" class="btn btn-default next-step btn-lg btn-rsvp">Skip</button>
                                                </li>
                                                <li>
                                                    <button type="button" class="btn btn-primary next-step btn-lg btn-rsvp"><i class="glyphicon glyphicon-log-in"></i> Save and continue</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--                                        <br> * Required Fields-->
                                        <br>
                                        <br>
                                        <form role="form" autocomplete="off" class="container-fluid" method="POST" action="http://104.236.101.192/report/create/step/5">
                                            <input type="hidden" name="_token" value="TLDqWrXTBLMEwwdiGzwXpm8mpby5JCmJ39EAXwap">
                                            <div class="row">
                                                <!-- gear_decontaminated_prior_incident
    			================================== -->
                                                <div class="col-md-6 form-group ">
                                                    <label>Was your gear decontaminated prior to incident response?</label>
                                                    <br>
                                                    <input type="radio" name="tabacco" id="nosure" value="male">
                                                    <label class="label-inner" for="nosure">Not Sure / Don't Know</label>
                                                    <input type="radio" name="tabacco" id="no" value="female">
                                                    <label class="label-inner" for="no">No</label>
                                                    <input type="radio" name="tabacco" id="yes" value="other">
                                                    <label class="label-inner" for="yes">Yes</label>
                                                    <button class="btn btn-primary next-step btn-lg btn-rsvp" type="button" id="reset3" value="Clear" />Clear
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- was_contaminated_gear_separated_during_pia
    			================================================ -->
                                                <div class="col-md-6 form-group ">
                                                    <label>Was your contaminated gear separated from you during Post Incident Analysis?</label>
                                                    <br>
                                                    <input type="radio" name="contgear" id="nogear" value="female">
                                                    <label class="label-inner" for="nogear">No</label>
                                                    <input type="radio" name="contgear" id="yesgear" value="other">
                                                    <label class="label-inner" for="yesgear">Yes</label>
                                                    <button class="btn btn-primary next-step btn-lg btn-rsvp" type="button" id="reset" value="Clear" />Clear
                                                </div>
                                                <!-- was_contaminated_gear_separated_upon_station_return
    			========================================================= -->
                                                <div class="col-md-6 form-group">
                                                    <label>Was your contaminated gear separated from you on returning to the station (not in the cab)?</label>
                                                    <br>
                                                    <input type="radio" name="contgear" id="nogear" value="female">
                                                    <label class="label-inner" for="nogear">No</label>
                                                    <input type="radio" name="contgear" id="yesgear" value="other">
                                                    <label class="label-inner" for="yesgear">Yes</label>
                                                    <button class="btn btn-primary next-step btn-lg btn-rsvp" type="button" id="reset" value="Clear" />Clear
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <!-- Decontamination_Rinsed
    			================================== -->
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <label>Rinsed Decontamination</label>
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <label>On Scene:</label>
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <label>At the Station</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <input type="checkbox" name="symp" id="nosym" value="nosym"> None
                                                            <br><img src="img/delete.png" width="15px" class="scuba"> Neck/Head
                                                            <br><img src="img/delete.png" width="15px" class="scuba"> Hands
                                                            <br><img src="img/delete.png" width="15px" class="scuba"> Bunker pants
                                                            <br><img src="img/delete.png" width="15px" class="scuba"> Bunker jacket
                                                            <br><img src="img/delete.png" width="15px" class="scuba"> Boots
                                                            <br><img src="img/delete.png" width="15px" class="scuba"> Gloves
                                                            <br><img src="img/delete.png" width="15px" class="scuba"> Helmet
                                                            <br><img src="img/delete.png" width="15px" class="scuba"> Hood
                                                            <br><img src="img/delete.png" width="15px" class="scuba"> SCUBA
                                                            <br><img src="img/delete.png" width="15px" class="scuba"> Tools
                                                            <br><img src="img/delete.png" width="15px" class="scuba"> Hose
                                                            <br><img src="img/delete.png" width="15px" class="scuba"> Radio Strap
                                                            <br><img src="img/delete.png" width="15px" class="scuba"> Other
                                                            <input type="text" name="othersymp" value="">
                                                        </div>
                                                        <div class="col-xs-2">
                                                            &nbsp;
                                                            <br>
                                                            <input type="checkbox" name="symp" id="eyesburnbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="earsringbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="coughbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="throatbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="headbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="bloodbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="dizzybefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="unconbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="rashbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="skinbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="nauseabefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="smokebefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="sootbefore" value="male">
                                                        </div>
                                                        <div class="col-xs-2">
                                                            &nbsp;
                                                            <br>
                                                            <input type="checkbox" name="symp" id="eyesburnbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="earsringbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="coughbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="throatbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="headbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="bloodbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="dizzybefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="unconbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="rashbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="skinbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="nauseabefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="smokebefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="sootbefore" value="male">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <!-- Decontamination_Replaced
    			================================== -->
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <label>Replaced Decontamination</label>
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <label>On Scene:</label>
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <label>At the Station</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <input type="checkbox" name="symp" id="nosym" value="nosym"> None
                                                            <br><img src="img/delete.png" width="15px" class="scuba"> Bunker pants
                                                            <br><img src="img/delete.png" width="15px" class="scuba"> Bunker jacket
                                                            <br><img src="img/delete.png" width="15px" class="scuba"> Boots
                                                            <br><img src="img/delete.png" width="15px" class="scuba"> Gloves
                                                            <br><img src="img/delete.png" width="15px" class="scuba"> Helmet
                                                            <br><img src="img/delete.png" width="15px" class="scuba"> Hood
                                                            <br><img src="img/delete.png" width="15px" class="scuba"> SCUBA
                                                            <br><img src="img/delete.png" width="15px" class="scuba"> Tools
                                                            <br><img src="img/delete.png" width="15px" class="scuba"> Hose
                                                            <br><img src="img/delete.png" width="15px" class="scuba"> Radio Strap
                                                            <br><img src="img/delete.png" width="15px" class="scuba"> Other
                                                            <input type="text" name="othersymp" value="">
                                                        </div>
                                                        <div class="col-xs-2">
                                                            &nbsp;
                                                            <br>
                                                            <input type="checkbox" name="symp" id="eyesburnbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="earsringbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="coughbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="throatbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="headbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="bloodbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="dizzybefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="unconbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="rashbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="skinbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="nauseabefore" value="male">
                                                        </div>
                                                        <div class="col-xs-2">
                                                            &nbsp;
                                                            <br>
                                                            <input type="checkbox" name="symp" id="eyesburnbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="earsringbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="coughbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="throatbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="headbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="bloodbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="dizzybefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="unconbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="rashbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="skinbefore" value="male">
                                                            <br>
                                                            <input type="checkbox" name="symp" id="nauseabefore" value="male">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <!-- how_long_after_incident_shower
    			================================== -->
                                                <div class="col-md-6 form-group">
                                                    <label>How long after clearing the incident did you shower?</label>
                                                    <br>
                                                    <span class="irs js-irs-5 irs-with-grid">
                                                            <span class="irs">
                                                            <span class="irs-line" tabindex="-1">
                                                            <span class="irs-line-left"></span>
                                                    <span class="irs-line-mid"></span>
                                                    <span class="irs-line-right"></span></span><span class="irs-min" style="visibility: hidden;">0</span><span class="irs-max" style="visibility: visible;">4</span><span class="irs-from" style="visibility: hidden;">0</span><span class="irs-to" style="visibility: hidden;">0</span><span class="irs-single" style="left: 1.08303%;">0</span></span><span class="irs-grid" style="width: 94.7653%; left: 2.51733%;"><span class="irs-grid-pol" style="left: 0%"></span><span class="irs-grid-text js-grid-text-0" style="left: 0%; margin-left: -0.99278%;">0</span><span class="irs-grid-pol small" style="left: 17.55%"></span><span class="irs-grid-pol small" style="left: 11.7%"></span><span class="irs-grid-pol small" style="left: 5.85%"></span><span class="irs-grid-pol" style="left: 23.4%"></span><span class="irs-grid-text js-grid-text-1" style="left: 23.4%; visibility: visible; margin-left: -2.07581%;">1</span><span class="irs-grid-pol small" style="left: 40.95%"></span><span class="irs-grid-pol small" style="left: 35.1%"></span><span class="irs-grid-pol small" style="left: 29.25%"></span><span class="irs-grid-pol" style="left: 46.8%"></span><span class="irs-grid-text js-grid-text-2" style="left: 46.8%; visibility: visible; margin-left: -2.16606%;">2</span><span class="irs-grid-pol small" style="left: 64.35%"></span><span class="irs-grid-pol small" style="left: 58.5%"></span><span class="irs-grid-pol small" style="left: 52.65%"></span><span class="irs-grid-pol" style="left: 70.2%"></span><span class="irs-grid-text js-grid-text-3" style="left: 70.2%; visibility: visible; margin-left: -2.16606%;">3</span><span class="irs-grid-pol small" style="left: 87.75%"></span><span class="irs-grid-pol small" style="left: 81.9%"></span><span class="irs-grid-pol small" style="left: 76.05%"></span><span class="irs-grid-pol" style="left: 93.6%"></span><span class="irs-grid-text js-grid-text-4" style="left: 93.6%; margin-left: -2.07581%;">4</span><span class="irs-grid-pol small" style="left: 96.8%"></span><span class="irs-grid-pol" style="left: 100%"></span><span class="irs-grid-text js-grid-text-5" style="left: 100%; visibility: visible; margin-left: -1.44404%;">+4 hours</span></span><span class="irs-bar" style="left: 2.61733%; width: 0%;"></span><span class="irs-bar-edge"></span><span class="irs-shadow shadow-single" style="display: none;"></span><span class="irs-slider single" style="left: 0%;"></span></span>
                                                    <!--
                                                    <select name="how_long_after_incident_shower" class="form-control">
                                                        <option value=""></option>
                                                        <option value="Less than 30 mins">
                                                            Less than 30 mins
                                                        </option>
                                                        <option value="30-60 mins">
                                                            30-60 mins
                                                        </option>
                                                        <option value="1-1.5 hrs">
                                                            1-1.5 hrs
                                                        </option>
                                                        <option value="1.5-2 hrs">
                                                            1.5-2 hrs
                                                        </option>
                                                        <option value="2-2.5 hrs">
                                                            2-2.5 hrs
                                                        </option>
                                                        <option value="2.5-3 hrs">
                                                            2.5-3 hrs
                                                        </option>
                                                        <option value="3-3.5 hrs">
                                                            3-3.5 hrs
                                                        </option>
                                                        <option value="3.5-4 hrs">
                                                            3.5-4 hrs
                                                        </option>
                                                        <option value="Greater than 4 hours">
                                                            Greater than 4 hours
                                                        </option>
                                                    </select>
-->
                                                </div>
                                            </div>
                                            <div>
                                                <ul class="list-inline pull-right">
                                                    <li>
                                                        <button type="button" class="btn btn-default prev-step btn-lg btn-rsvp"><i class="glyphicon glyphicon-chevron-left"></i> Previous</button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="btn btn-default next-step btn-lg btn-rsvp">Skip</button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="btn btn-primary next-step btn-lg btn-rsvp"><i class="glyphicon glyphicon-log-in"></i> Save and continue</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--                                Medical Symptoms-->
                    <div class="tab-pane" role="tabpanel" id="step5">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">PER #XXXXXX, Type: Fire - Medical Symptoms</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div>
                                            <ul class="list-inline pull-right">
                                                <li>
                                                    <button type="button" class="btn btn-default prev-step btn-lg btn-rsvp"><i class="glyphicon glyphicon-chevron-left"></i> Previous</button>
                                                </li>
                                                <li>
                                                    <button type="button" class="btn btn-default next-step btn-lg btn-rsvp">Skip</button>
                                                </li>
                                                <li>
                                                    <button type="button" class="btn btn-primary next-step btn-lg btn-rsvp"><i class="glyphicon glyphicon-log-in"></i> Save and continue</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--                                        <br> * Required Fields-->
                                        <br>
                                        <br>
                                        <form role="form" autocomplete="off" class="container-fluid" method="POST" action="http://104.236.101.192/report/create/step/6">
                                            <input type="hidden" name="_token" value="TLDqWrXTBLMEwwdiGzwXpm8mpby5JCmJ39EAXwap">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Select any medical symptoms that you experienced before, during, and after the incident.</label>
                                                    <input type="radio" name="nonesymptoms" value="">None
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a href='#' id='select_all'>Select all</a> /
                                                    <a href='#' id='deselect_all'>Deselect all</a>
                                                    <br>
                                                    <select multiple="multiple" id="my-select" name="my-select[]">
                                                        <option value='elem_1'>Eyes Burn</option>
                                                        <option value='elem_2'>Ears Ringing</option>
                                                        <option value='elem_3'>Coughing</option>
                                                        <option value='elem_4'>Throat/Lung Irritation</option>
                                                        <option value='elem_5'>Headache</option>
                                                        <option value='elem_6'>Bloody Cough/Nose</option>
                                                        <option value='elem_7'>Dizzy</option>
                                                        <option value='elem_8'>Unconscious</option>
                                                        <option value='elem_9'>Skin Irritation/Rash</option>
                                                        <option value='elem_10'>Skin Burn</option>
                                                        <option value='elem_11'>Nausea/Queasiness</option>
                                                        <option value='elem_12'>Smoke odor on skin</option>
                                                        <option value='elem_13'>Soot in nostrils</option>
                                                        <option value='elem_14'>Other</option>
                                                    </select>
                                                    <br>
                                                    <button class="btn btn-primary next-step btn-lg btn-rsvp" type="button" id="select" value="Clear" />Select
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="container-fluid" style="padding-left: 0px; padding-right: 0px;">
                                                        <!-- ACTIVITIES PERFORMED
    				================================== -->
                                                        <div class="well mtops">
                                                            <div class="row hidden-xs hidden-sm">
                                                                <div class="col-xs-4">
                                                                    <label></label>
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    <label>When did you experience this symptom? (select all that apply)</label>
                                                                </div>
                                                            </div>
                                                            <div class="row hidden-xs hidden-sm">
                                                                <div class="col-xs-4">
                                                                    <label>Symptom:</label>
                                                                </div>
                                                                <div class="col-xs-2">
                                                                    <label>Before</label>
                                                                </div>
                                                                <div class="col-xs-2">
                                                                    <label>During</label>
                                                                </div>
                                                                <div class="col-xs-2">
                                                                    <label>After</label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-4">
                                                                    <br><img src="img/delete.png" width="15px" class="scuba"> Eyes Burn
                                                                    <br><img src="img/delete.png" width="15px" class="scuba"> Ears Ringing
                                                                    <br><img src="img/delete.png" width="15px" class="scuba"> Coughing
                                                                    <br><img src="img/delete.png" width="15px" class="scuba"> Throat/Lung Irritation
                                                                    <br><img src="img/delete.png" width="15px" class="scuba"> Headache
                                                                    <br><img src="img/delete.png" width="15px" class="scuba"> Bloody Cough/Nose
                                                                    <br><img src="img/delete.png" width="15px" class="scuba"> Dizzy
                                                                    <br><img src="img/delete.png" width="15px" class="scuba"> Unconscious
                                                                    <br><img src="img/delete.png" width="15px" class="scuba"> Skin Irritation/Rash
                                                                    <br><img src="img/delete.png" width="15px" class="scuba"> Skin Burn
                                                                    <br><img src="img/delete.png" width="15px" class="scuba"> Nausea/Queasiness
                                                                    <br><img src="img/delete.png" width="15px" class="scuba"> Smoke odor on skin
                                                                    <br><img src="img/delete.png" width="15px" class="scuba"> Soot in nostrils
                                                                    <br><img src="img/delete.png" width="15px" class="scuba"> Other
                                                                    <input type="text" name="othersymp" value="">
                                                                </div>
                                                                <div class="col-xs-2">
                                                                    <input type="checkbox" name="symp" id="eyesburnbefore" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="earsringbefore" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="coughbefore" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="throatbefore" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="headbefore" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="bloodbefore" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="dizzybefore" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="unconbefore" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="rashbefore" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="skinbefore" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="nauseabefore" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="smokebefore" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="sootbefore" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="otherbefore" value="male">
                                                                    <br>
                                                                </div>
                                                                <div class="col-xs-2">
                                                                    <input type="checkbox" name="symp" id="eyesburnduring" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="earsringduring" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="coughduring" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="throatduring" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="headduring" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="bloodduring" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="dizzyduring" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="unconduring" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="rashduring" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="skinduring" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="nauseaduring" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="smokeduring" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="sootduring" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="otherduring" value="male">
                                                                    <br>
                                                                </div>
                                                                <div class="col-xs-2">
                                                                    <input type="checkbox" name="symp" id="eyesburnafter" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="earsringafter" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="coughafter" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="throatafter" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="headafter" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="bloodafter" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="dizzyafter" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="unconafter" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="rashafter" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="skinafter" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="nauseaafter" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="smokeafter" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="sootafter" value="male">
                                                                    <br>
                                                                    <input type="checkbox" name="symp" id="otherafter" value="male">
                                                                    <br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <ul class="list-inline pull-right">
                                                    <li>
                                                        <button type="button" class="btn btn-default prev-step btn-lg btn-rsvp"><i class="glyphicon glyphicon-chevron-left"></i> Previous</button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="btn btn-default next-step btn-lg btn-rsvp">Skip</button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="btn btn-primary next-step btn-lg btn-rsvp"><i class="glyphicon glyphicon-log-in"></i> Save and continue</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include 'footer.php';
    ?>