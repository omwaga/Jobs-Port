$(function(){

    //editables 
    $('#username').editable({
     url: '/post',
     type: 'text',
     pk: 1,
     name: 'username',
     title: 'Enter username'
 });
    
    // editing of the full name eprovided by theuser
    $('#full_name').editable({
        url: '/test',
        validate: function(value) {
         if($.trim(value) == '') return 'This field is required';
     }
 });

    $('#exp').editable({
     url: '/post',
     type: 'text',
     pk: 1,
     name: 'username',
     title: 'Enter username'
 });

//Editing of the education details provided by the user.
//section title
$('#education').editable({
    validate: function(value) {
     if($.trim(value) == '') return 'This field is required';
 }
});

// education one
$('#education1').editable({
    validate: function(value) {
     if($.trim(value) == '') return 'This field is required';
 }
});
$('#course1').editable({
    validate: function(value) {
     if($.trim(value) == '') return 'This field is required';
 }
});
$('#start1').editable({
    validate: function(value) {
     if($.trim(value) == '') return 'This field is required';
 }
});
    // education 2
    $('#education2').editable({
        validate: function(value) {
         if($.trim(value) == '') return 'This field is required';
     }
 });
    $('#course2').editable({
        validate: function(value) {
         if($.trim(value) == '') return 'This field is required';
     }
 });
$('#start2').editable({
    validate: function(value) {
     if($.trim(value) == '') return 'This field is required';
 }
});
    // Education 3
    $('#education3').editable({
        validate: function(value) {
         if($.trim(value) == '') return 'This field is required';
     }
 });
    $('#course3').editable({
        validate: function(value) {
         if($.trim(value) == '') return 'This field is required';
     }
 });
$('#start3').editable({
    validate: function(value) {
     if($.trim(value) == '') return 'This field is required';
 }
});
    // Education 4
    $('#education4').editable({
        validate: function(value) {
         if($.trim(value) == '') return 'This field is required';
     }
 });
    $('#course4').editable({
        validate: function(value) {
         if($.trim(value) == '') return 'This field is required';
     }
 });
$('#start4').editable({
    validate: function(value) {
     if($.trim(value) == '') return 'This field is required';
 }
});

    // Editing of the award details provided by the user
// Editing the section title
$('#award').editable({
    validate: function(value) {
     if($.trim(value) == '') return 'This field is required';
 }
});
    // First awrad
    $('#award1').editable({
        validate: function(value) {
         if($.trim(value) == '') return 'This field is required';
     }
 });
    // Second award
    $('#award2').editable({
        validate: function(value) {
         if($.trim(value) == '') return 'This field is required';
     }
 });
    // third award
    $('#award3').editable({
        validate: function(value) {
         if($.trim(value) == '') return 'This field is required';
     }
 });
    // fourth award
    $('#award4').editable({
        validate: function(value) {
         if($.trim(value) == '') return 'This field is required';
     }
 });

//inline editable for editing the interests section title
$('#interests').editable({
   mode: 'inline',
   url: '',
   type: 'text',
   pk: 1,
   name: 'username',
   title: 'Enter username'
});
    // editing of the interest areas provided by the user
    $('#interest1').editable({
        validate: function(value) {
         if($.trim(value) == '') return 'This field is required';
     }
 });

//Editing of the email provided by the user
$('#email').editable({
    validate: function(value) {
     if($.trim(value) == '') return 'This field is required';
 }
});

    // Editing of the position provided  by the user
    $('#position').editable({
        validate: function(value) {
         if($.trim(value) == '') return 'This field is required';
     }
 });

    // Editing ofthe skills provided by the user 
$('#skill').editable({
    validate: function(value) {
     if($.trim(value) == '') return 'This field is required';
 }
});
    // for skill 1
    $('#skill1').editable({
        validate: function(value) {
         if($.trim(value) == '') return 'This field is required';
     }
 });
    // for skill 2
    $('#skill2').editable({
        validate: function(value) {
         if($.trim(value) == '') return 'This field is required';
     }
 });
    // for skill3
    $('#skill3').editable({
        validate: function(value) {
         if($.trim(value) == '') return 'This field is required';
     }
 });
    // for skill 4
    $('#skill4').editable({
        validate: function(value) {
         if($.trim(value) == '') return 'This field is required';
     }
 });

    // Editing of the phone number provided by the user
    $('#phone').editable({
        validate: function(value) {
         if($.trim(value) == '') return 'This field is required';
     }
 });
    
// Editing of the Gender provided by the user
$('#sex').editable({
    prepend: "not selected",
    source: [
    {value: 1, text: 'Male'},
    {value: 2, text: 'Female'}
    ],
    display: function(value, sourceData) {
       var colors = {"": "gray", 1: "green", 2: "blue"},
       elem = $.grep(sourceData, function(o){return o.value == value;});

       if(elem.length) {    
           $(this).text(elem[0].text).css("color", colors[value]); 
       } else {
           $(this).empty(); 
       }
   }   
});    

// Editing of the staus provided by theuser   
$('#status').editable();   

$('#group').editable({
 showbuttons: false 
});   

        // editing of the DOB provide by the user
        $('#dob').editable();

        $('#event').editable({
            placement: 'right',
            combodate: {
                firstItem: 'name'
            }
        });      

// editing the career profile provided by the 
$('#career_section').editable({
    validate: function(value) {
     if($.trim(value) == '') return 'This field is required';
 }
});
$('#career').editable({
    showbuttons: 'bottom'
}); 
// editing of the experiences provided by the user
//section title
$('#experience').editable({
    validate: function(value) {
     if($.trim(value) == '') return 'This field is required';
 }
});
// editing experience 1
$('#experience1').editable({
    showbuttons: 'bottom'
}); 
$('#position1').editable({
    showbuttons: 'bottom'
}); 
$('#employer1').editable({
    showbuttons: 'bottom'
});
// editing experience 2
$('#experience2').editable({
    showbuttons: 'bottom'
}); 
$('#position2').editable({
    showbuttons: 'bottom'
}); 
$('#employer2').editable({
    showbuttons: 'bottom'
});

// editing of the projects provided by the user
// section title
$('#project').editable({
    validate: function(value) {
     if($.trim(value) == '') return 'This field is required';
 }
});
// project introduction
$('#project_intro').editable({
    showbuttons: 'bottom'
});
//project title
$('#project1').editable({
    showbuttons: 'bottom'
});
// project body/description
$('#project_desc1').editable({
    showbuttons: 'bottom'
});

    //inline editables 
    $('#interests').editable({
     mode: 'inline',
     url: '',
     type: 'text',
     pk: 1,
     name: 'username',
     title: 'Enter username'
 });
    
    $('#inline-firstname').editable({
     mode: 'inline',
     validate: function(value) {
         if($.trim(value) == '') return 'This field is required';
     }
 });
    
    $('#inline-sex').editable({
     mode: 'inline',
     prepend: "not selected",
     source: [
     {value: 1, text: 'Male'},
     {value: 2, text: 'Female'}
     ],
     display: function(value, sourceData) {
       var colors = {"": "gray", 1: "green", 2: "blue"},
       elem = $.grep(sourceData, function(o){return o.value == value;});

       if(elem.length) {    
           $(this).text(elem[0].text).css("color", colors[value]); 
       } else {
           $(this).empty(); 
       }
   }   
});    
    
    
    $('#inline-status').editable({
       mode: 'inline',
   });   
    
    $('#inline-group').editable({
     mode: 'inline',
     showbuttons: false 
 });   

    $('#inline-vacation').editable({
     mode: 'inline',
     datepicker: {
        todayBtn: 'linked'
    } 
});  

    $('#inline-dob').editable({
      mode: 'inline',
  });

    $('#inline-event').editable({
     mode: 'inline',
     placement: 'right',
     combodate: {
        firstItem: 'name'
    }
});         
    
    $('#inline-comments').editable({
        showbuttons: 'bottom',
        mode: 'inline'
    }); 
});