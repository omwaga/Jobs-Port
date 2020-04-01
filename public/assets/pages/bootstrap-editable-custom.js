$(function(){
  
    //editables 
    $('#username').editable({
           url: '/post',
           type: 'text',
           pk: 1,
           name: 'username',
           title: 'Enter username'
    });
    
    // editing of the full nam eprovided by theuser
    $('#name').editable({
        url: '/test',
        validate: function(value) {
           if($.trim(value) == '') return 'This field is required';
        }
    });

//Editing of the education details provided by the user.
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
       
// editing the career profile provided by the user
    $('#career').editable({
        showbuttons: 'bottom'
    }); 
// editing of the experiences provided by the user
// editing experience 1
    $('#experience1').editable({
        showbuttons: 'bottom'
    }); 
    $('#position1').editable({
        showbuttons: 'bottom'
    });
// editing experience 2
    $('#experience2').editable({
        showbuttons: 'bottom'
    }); 
    $('#position2').editable({
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