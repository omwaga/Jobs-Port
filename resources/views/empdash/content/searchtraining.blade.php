
@extends('empdash.layouts')
@section('content')
<br>
<div class="container">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a class="text-primary nav-link" href="#">Training and Seminars</a></li>
    <li class="breadcrumb-item active nav-link text-primary" aria-current="page">category</li>
  </ol>
</nav>
<div class="row">
    <div class="col-md-4">
      <div class="alert alert-success" role="alert">
      {{$result->count()}} total training(s) found
      </div>
      <hr>
      </div>
      <div class="col-md-4">
      <form method="GET" action="/EmployerSearch">
  <div class="input-group">
    <input type="search" name="search" class="form-control" placeholder="Search training">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form>
      </div>
      <div class="col-md-4">
      <button class="btn btn-info pull-right" onclick="window.location.href = '/trainings/create';"><i class="fa fa-plus"></i> New Training</button>
      </div>
</div>
     <div class="row">
                <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Location</th>
      <th scope="col">Cost</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      @php $column_number = 0; @endphp
      @foreach($result as $training)
      @php $column_number = $column_number + 1; @endphp
    <tr>
      <th scope="row">{{$column_number}}.</th>
      <td>{{$training->title}}</td>
      <td>{{$training->town->name}}</td>
      <td>{{$training->cost}}</td>
      <td>{{$training->sdate}}</td>
      <td>{{$training->edate}}</td>
      <td>
      <a class="btn btn-info" href="/trainings/{{$training->id}}"><i class="fa fa-eye"></i> View</a>
      <a class="btn btn-success" href="/trainings/{{$training->id}}/edit"><i class="fa fa-pencil"></i> Update</a>
      <a class="btn btn-danger" data-toggle="modal" onclick="deleteData({{$training->id}})"  data-target="#DeleteTraining"><i class="fa fa-trash-o"></i> Delete</a>
      </td>
    </tr>
    
    <!-- Delete Modal -->
<div class="modal fade" id="DeleteTraining" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Delete the Training/Seminar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="POST" id="deleteForm">
              @csrf
              @method('DELETE')
          <div class="form-group">
    <label for="firstname">Are you Sure you want to delete this Training/Seminar?</label>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-danger" onclick="formSubmit()">Yes, Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>

    @endforeach
  </tbody>
</table>  
         </div>
     </div>

</div>

<!--Javascript to DELETE the training based on the users selection from the modal-->
  <script type="text/javascript">
     function deleteData(id)
     {
         var id = id;
         var url = '{{ route("trainings.destroy", ":id") }}';
         url = url.replace(':id', id);
         $("#deleteForm").attr('action', url);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
  </script>

@endsection
