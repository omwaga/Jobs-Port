<div class="tab-pane" id="account">
  <h4 class="info-text"> Provide Personal Statemant/Career Objetive </h4>
  @if($personalstatements)

  <div class="col-md-12 profile-text">
    <label><strong>Personal Statement:</strong> {!!$personalstatements->statement!!}</label>
    <p class="pull-right"><button class="btn btn-danger text-white btn-sm"  data-toggle="modal" data-target="#personal"><i class="fa fa-edit"></i> Edit </button></p>
  </div><hr>
    @include('dashboard.wizard.edit-personal-statements')
  @else
  <form method="POST" action="/personalstatements">
    @csrf
    <div class="row">

      <div class="col-sm-10 col-sm-offset-1">    
        <label>Personal Statement:</label>
        <textarea name="statement" class="form-control ckeditor"></textarea>
        <label>Which job Are you looking for?:</label>
        <textarea name="statement" class="form-control ckeditor"></textarea>
      </div>

    </div>
    <div class="col-md-12">
      <button type="submit" class="btn btn-danger pull-right">Save</button>   
    </div>
  </form>
  @endif
</div>