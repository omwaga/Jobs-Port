
<!--Edit personal information Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Your Personal Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/personalinfo/{{$personalinfo->id}}">
         @csrf
         @method('PATCH')
         <div class="row">
          <div class="col-md-4">
            <label>Name:</label>
            <input type="text" name="name" class="form-control"style="border-radius:0px;"required autofocus value="{{$personalinfo->name}}">
          </div>
          <div class="col-md-4">
            <label>Email Address:</label>
            <input type="email" name="email" class="form-control"style="border-radius:0px;"required autofocus value="{{$personalinfo->email}}">
          </div>
          <div class="col-md-4">
            <label>Id/Passport Number:</label>
            <input type="number" name="id_pass" class="form-control"style="border-radius:0px;"required autofocus value="{{$personalinfo->id_pass}}">
          </div>
          <div class="col-md-4">
            <label>Phone Number:</label>
            <input type="text" name="phone" class="form-control"style="border-radius:0px;"required autofocus value="{{$personalinfo->phone}}">
          </div>
          <div class="col-md-4">
            <label>Gender:</label>
            <select name="gender" class="form-control" style="border-radius:0px;"required autofocus>
             <option>{{$personalinfo->gender}}</option>
             <option>Male</option>
             <option>Female</option>
           </select>
         </div>

         <div class="col-md-4">
          <label>Online Links:<small>For example: linkedin, github</small></label>
          <input type="text" name="links" class="form-control"style="border-radius:0px;" value="{{$personalinfo->links}}">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">
          <label>Religion:</label>
          <select name="religion" class="form-control" style="border-radius:0px;" required autofocus>
           <option>{{$personalinfo->religion}}</option>
           <option>Christianity</option>
           <option>Islam</option>
           <option>Hinduism</option>
           <option>Buddhism</option>
           <option>Prefer not to say</option>
         </select>
       </div>
       <div class="col-md-4">
        <label>Maritial Status:</label>
        <select name="marital_status" class="form-control" style="border-radius:0px;"required autofocus >
          <option>{{$personalinfo->marital_status}}</option>
          <option>Single</option>
          <option>Married</option>
          <option>Divorced</option>
          <option>Widowed</option>
          <option>Separated</option>
        </select>
      </div>

      <div class="col-md-3">
        <label>Date Of Birth:</label>
        <div class="input-group date">
          <input type="date" value="{{$personalinfo->dob}}" name="dob" class="form-control">
          <div class="input-group-addon">
            <span class="glyphicon glyphicon-th"></span>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
     <div class="col-md-4">
      <label>Nationality:</label>     
      <select name="nationality" class="form-control">
       <option value="">Select Country</option>
       @foreach ($countries as $key => $value)
       <option value="{{ $key }}">{{ $value }}</option>
       @endforeach
     </select>
   </div>
   <div class="col-md-4">
    <label>City:</label>
    <select name="city" class="form-control search-slt">
     <option>State/Region</option>
   </select> 
 </div>
 <div class="col-md-4">
  <label>Postal Address:</label>
  <input type="text" name="postal_address" class="form-control"style="border-radius:0px;" required autofocus value="{{$personalinfo->postal_address}}">
</div>
</div><br>
<div class="row">
  <div class="col-md-4">
    <label>Postal Code:</label>
    <input type="text" name="postal_code" class="form-control"style="border-radius:0px;" required autofocus value="{{$personalinfo->postal_code}}">
  </div>

</div><br>

<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-success">Save & Continue</button>

</div>
</form>
</div>
</div>
</div>
</div>