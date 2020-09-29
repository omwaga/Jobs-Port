
<!--Edit personal information Modal -->
<div class="modal fade" id="details-{{$pros_details->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Basic Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="#">
         @csrf
         @method('PATCH')
         <div class="row">
          <div class="col-md-6">
            <label>Full Names:</label>
            <input type="text" value="{{$pros_details->full_name}}" class="form-control" name="full_name" required autofocus>
          </div>
          <div class="col-md-6">
            <label>Email Address:</label>
            <input type="text" value="{{$pros_details->email}}" class="form-control" name="email" required autofocus>
          </div>
          <div class="col-md-6">
            <label>Country:</label>
            <select name="country" class="form-control">
              <option value="{{$pros_details->procountry->id}}">{{$pros_details->procountry->name ?? 'Select Country'}}</option>
              @foreach($countries as $country)
              <option value="{{$country->id}}">{{$country->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-md-6">
            <label>Phone Number:</label>
            <input type="text" value="{{$pros_details->phone_number}}" class="form-control" name="phone_number" required autofocus>
          </div>
          <div class="col-md-6">
            <label>City:</label>
            <select name="city" class="form-control">
              <option value="{{$pros_details->procity->id}}">{{$pros_details->procity->name ?? 'Select City'}}</option>
              @foreach($cities as $city)
              <option value="{{$city->id}}">{{$city->name}}</option>
              @endforeach
            </select>
          </div>

          <div class="col-md-6">
            <label>State:</label>
            <select name="state" class="form-control">
              <option value="{{$pros_details->prostate->id}}">{{$pros_details->prostate->name ?? 'Select State'}}</option>
              @foreach($states as $state)
              <option value="{{$state->id}}">{{$state->name}}</option>
              @endforeach
            </select>
          </div>

          <div class="col-md-6">
            <label>ZIP:</label>
            <input type="text" value="{{$pros_details->zip_code}}" class="form-control" name="zip_code" required="">
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Update</button>

        </div>
      </form>
    </div>
  </div>
</div>
</div>