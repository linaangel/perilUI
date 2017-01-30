$(document).ready(function () {
    var month = (new Date()).getMonth() + 1;
    var year = (new Date()).getFullYear();
    var pstyle = 'padding-right: 3px; color: #828AA7; text-shadow: 1px 1px 3px white;';
    var cancerSource = [
        {
            id: 1,
            typeName: 'Bladder'
        },
        {
            id: 2,
            typeName: 'Breast'
        },
        {
            id: 3,
            typeName: 'Cervical'
        },
        {
            id: 4,
            typeName: 'Colon'
        },
        {
            id: 5,
            typeName: 'Endometrial'
        },
        {
            id: 6,
            typeName: 'Kidney'
        },
        {
            id: 7,
            typeName: 'Larynx'
        },
        {
            id: 8,
            typeName: 'Leukemia (Blood)'
        },
        {
            id: 9,
            typeName: 'Liver'
        },
        {
            id: 10,
            typeName: 'Lung'
        },
        {
            id: 11,
            typeName: 'Lymphoma'
},
        {
            id: 12,
            typeName: 'Melanoma (Skin)'
},
        {
            id: 13,
            typeName: 'Ovarian'
},
        {
            id: 14,
            typeName: 'Pancreatic'
},
        {
            id: 15,
            typeName: 'Prostate'
},
        {
            id: 16,
            typeName: 'Rectal'
},
        {
            id: 17,
            typeName: 'Testicular'
},
        {
            id: 18,
            typeName: 'Thyroid'
},
        {
            id: 19,
            typeName: 'Not Sure / Do Not Know'
},
        {
            id: 20,
            typeName: 'Other'
},
    ];
    var cancertype = ['Bladder', 'Breast', 'Cervical', 'Colon', 'Endometrial', 'Kidney', 'Larynx', 'Leukemia (Blood)', 'Liver', 'Lung', 'Lymphoma', 'Melanoma (Skin)', 'Ovarian', 'Pancreatic', 'Prostate', 'Rectal', 'Testicular', 'Thyroid', 'Not Sure / Do Not Know', 'Other'];
    var dataSource = [
        {
            id: 1,
            firstName: 'White'
        },
        {
            id: 2,
            firstName: 'Hispanic or Latino'
        },
        {
            id: 3,
            firstName: 'African American'
        },
        {
            id: 4,
            firstName: 'Native American'
        },
        {
            id: 5,
            firstName: 'Asian'
        },
        {
            id: 6,
            firstName: 'Native Hawaiian or Other Pacific Islander'
        },
        {
            id: 7,
            firstName: 'Alaska Native'
        },
        {
            id: 8,
            firstName: 'Other'
        },
];
    var race = ['White', 'Hispanic or Latino', 'African American', 'Native American', 'Asian', 'Native Hawaiian or Other Pacific Islander', 'Alaska Native', 'Other'];
    var jobtitle = ['Firefighter', 'Driver Operator', 'Firefighter/EMT', 'Firefighter/Paramedic', 'Lieutenant', 'Captain', 'Special Operations Captain', 'Battalion Chief', 'EMS Captain', 'District Chief', 'Administrative', 'Investigator', 'Volunteer', 'Other'];
    var usstates = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'District of Columbia', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'];
    var shiftcycle = ['24 hrs on/ 48 hrs off', '24 hrs on/ 72 hrs off', '8 hrs * 5 days/week', '10 hrs * 4 days/week', 'Other'];
    var shifts = ['A', 'B', 'C', 'Other'];
    // Calendar
    $('.us-date').w2field('date');

    //Race
    $('#basic').magicsearch({
        dataSource: dataSource,
        fields: ['firstName'],
        id: 'id',
        format: '%firstName%',
        multiple: false
    });
    $('.profile-race').w2field('enum', {
        items: race,
        openOnFocus: true,
        selected: []
    });

    //CancerType 
    $('#basic-cancer').magicsearch({
        dataSource: cancerSource,
        fields: ['typeName'],
        id: 'id',
        format: '%typeName%'
    });
    $('.profile-cancertype').w2field('enum', {
        items: cancertype,
        openOnFocus: true,
        selected: []
    });

    //Job Title
    $('.profile-jobtitle').w2field('enum', {
        items: jobtitle,
        openOnFocus: true,
        max: 1
    });

    //US Cities
    $('.profile-states').w2field('enum', {
        items: usstates,
        openOnFocus: true,
        max: 1
    });

    //Shift Cycle
    $('.profile-shiftcycle').w2field('enum', {
        items: shiftcycle,
        openOnFocus: true,
        selected: []
    });
    //Shifts
    $('.profile-shifts').w2field('enum', {
        items: shifts,
        openOnFocus: true,
        selected: []
    });


    //Phone
    $('.demo').intlTelInput();

    //Clear Radio Gender
    $('#reset').click(function () {   
        $("input[name='gender']").prop('checked', false);
    });

    //Clear Radio Tobacco
    $('#reset2').click(function () {   
        $("input[name='tabacco']").prop('checked', false);
    });
    //    Slider Tiempo
    $('#slidertiempo').slider();

    //Slider Time Opt Clay
    $("#range_30").ionRangeSlider({
        type: "single",
        min: 0,
        max: 4,
        step: 0.5,
        grid: true,
        grid_snap: true
    });
    //Medical Symptoms
    $('#public-methods').multiSelect();
    $('#select-all').click(function () {
        $('#public-methods').multiSelect('select_all');
        return false;
    });
    $('#deselect-all').click(function () {
        $('#public-methods').multiSelect('deselect_all');
        return false;
    });
    // Change helmet to orange when needed
    $('.nav-tabs').click(function () {
        if ($('#step3li').hasClass('active')) {
            $('.helmet').attr('src', 'img/helmet.png');
        } else {
            $('.helmet').attr('src', 'img/helmetorange.png');
        }
    });
    // Change dive to organge
//    $('.nav-tabs').click(function () {
             //        if ($('#step1li').hasClass('active')) {
             //            $('.scuba').attr('src', 'img/scubagray.png');
             //        } else {
             //            $('.scuba').attr('src', 'img/scubaorange.png');
             //        }
             //    });
    // Update tabs when using links
//    $('.updatelink').click(function () {
//        if ($(this).attr('href') == '#step1') {
//            console.log('want to go back to step 1')
//            $('#step1tab').addClass('active');
//            $('#step2tab').removeClass('active');
//        }
//    });
});