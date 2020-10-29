@extends('layouts.admin.master')
@section('content')

<!--body wrapper start-->
<div class="wrapper">
  
  <!--Start Page Title-->
  <div class="page-title-box">
    <h4 class="page-title">Resume Samples</h4>
    <ol class="breadcrumb">
      <li>
        <a href="/admin-dashboard">Dashboard</a>
      </li>
      <li class="active">
        Resume Samples 
      </li>
    </ol>
    <div class="clearfix"></div>
  </div>
  <!--End Page Title-->          
  
  <!--Start row-->
  <div class="row">
   <div class="col-md-12">
     
    
     <div class="row">
      @if($resume_samples->count() > 0)
      
      <div class="col-md-12">
        <div class="white-box">
          <div class="row"> 
           <div class="col-md-6">
             <h2 class="header-title">Resume Samples</h2>
           </div>
           <div class="col-md-6">
            <button class="btn btn-info pull-right" data-toggle="modal" data-target="#modal-large" type="button">New Sample</button>
          </div>
        </div>
        <div class="table-responsive">

          @include('success')
          @include('errors')
          <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Domain Name</th>
                <th>Resume Sample</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php $column = 0 @endphp
              @foreach($resume_samples as $sample)
              @php $column = $column + 1 @endphp
              <tr>
                <td>{{$column}}</td>
                <td>{{$sample->domain->name ?? ''}}</td>
                <td><a href="/resumesamples/{{ $sample->name}}">{{$sample->name}}</a></td>
                <td>
                  <form method="POST" action="/resumesamples/{{ $sample->name}}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div> 
      </div>
    </div>
    
    @else
    <div class="col-md-3">
    </div>
    <div class="col-md-9">
      <div class="white-box">
        <div class="mailbox-content">
         <div class="mailbox-header">
         </div>
         
         <div class="compose-body">
          @include('errors')
          @include('success')
          <form class="row" method="post" action="/resumesamples">
            @csrf
            <div class="form-group">
              <label class="col-md-4 control-label" for="val-skill">Resume Domain </label>
              <div class="col-md-9">
                <select class="form-control" id="val-skill" name="domain_id">
                  <option value="">Please select</option>
                  @foreach($resume_domains as $domain)
                  <option value="{{$domain->id}}">{{$domain->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="to" class="col-md-4 control-label">Sample Name:</label>
              <div class="col-md-9">
                <input type="text" name="name" class="form-control" id="to">
              </div>
            </div>
            
            <div class="compose-options">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endif
</div>
</div>
</div>
<!--End row-->


</div>
<!-- End Wrapper-->

<!-- Large Modal -->
<div  id="modal-large" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">New Resume Sample</h4>
      </div>
      <div class="modal-body">
        <form class="row" method="post" action="/resumesamples">
          @csrf
          <div class="form-group">
            <label class="col-md-4 control-label" for="val-skill">Resume Domain </label>
            <div class="col-md-9">
              <select class="form-control" id="val-skill" name="domain_id">
                <option value="">Please select</option>
                @foreach($resume_domains as $domain)
                <option value="{{$domain->id}}">{{$domain->name}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="to" class="col-md-4 control-label">Sample Name:</label>
            <div class="col-md-9">
              <input type="text" name="name" class="form-control" id="to">
            </div>
          </div>
          
          <div class="compose-options">
            <div class="pull-right">
              <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Submit</button>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
    
  </div>
</div>
<!-- END Large Modal -->
@endsection
