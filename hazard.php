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
                                <i class="glyphicon glyphicon-warning-sign"></i>
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
                        <li role="presentation" class="disabled">
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
                                        <h3 class="panel-title">PER #XXXXXX, Type: Hazardous Materials - Incident Information</h3>
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
                                        <h3 class="panel-title">PER #XXXXXX, Type: Hazardous Materials - Incident Detail</h3>
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
                                                    <label for="fire_type">What types of hazardous material were found at the scene?</label>
                                                    <div class="form-inline">
                                                        <input type="checkbox" name="tabaccotype" id="Residential" value="male">
                                                        <label class="label-inner" for="Residential">Chemical</label>
                                                        <input type="checkbox" name="tabaccotype" id="Vehicle" value="female">
                                                        <label class="label-inner" for="Vehicle">Biological</label>
                                                        <input type="checkbox" name="tabaccotype" id="Commercial" value="other">
                                                        <label class="label-inner" for="Commercial">Radiological</label>
                                                        <input type="checkbox" name="tabaccotype" id="Trash" value="other">
                                                        <label class="label-inner" for="Trash">Nuclear</label>
                                                        <input type="checkbox" name="tabaccotype" id="Brush" value="other">
                                                        <label class="label-inner" for="Brush">Explosives</label>
                                                        <input type="checkbox" name="tabaccotype" id="other2" value="other">
                                                        <label class="label-inner" for="other2">Other</label>
                                                        <br>
                                                    </div>
                                                    <input id="otherFireTypeInput" type="text" class="form-control mtop" name="other_fire_type" placeholder="Enter Other Fire Type Here" style="display: none;">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <hr>
                                            </div>
                                            <div id="classificationsDiv" class="row" style="">
                                                <!-- Entry Team
    			================================== -->
                                                <div class="col-md-6 form-group">
                                                    <label for="entry_team">Were you a part of the Entry Team?</label>
                                                    <br>
                                                    <input type="radio" name="entry" id="noentry" value="male">
                                                    <label class="label-inner" for="noentry">No</label>
                                                    <input type="radio" name="entry" id="yesentry" value="female">
                                                    <label class="label-inner" for="yesentry">Yes</label>
                                                    <button class="btn btn-primary next-step btn-lg btn-rsvp" type="button" id="reset" value="Clear" />Clear
                                                </div>
                                            </div>
                                            <div class="row">
                                                <hr>
                                            </div>
                                            <div class="row">
                                                <!-- Decontamination Crew
    			================================== -->
                                                <div class="col-md-6 form-group">
                                                    <label for="decontamination_crew">Were you a part of the decontamination crew?</label>
                                                    <br>
                                                    <br>
                                                    <input type="radio" name="crew" id="nocrew" value="male">
                                                    <label class="label-inner" for="nocrew">No</label>
                                                    <input type="radio" name="crew" id="yescrew" value="female">
                                                    <label class="label-inner" for="yescrew">Yes</label>
                                                    <button class="btn btn-primary next-step btn-lg btn-rsvp" type="button" id="reset" value="Clear" />Clear
                                                </div>
                                            </div>
                                            <div class="row">
                                                <hr>
                                            </div>
                                            <div class="row">
                                                <!-- names_of_nearby_firefighters
		    	================================= -->
                                                <div id="namesInput" class="col-md-6 form-group ">
                                                    <label>Names of firefighter working close to you at time of exposure:</label>
                                                    <div id="inputWrapper">
                                                        <div class="input-group mbottom">
                                                            <input type="text" class="form-control nameInput" name="names[]"> <span class="input-group-btn">&nbsp;
									<button class="btn btn-default removeButton" type="button">
										X
									</button>
								</span>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <button id="addname" type="button" class="btn btn-default pull-right">
                                                        + Add Another
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- <div class="col-md-12"> -->
                                                <div class="container-fluid" style="padding-left: 0px; padding-right: 0px;">
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
                                        <h3 class="panel-title">PER #XXXXXX, Type: Hazardous Materials - Personal Protective Equipment</h3>
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
                                                <!-- where_was_geared_stored_between_shifts
    			================================== -->
                                                <div class="col-md-12 form-group ">
                                                    <label>What was your highest level of personal protective equipment?</label>
                                                    <div class="form-inline">
                                                        <input type="radio" name="gear" id="fire" value="male">
                                                        <label class="label-inner" for="fire">Level A (fully encapsulating vapor tight suit with SCUBA)</label>
                                                        <input type="radio" name="gear" id="trunk" value="female">
                                                        <label class="label-inner" for="trunk">Level B Encapsulating (splash protective suit with SCUBA)</label>
                                                        <br>
                                                        <input type="radio" name="gear" id="bed" value="other">
                                                        <label class="label-inner" for="bed">Level B Non-encapsulating (splash protective suit with SCUBA)</label>
                                                        <input type="radio" name="gear" id="backseat" value="other">
                                                        <label class="label-inner" for="backseat">Level C (minimum barrier and respiratory protection)</label>
                                                        <br>
                                                        <input type="radio" name="gear" id="home" value="other">
                                                        <label class="label-inner" for="home">Structural Firefighting Gear</label>
                                                        <input type="radio" name="gear" id="home" value="other">
                                                        <label class="label-inner" for="home">Civilian Clothes</label>
                                                        <input type="radio" name="gear" id="other5" value="other">
                                                        <label class="label-inner" for="other5">Other</label>
                                                        <br>
                                                        <button class="btn btn-primary next-step btn-lg btn-rsvp" type="button" id="reset" value="Clear" />Clear
                                                    </div>
                                                    <input id="otherGearInput" type="text" class="form-control mtop" name="other_gear" placeholder="Enter Other Storage Place" style="display: none;">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- where_was_geared_stored_between_shifts
    			================================== -->
                                                <div class="col-md-12 form-group ">
                                                    <label>What was the highest type of respiratory protection used (if any)?</label>
                                                    <div class="form-inline">
                                                        <input type="radio" name="gear" id="fire" value="male">
                                                        <label class="label-inner" for="fire">None</label>
                                                        <input type="radio" name="gear" id="trunk" value="female">
                                                        <label class="label-inner" for="trunk">Self-contained Breathing Apparatus (SCUBA)</label>
                                                        <br>
                                                        <input type="radio" name="gear" id="bed" value="other">
                                                        <label class="label-inner" for="bed">Supplied Air Respirator (SAR)</label>
                                                        <input type="radio" name="gear" id="backseat" value="other">
                                                        <label class="label-inner" for="backseat">Powered Air-Purifying Respirator (PAPR)</label>
                                                        <br>
                                                        <input type="radio" name="gear" id="home" value="other">
                                                        <label class="label-inner" for="home">N-95 Air Purifying Respirator</label>
                                                        <input type="radio" name="gear" id="home" value="other">
                                                        <label class="label-inner" for="home">Cartridge or Canister Air Purifying Respirator</label>
                                                        <input type="radio" name="gear" id="other5" value="other">
                                                        <label class="label-inner" for="other5">Other</label>
                                                        <br>
                                                        <button class="btn btn-primary next-step btn-lg btn-rsvp" type="button" id="reset" value="Clear" />Clear
                                                    </div>
                                                    <input id="otherGearInput" type="text" class="form-control mtop" name="other_gear" placeholder="Enter Other Storage Place" style="display: none;">
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
                                        <h3 class="panel-title">PER #XXXXXX, Type: Hazardous Materials - Decontamination</h3>
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
                                                    <label>Were post incident decontamination procedures at the scene followed?</label>
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
                                                    <label>Were post incident decontamination procedures at the station followed?</label>
                                                    <br>
                                                    <input type="radio" name="contgear" id="nogear" value="female">
                                                    <label class="label-inner" for="nogear">No</label>
                                                    <input type="radio" name="contgear" id="yesgear" value="other">
                                                    <label class="label-inner" for="yesgear">Yes</label>
                                                    <button class="btn btn-primary next-step btn-lg btn-rsvp" type="button" id="reset" value="Clear" />Clear
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
                                        <h3 class="panel-title">PER #XXXXXX, Type: Hazardous Materials - Medical Symptoms</h3>
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