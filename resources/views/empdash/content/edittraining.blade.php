@extends('empdash.layouts')
@section('content')
 <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">EDIT TRAINING</h4>
                
                            </div>

        </div>
             <div class="row">
                     <form method="POST" action="/trainings/{{ $training->id}}">
                         @csrf
                         @method('PATCH')
                         @if (session('status'))
                                  <div class="alert alert-success">
                                  {{ session('status') }}
                                           </div>
                                           @endif
                                           
                                           
                            @include('errors')<!--display the error messages -->
                                 
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        
                        <div class="panel-body">
                        
                                        <div class="form-group">
                                            <label>Title:</label>
                                            <input class="form-control" type="text" required name="title" value="{{$training->title}}" placeholder="Training/Seminar Title">
                                           
                                        </div>
                                               
                                 <div class="col-md-6 form-group">
                                            <label>Category Name:</label>
  <select class="form-control"  name="jobcategories_id">
    <option selected>Select Training/Seminar Category</option>
    @foreach($categories as $category)
    <option value="{{$category->id}}">{{ $category->jobcategories }}</option>
    @endforeach
  </select>
                                    
                                        </div>
                                        
                                        <div class="col-md-6 form-group">
                                            <label>Training Location:</label>
  <select class="form-control"  name="town_id">
    <option selected>Select Training/Seminar Location</option>
    @foreach($traininglocations as $traininglocation)
    <option value="{{$traininglocation->id}}">{{$traininglocation->name}}</option>
    @endforeach
  </select>
                                    
                                        </div>
                                        
                                            <div class="form-group">
                                            <label>Short Description:</label>
                                            <textarea class="form-control" name="short_description" rows="3" placeholder="Short Description">{{$training->short_description}}</textarea>
                                 
                                        </div>
                                 <div class="form-group">
                                            <label>Full Description:</label>
                                            <textarea class="form-control" rows="4" id="tdesc" name="full_description" required>{{$training->full_description}}</textarea>
                                   
                                        </div>
                                         
                                         <div class='row col-md-12'>                                    
                                 <div class="col-md-4 form-group">
                                            <label>Training Cost:</label>
                                            <input class="form-control" type="number" required name="cost" value="{{$training->cost}}" placeholder="Training Cost in Kshs"/>
                                    
                                        </div>
                                            <div class="col-md-4 form-group">
                                            <label>Start Date:</label>
                                            <input class="form-control" type="date" required name="sdate" value="{{$training->sdate}}" />
                                 
                                        </div>
                                <div class="col-md-4 form-group">
                                            <label>End date:</label>
                                            <input class="form-control"  type="date" required name="edate" value="{{$training->edate}}" />
                                       </div>
                                       </div>

                            </div>
                        </div>
                                        <button type="submit" class="btn btn-info pull-right">Update Training </button>
                            </div>
                            
                     </form>          
        </div>

    </div>
    </div>
@endsection