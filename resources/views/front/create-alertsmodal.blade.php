<div class="modal fade" id="alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="btn text-white pull-left" style="background-color:#0B0B3B;">Create Job Alerts</h5> 
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="image-gallery-title"></h4>
            </div>
                        
<form method="POST" action="{{route('alerts.store')}}">
  @csrf
            <div class="modal-body">
    <div class="form-group">
    <label for="name">Full Name</label>
    <input type="text" name="full_name" class="form-control" id="name" placeholder="Enter Full Name">
  </div>
  <div class="form-group">
    <label for="name">Phone Number</label>
    <input type="text" name="phone_number" class="form-control" id="name" placeholder="Enter Full Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email_address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" style="background-color:#0B0B3B;">Create Alerts</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
</form>
        </div>
    </div>
</div>