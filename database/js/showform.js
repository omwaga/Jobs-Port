$(document).ready(function(){
    $("#worker").hide();
    $("#yes").click(function(){
        $("#worker").hide();
        $("#student").show();
        $('#yes').on('change', function() {
            $('#no').not(this).prop('checked', false);  
        });
    });
    $("#no").click(function(){
        $("#student").hide();
        $("#worker").show();
        $('#no').on('change', function() {
            $('#yes').not(this).prop('checked', false);  
        });
    });

});