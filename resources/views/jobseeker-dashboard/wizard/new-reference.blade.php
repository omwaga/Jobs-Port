
<!--New Referee Modal -->
<div class="modal fade" id="newreferee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Reference Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('references.store')}}">
          @csrf
          <div class="row">
            <div class="col-lg-6">
              <label>Name:</label>
              <input type="text" class="form-control" name="name" required autofocus placeholder="Full Name" style="border-radius:0px;">
            </div>
            <div class="col-lg-6">
             <label>Title:</label>
             <input type="text" name="position" class="form-control" required autofocus placeholder="Title" style="border-radius:0px;">
           </div>
         </div>
         <br>
         <div class="row">
          <div class="col-lg-6">
            <label>Phone Number:</label>
            <input type="tel" class="form-control" name="phone" required autofocus placeholder="Phone Number"style="border-radius:0px;">
          </div>
          <div class="col-lg-6">
            <label>Email address:</label>
            <input type="email" name="email" class="form-control" required autofocus placeholder="Email Address"style="border-radius:0px;">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-lg-6">
            <label>Organization:</label>
            <input type="text" name="organization" class="form-control" required autofocus placeholder=" Organization" style="border-radius:0px;">
          </div>
        </div>
        <br>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Save & Continue</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div> 