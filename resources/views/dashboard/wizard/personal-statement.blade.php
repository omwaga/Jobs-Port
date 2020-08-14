<div class="tab-pane" id="account">
  @if($personalstatements)
  <div class="col-lg-offset-1 col-lg-10">
    <section class="panel panel-default">
      <div class="panel-body">
        <dl class="dl-horizontal">
          <dt>Career Objective:</dt>
          <dd>{!!$personalstatements->statement!!}</dd>

          <p class="pull-right"><button class="btn btn-danger text-white btn-sm"  data-toggle="modal" data-target="#personal"><i class="fa fa-edit"></i> Edit </button></p>

          @include('dashboard.wizard.edit-personal-statements')
        </dl>
      </div>
    </section>
  </div>
  @else
  <form method="POST" action="/personalstatements">
    @csrf
    <div class="row">

      <div class="col-sm-10 col-sm-offset-1">   
        <div class="form-group">
          <label>Personal Statement:</label>
          <textarea name="statement" class="form-control ckeditor"></textarea>
        </div> 
        <div class="form-group">
          <label>Which job Are you looking for?:</label>
          <input type="text" class="form-control" name="">
        </div>
        <div class="form-group">
          <label>Choose what categories you are interested about. Choose at least one category.</label>
          <p>Category1 Category 2 Category 3</p>
        </div>
      </div>

    </div><br>
    <div class="col-lg-offset-1 col-lg-10">
      <button type="submit" class="btn btn-danger btn-sm pull-right">Save</button>   
    </div>
  </form>
  @endif
</div>