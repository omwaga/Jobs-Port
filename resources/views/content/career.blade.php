@extends('layouts.app')
@section('content')
<div class="container">

        <div class="form-group">
            <label for="exampleInputEmail1">Which field are you?</label>
<input type="text" class="form-control typeahead" name= "search" id="search" autocomplete="off"
required autofocus aria-describedby="emailHelp" placeholder="search your field" value="{{ old('search') }}">
<div id="jobs">

    </div>
</div>
</div>

<script>
    $(document).ready(function(){
    $("#search").keyup(function(){
        var str=  $("#search").val();
        if(str == "") {
                $( "#jobs" ).html("<b>Blogs information will be listed here...</b>"); 
        }else {
                $.get( "{{ url('/autocomplete?id=') }}"+str, function( data ) {
                    $( "#jobs" ).html( data );  
             });
        }
    });  
 });
 $(document).ready(function(){
    $("#linkk a").click(function(){
        var value = $(this).html();
        var input = $('#search');
        input.val(value);
    });
});
    </script>
@endsection