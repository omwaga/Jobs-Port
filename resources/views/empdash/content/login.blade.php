@extends('empdash.layouts')
@section('content')
   <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">You are already logged in</h4>
                
                            </div>

        </div>
             <div class="row">
            <div class="col-md-12">
               <div class="alert alert-danger">
You are already logged in as {{Auth::guard('employer')->user()->username}}
                   <br />
                   Continue posting jobs with us.
                   <br />
                 
               </div>
                            </div>

        </div>
    </div>
    </div>
@endsection