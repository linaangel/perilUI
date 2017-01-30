<?php include 'header.php';
    ?>
    <div class="container">
        <h1>Edit Profile</h1>
        <div class="row">
            <div class="wizard">
                <div class="wizard-inner">
                    <div class="connecting-line"></div>
                    <ul class="nav nav-tabs" role="tablist">

                        <li role="presentation" class="active">
                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                <span class="round-tab">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                            </a>
                        </li>

                        <li role="presentation" class="disabled">
                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                <span class="round-tab">
                                <i class="glyphicon glyphicon-heart"></i>
                            </span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                <span class="round-tab">
                                <i class="glyphicon glyphicon-briefcase"></i>
                            </span>
                            </a>
                        </li>

                        <li role="presentation" class="disabled">
                            <a href="#step4" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                <span class="round-tab">
                                <i class="glyphicon glyphicon-phone"></i>
                            </span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-tabs steps" role="tablist">
                        <li><strong>Step 1:</strong> Personal</li>
                        <li><strong>Step 2:</strong> Health</li>
                        <li><strong>Step 3:</strong> Employment</li>
                        <li><strong>Step 4:</strong> Contact</li>
                        <li>Complete!</li>
                    </ul>
                    <ul class="nav nav-tabs steps-mobile" role="tablist">
                        <li><strong>Step 1</strong> </li>
                        <li><strong>Step 2</strong> </li>
                        <li><strong>Step 3</strong> </li>
                        <li><strong>Step 4</strong> </li>
                        <li>Complete!</li>
                    </ul>
                </div>

                <div class="tab-content">
                    <!--                                                Personal Info-->
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Personal Information</h3>
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

                                        <!--                                        <br> * Required Fields-->
                                        <br>
                                        <br>
                                        <form id="stepOne" role="form" autocomplete="off" class="container-fluid" method="POST" action="http://104.236.101.192/profile/step/1">
                                            <p>* Required Fields</p>
                                            <input type="hidden" name="_token" value="rRHYuARyIFSw8HgVX6AbduB1Y7wNC5uqHXA9LGTN">
                                            <div class="row">
                                                <!-- FIRST NAME 
    			================================== -->
                                                <div class="col-md-6 form-group ">
                                                    <label for="first_name">First Name: *</label>
                                                    <input type="text" class="form-control" name="first_name" value="">
                                                </div>
                                                <!-- LAST NAME 
    			================================== -->
                                                <div class="col-md-6 form-group ">
                                                    <label for="last_name">Last Name: *</label>
                                                    <input type="text" class="form-control" name="last_name" value="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- DATE OF BIRTH
    			================================== -->
                                                <div class="col-md-6 form-group ">
                                                    <label for="date_of_birth">Date of Birth:</label>
                                                    <!-- pattern="\d{1,2}/\d{1,2}/\d{4}" -->
                                                    <input class="form-control input-rsvp us-date" id="date" placeholder="MM/DD/YYYY">
                                                </div>
                                                <!-- GENDER
    			================================== -->
                                                <div class="col-md-6 form-inline ">
                                                    <label for="gender">Gender:</label>
                                                    <br>
                                                    <input type="radio" name="gender" id="male" value="male">
                                                    <label class="label-inner" for="male">Male</label>
                                                    <input type="radio" name="gender" id="female" value="female">
                                                    <label class="label-inner" for="female">Female</label>
                                                    <input type="radio" name="gender" id="other" value="other">
                                                    <label class="label-inner" for="other">Other</label>
                                                    <button class="btn btn-primary next-step btn-lg btn-rsvp" type="button" id="reset" value="Clear" />Clear
                                                    <input id="otherGenderInput" type="text" class="form-control mtop" name="other_gender" placeholder="Enter Other Gender Here" style="display: none;">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- RACE
    			================================== -->
                                                <div class="col-md-4 form-group ">
                                                    <label>Race: (Choose all that apply)</label>
                                                    <div class="form-inline">
                                                        <input class="magicsearch" id="basic" placeholder="Race">
                                                    </div>
                                                    <input id="otherRaceInput" type="text" class="form-control mtop" name="other_race" placeholder="Enter Other Race Here" style="display: none;">
                                                </div>
                                                <!-- HEIGHT FEET -->
                                                <div class="form-inline">
                                                    <div class="col-md-4">
                                                        <label>Height:</label>
                                                        <br>
                                                        <input type="number" min="0" class="form-control" min="0" max="9" name="height_feet" pattern="^[1-9]\d*$" value="" placeholder="Ft.">
                                                        <input type="number" min="0" class="form-control" type="number" min="0" max="12" name="height_inches" value="" id="heightinches" placeholder="In.">
                                                    </div>
                                                </div>
                                                <!-- WEIGHT -->
                                                <div class="col-md-4 form-group ">
                                                    <label for="weight">Weight (lbs):</label>
                                                    <input type="number" min="0" class="form-control" name="weight" placeholder="Lbs" value="">
                                                </div>
                                            </div>
                                        </form>

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
                    <!--                                   Health Information-->
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Health Information</h3>
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

                                        <form role="form" autocomplete="off" class="container-fluid" method="POST" action="http://104.236.101.192/profile/step/2">
                                            <input type="hidden" name="_token" value="v6x5JsMV7klPcIj9orYIDlg9VpybFzo66Mf50thf">
                                            <div class="row">
                                                <!-- DO YOU USE TOBACCO
    			================================== -->
                                                <div class="col-md-6 form-inline">
                                                    <label for="tabacco">Do you now use tobacco?</label>
                                                    <br>
                                                    <input type="radio" name="tabacco" id="never" value="male">
                                                    <label class="label-inner" for="never">No, I never have</label>
                                                    <input type="radio" name="tabacco" id="quit" value="female">
                                                    <label class="label-inner" for="quit">No, I quit</label>
                                                    <input type="radio" name="tabacco" id="regular" value="other">
                                                    <label class="label-inner" for="regular">Yes, Regulary</label>
                                                    <input type="radio" name="tabacco" id="some" value="other">
                                                    <label class="label-inner" for="some">Yes, Sometimes</label>
                                                    <button class="btn btn-primary next-step btn-lg btn-rsvp" type="button" id="reset2" value="Clear" />Clear
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="container-fluid">
                                                        <!-- WHAT TYPE OF TOBACCO PRODUCT
			    		================================== -->
                                                        <div id="productsSelectGroupDiv" class="row form-group 
								">
                                                            <label>What type of tobacco product? (Choose all that apply)</label>
                                                            <br>
                                                            <div class="form-inline">
                                                                <input type="checkbox" name="tabaccotype" id="cigarettes" value="male">
                                                                <label class="label-inner" for="cigarettes">Cigarettes</label>
                                                                <input type="checkbox" name="tabaccotype" id="cigars" value="female">
                                                                <label class="label-inner" for="cigars">Cigars</label>
                                                                <input type="checkbox" name="tabaccotype" id="pipe" value="other">
                                                                <label class="label-inner" for="pipe">Pipe</label>
                                                                <input type="checkbox" name="tabaccotype" id="electric" value="other">
                                                                <label class="label-inner" for="electric">Electric Cigarettes</label>
                                                                <br>
                                                                <input type="checkbox" name="tabaccotype" id="hookah" value="other">
                                                                <label class="label-inner" for="hookah">Hookah</label>
                                                                <input type="checkbox" name="tabaccotype" id="chew" value="other">
                                                                <label class="label-inner" for="chew">Chew/Dip</label>
                                                            </div>
                                                        </div>
                                                        <!-- AVG CIGS PER DAY
    					================================== -->
                                                        <div id="avgCiggsDiv" class="row form-group 
							" style="display:none;">
                                                            <label for="avg_cigarettes_per_day">On average, about how many cigarettes a day do you smoke?</label>
                                                            <input id="avgCiggsInput" type="number" min="0" max="100" class="form-control" name="avg_cigarettes_per_day" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <!-- TAKES SCRIPT MEDS
    			================================== -->
                                                <div class="col-md-6 form-group">
                                                    <label for="takes_prescription_meds">Do you now take prescription medications?</label>
                                                    <br>
                                                    <input type="radio" name="tabacco" id="nosure" value="male">
                                                    <label class="label-inner" for="nosure">Not Sure / Don't Know</label>
                                                    <input type="radio" name="tabacco" id="no" value="female">
                                                    <label class="label-inner" for="no">No</label>
                                                    <input type="radio" name="tabacco" id="yes" value="other">
                                                    <label class="label-inner" for="yes">Yes</label>
                                                    <button class="btn btn-primary next-step btn-lg btn-rsvp" type="button" id="reset3" value="Clear" />Clear
                                                </div>
                                                <!-- WHICH SCRIPT MEDS ARE YOU NOW TAKING
    			========================================== -->
                                                <div id="medicationInput" class="col-md-6 form-group ">
                                                    <label>Which prescription medications are you now taking?</label>
                                                    <br>
                                                    <textarea class="form-control input-rsvp inputs-lenght" name="message" id="message" rows="3" placeholder="Write the names of the prescription medications you are taking" required></textarea>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <!-- EVER BEEN DIAGNOSED CANCER
    			================================== -->
                                                <div class="col-md-6 form-group ">
                                                    <label for="has_been_diagnosed_with_cancer">Have you ever been diagnosed with cancer?</label>
                                                    <br>
                                                    <input type="radio" name="tabacco" id="nosure1" value="male">
                                                    <label class="label-inner" for="nosure1">Not Sure / Don't Know</label>
                                                    <input type="radio" name="tabacco" id="no1" value="female">
                                                    <label class="label-inner" for="no1">No</label>
                                                    <input type="radio" name="tabacco" id="yes2" value="other">
                                                    <label class="label-inner" for="yes2">Yes</label>
                                                    <button class="btn btn-primary next-step btn-lg btn-rsvp" type="button" id="reset4" value="Clear" />Clear
                                                </div>
                                                <!-- CANCER TYPE
    			================================== -->
                                                <div class="col-md-6 form-group ">
                                                    <label>What type of cancer? (Choose all that apply)</label>
                                                    <br>
                                                    <input class="magicsearch" id="basic-cancer" placeholder="Type">
                                                    <!--                                                    <input class="profile-cancertype inputdynamic-cancer" id="cancer">-->
                                                    <input id="otherTypeInput" type="text" class="form-control mtop" name="other_cancer_type" placeholder="Enter Other Cancer Type Here" style="display: none;">
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
                    <!--                      Employment Information-->
                    <div class="tab-pane" role="tabpanel" id="step3">

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Employment Information</h3>
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
                                        <form role="form" autocomplete="off" class="container-fluid" method="POST" action="http://104.236.101.192/profile/step/3">
                                            <p>* Required Fields</p>
                                            <input type="hidden" name="_token" value="v6x5JsMV7klPcIj9orYIDlg9VpybFzo66Mf50thf">
                                            <div class="row">
                                                <!-- Agency
    			================================== -->
                                                <div class="col-md-6">
                                                    <label for="agency">Agency: *</label>
                                                    <input type="name" class="form-control input-rsvp" id="heightfeet" placeholder="Agency">
                                                </div>
                                                <div id="otherAgencyInputDiv" class="col-md-6 form-group" style="display:none;">
                                                    <label for="">Enter Agency Name:</label>
                                                    <input id="otherAgencyInput" type="text" class="form-control" name="other_agency">
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- JOB TITLE
	    			================================== -->
                                                    <label for="job_title">Job Title:</label>
                                                    <br>
                                                    <input type="text" class="profile-jobtitle inputdynamic-cancer" id="jobtitle">
                                                    <input id="otherJobTitleInput" type="text" class="form-control mtop" name="other_job_title" placeholder="Enter Other Job Title Here" style="display: none;">

                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6 form-group ">
                                                    <!-- EMPLOYEE ID
    				================================== -->
                                                    <label for="employee_id">Employee ID:</label>
                                                    <input class="form-control" type="text" name="employee_id" value="">
                                                </div>
                                                <div class="container-fluid">
                                                    <!-- AGENCY START DATE
    				================================== -->
                                                    <label for="agencyMonth">Agency Start Date:</label>
                                                    <div class="row">
                                                        <div class="col-md-6 form-group ">
                                                            <input class="form-control input-rsvp us-date inputs-lenght" id="date" placeholder="MM/YYYY">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!--  AGENCY HQ ADDRESS
    			================================== -->
                                                <div class="container-fluid">
                                                    <label>Agency Headquarters Address:</label>
                                                    <div class="row">
                                                        <div class="col-md-5 form-group ">
                                                            <input id="agencyAddressInput" class="form-control" type="text" name="agency_hq_address" placeholder="Street Address" value="">
                                                        </div>
                                                        <div class="col-md-3 form-group ">
                                                            <input id="agencyCityInput" class="form-control" type="text" name="agency_hq_city" placeholder="City" value="">
                                                        </div>
                                                        <div class="col-md-2 form-group ">
                                                            <input type="text" class="profile-states inputdynamic-cancer" id="usstates" placeholder="State" value="">
                                                        </div>
                                                        <div class="col-md-2 form-group ">
                                                            <input id="agencyZipInput" class="form-control" type="number" name="agency_hq_zip" placeholder="Zip Code" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group ">
                                                    <!-- STATION #
    				================================== -->
                                                    <label for="station_number">Station #:</label>
                                                    <!-- Input for generic station number (not PBCF) -->
                                                    <input id="stationInput" class="form-control" type="text" name="station_number" value="">
                                                    <!-- Dropdown for PBCF station numbers/options -->
                                                    <select id="pbcfStationSelect" name="pbcf_station_number" class="form-control" style="display:none;">
                                                        <option value=""></option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                        <option value="32">32</option>
                                                        <option value="33">33</option>
                                                        <option value="34">34</option>
                                                        <option value="35">35</option>
                                                        <option value="36">36</option>
                                                        <option value="37">37</option>
                                                        <option value="38">38</option>
                                                        <option value="39">39</option>
                                                        <option value="41">41</option>
                                                        <option value="42">42</option>
                                                        <option value="43">43</option>
                                                        <option value="44">44</option>
                                                        <option value="45">45</option>
                                                        <option value="46">46</option>
                                                        <option value="47">47</option>
                                                        <option value="48">48</option>
                                                        <option value="51">51</option>
                                                        <option value="52">52</option>
                                                        <option value="53">53</option>
                                                        <option value="54">54</option>
                                                        <option value="55">55</option>
                                                        <option value="56">56</option>
                                                        <option value="57">57</option>
                                                        <option value="58">58</option>
                                                        <option value="68">68</option>
                                                        <option value="72">72</option>
                                                        <option value="73">73</option>
                                                        <option value="74">74</option>
                                                        <option value="81">81</option>
                                                        <option value="82">82</option>
                                                        <option value="91">91</option>
                                                        <option value="93">93</option>
                                                        <option value="Unassigned">Unassigned</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                    <!-- Input for other PBCF station -->
                                                    <input id="pbcfOtherStationInput" class="form-control mtop" type="text" name="other_pbcf_station_number" style="display: none;" placeholder="Enter Other Station Number">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- STATION ADDRESS
    			================================== -->
                                                <div class="container-fluid">
                                                    <label>Station Address:</label>
                                                    <div class="row">
                                                        <div class="col-md-5 form-group ">
                                                            <input id="stationAddressInput" class="form-control" type="text" name="station_address" placeholder="Street Address" value="">
                                                        </div>
                                                        <div class="col-md-3 form-group ">
                                                            <input id="stationCityInput" class="form-control" type="text" name="station_city" placeholder="City" value="">
                                                        </div>
                                                        <div class="col-md-2 form-group ">
                                                            <input type="text" class="profile-states inputdynamic-cancer" id="usstates" placeholder="State" value="">
                                                        </div>
                                                        <div class="col-md-2 form-group ">
                                                            <input id="stationZipInput" class="form-control" type="number" name="station_zip" placeholder="Zip Code" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div id="shiftCycleDiv" class="col-md-6 form-group ">
                                                    <!-- SHIFT CYCLE
	    			================================== -->
                                                    <label>Shift Cycle:</label>
                                                    <br>
                                                    <!-- Input for generic Shift Cycle (not PBCF) -->
                                                    <input type="radio" name="tabacco" id="24" value="male">
                                                    <label class="label-inner" for="24">24 hrs on/ 48 hrs off</label>
                                                    <input type="radio" name="tabacco" id="72" value="female">
                                                    <label class="label-inner" for="72">24 hrs on/ 72 hrs off</label>
                                                    <input type="radio" name="tabacco" id="8" value="other">
                                                    <label class="label-inner" for="8">8 hrs * 5 days/week</label>
                                                    <br>
                                                    <input type="radio" name="tabacco" id="10" value="other">
                                                    <label class="label-inner" for="10">10 hrs * 4 days/week</label>
                                                    <input type="radio" name="tabacco" id="othershift" value="other">
                                                    <label class="label-inner" for="othershift">Other</label>
                                                    <!-- Input for other PBCF shift cycle -->
                                                    <input id="pbcfOtherShiftCycleInput" type="text" class="form-control mtop" name="other_pbcf_shift_cycle" style="display: none;" placeholder="Enter Other Shift Cycle">
                                                    <br>
                                                    <button class="btn btn-primary next-step btn-lg btn-rsvp" type="button" id="reset5" value="Clear" />Clear
                                                </div>
                                                <div class="col-md-6 form-group ">
                                                    <!-- SHIFT
	    			================================== -->
                                                    <label for="shift">Shift:</label>
                                                    <br>
                                                    <!-- Input for generic Shift (not PBCF)  -->
                                                    <input type="radio" name="tabacco" id="A" value="male">
                                                    <label class="label-inner" for="A">A</label>
                                                    <input type="radio" name="tabacco" id="B" value="female">
                                                    <label class="label-inner" for="B">B</label>
                                                    <input type="radio" name="tabacco" id="C" value="other">
                                                    <label class="label-inner" for="C">C</label>
                                                    <input type="radio" name="tabacco" id="othershiftcyc" value="other">
                                                    <label class="label-inner" for="othershiftcyc">Other</label>
                                                    <!-- Input for other PBCF shift cycle -->
                                                    <input id="pbcfOtherShiftInput" type="text" class="form-control mtop" name="other_pbcf_shift" style="display: none;" placeholder="Enter Other Shift">
                                                    <br>
                                                    <button class="btn btn-primary next-step btn-lg btn-rsvp" type="button" id="reset6" value="Clear" />Clear
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <hr>
                                                    <h2>Total Years of Fire Service</h2>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="container-fluid">
                                                    <!-- FIRE SERVICE START DATE
    				================================== -->
                                                    <label>When did you begin your Fire Service career?</label>
                                                    <br>
                                                    <input class="form-control input-rsvp us-date inputs-lenght" id="date" placeholder="MM/YYYY">
                                                </div>
                                            </div>
                                            <hr>
                                            <h2>Other Employment</h2>
                                            <div class="row">
                                                <!-- DO YOU HAVE ANOTHER JOB
    			================================== -->
                                                <div class="col-md-6 form-group ">
                                                    <label>Do you have another job?</label>
                                                    <br>
                                                    <input type="radio" name="tabacco" id="nojob" value="female">
                                                    <label class="label-inner" for="nojob">No</label>
                                                    <input type="radio" name="tabacco" id="yesjob" value="other">
                                                    <label class="label-inner" for="yesjob">Yes</label>
                                                    <button class="btn btn-primary next-step btn-lg btn-rsvp" type="button" id="reset7" value="Clear" />Clear
                                                </div>

                                                <div id="daysMonthDiv" class="col-md-6 form-group ">
                                                    <label>How many days in a month do you work in another job?</label>
                                                    <input id="daysMonthInput" type="number" min="0" max="31" class="form-control" name="days_in_month_work_other_job" placeholder="e.g.: 10" value="">
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
                    <!--                                Contact Information-->
                    <div class="tab-pane" role="tabpanel" id="step4">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Contact Information</h3>
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
                                        <form role="form" autocomplete="off" class="container-fluid" method="POST" action="http://104.236.101.192/profile/step/4">
                                            <input type="hidden" name="_token" value="v6x5JsMV7klPcIj9orYIDlg9VpybFzo66Mf50thf">
                                            <div class="row">
                                                <!-- WILLING TO BE CONTACTED
    			================================== -->
                                                <div class="col-md-12 form-group">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <label>Do you agree to have a cancer researcher contact you? You can opt out of such researcher contact at any time.</label>
                                                        </div>
                                                        <div class="row">
                                                            <label for="yesRadio" class="radio-inline">
                                                                <input id="yesRadio" type="radio" name="opt_in" placeholder="yes" value="1" checked=""> Yes
                                                            </label>
                                                            <label for="noRadio" class="radio-inline">
                                                                <input id="noRadio" type="radio" name="opt_in" placeholder="no" value="0"> No
                                                            </label>
                                                            <button class="btn btn-primary next-step btn-lg btn-rsvp" type="button" id="reset8" value="Clear" />Clear
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-inline">
                                                <label><strong>Preferred Contact Method:</strong></label>
                                                <br>
                                                <!--
                                                <input type="radio" name="gender" value="male"> Phone &nbsp; &nbsp;
<input type="radio" name="gender" value="female"> Mail &nbsp; &nbsp;
<input type="radio" name="gender" value="male"> E-mail &nbsp; &nbsp;
<input type="radio" name="gender" value="male"> Other &nbsp; &nbsp;
-->
                                                <label for="phone" class="radio-inline">
                                                    <input id="phone" type="radio" name="opt_in" placeholder="yes" value="Phone" checked=""> Phone
                                                </label>
                                                <label for="mail" class="radio-inline">
                                                    <input id="mail" type="radio" name="opt_in" placeholder="no" value="Mail"> Mail
                                                </label>
                                                <label for="email" class="radio-inline">
                                                    <input id="email" type="radio" name="opt_in" placeholder="yes" value="Email" checked=""> E-mail
                                                </label>
                                                <label for="other" class="radio-inline">
                                                    <input id="other" type="radio" name="opt_in" placeholder="no" value="other"> Other
                                                </label>
                                                <button class="btn btn-primary next-step btn-lg btn-rsvp" type="button" id="reset9" value="Clear" />Clear
                                            </div>
                                            <br>
                                            <div id="contactFields">
                                                <div class="row">
                                                    <!--  YOUR PHONE
	    			================================== -->
                                                    <div class="col-md-6 form-group ">
                                                        <label for="contact_phone">Phone Number:</label>
                                                        <br>
                                                        <input type="tel" class="demo" placeholder="Your Phone Number">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <!--  EMAIL
	    			================================== -->
                                                    <div class="col-md-6 form-group ">
                                                        <label for="contact_email">Email:</label>
                                                        <input id="emailInput" type="text" class="form-control" name="contact_email" value="">
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

                    <div class="tab-pane" role="tabpanel" id="complete">
                        <div class="content-wrapper">
                            <div class="container-fluid main">
                                <h1>Full User Profile</h1>
                                <!-- Personal Information -->
                                <div class="row">
                                    <div class="panel panel-default">
                                        <div class="panel-heading container-fluid">
                                            <h3 class="panel-title col-xs-8">Personal Information</h3>
                                            <a href="http://104.236.101.192/profile/step/1" class="updatelink pull-right button-link">Update</a>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Name:</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p>Lina Angel</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Date of Birth:</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Gender:</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p>Female</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Race:</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p>

                                                        Hispanic or Latino
                                                        <br>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Height:</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p>
                                                        5' 8"
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Weight:</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p>132</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Health Information
    ================================== -->
                                <div class="row">
                                    <div class="panel panel-default">
                                        <div class="panel-heading container-fluid">
                                            <h3 class="panel-title col-xs-8">Health Information</h3>
                                            <a href="http://104.236.101.192/profile/step/2" class="updatelink pull-right button-link">Update</a>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Do you now use tobacco:</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p>Yes, Regularly</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>What type of tobacco:</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Do you now take prescription medications:</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p>Yes</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Your current prescription medications:</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p>

                                                        Drospirenone
                                                        <br>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Have you ever been diagnosed with cancer?</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p>Yes</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Cancer type(s):</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Employment Information
    ================================== -->
                                <div class="row">
                                    <div class="panel panel-default">
                                        <div class="panel-heading container-fluid">
                                            <h3 class="panel-title col-xs-8">Employment Information</h3>
                                            <a href="http://104.236.101.192/profile/step/3" class="updatelink pull-right button-link">Update</a>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Agency:</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Agency FDID:</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Job Title:</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Employee ID:</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Agency Start Date:</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p>September 2011</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Agency Headquarters Address:</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Station #:</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Station Address:</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Shift Cycle:</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Shift:</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Date Joined Fire Service:</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p> </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Total years of Fire Service:</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Do you have another job:</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p>
                                                        Yes
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- <div class="row">
                    <div class="col-sm-6 fieldname">
                        <p><b>Last time you worked at that job:</b></p>
                    </div>
                    <div class="col-sm-6 fieldvalue" >
                        <p></p>
                    </div>
                </div> -->
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Days in a month you work at another job:</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Contact Information
    ================================== -->
                                <div class="row">
                                    <div class="panel panel-default">
                                        <div class="panel-heading container-fluid">
                                            <h3 class="panel-title col-xs-8">Contact Information</h3>
                                            <a href="http://104.236.101.192/profile/step/4" class="updatelink pull-right button-link">Update</a>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Are you willing to be contacted?</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p>
                                                        Yes
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Contact Phone:</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Contact Email:</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Contact Address:</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 fieldname">
                                                    <p class="align-right"><b>Preferred Contact Method:</b></p>
                                                </div>
                                                <div class="col-sm-6 fieldvalue">
                                                    <p></p>
                                                </div>
                                            </div>
                                        </div>
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
    <?php include 'footer.php';
    ?>