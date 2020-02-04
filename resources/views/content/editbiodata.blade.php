<div class="modal fade" id="biod-{{$biod->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        {!!Form::open(['action'=>['DashboardController@editbiodata',$biod->id],'method'=>'POST','class'=>'needs-validation'])!!}
                {{csrf_field()}}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit your biodata</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                      <div class="row">
    <div class="col">
          <label>Id/Passport No.</label>
    <input type="number" name="idpass" value="<?php echo $biod->idpass ?>" class="form-control"style="border-radius:0px;"required autofocus >
    </div>
    <div class="col">
        <label>Telephone</label>
<input type="text" name="tel" class="form-control"style="border-radius:0px;"required autofocus value="<?php echo $biod->telephone ?>" >
    </div>
  </div>
  <br>
<div class="row">
    <div class="col">
          <label>Gender/Sex</label>
          <select name="gender" class="form-control" style="border-radius:0px;"required autofocus value="<?php echo $biod->gender ?>">
               <option>--select gender--</option>
              <option>Male</option>
               <option>Female</option>
          </select>
    </div>
    <div class="col">
        <label>Religion</label>
 <select name="religion" class="form-control" style="border-radius:0px;" required autofocus value="<?php echo $biod->religion ?>">
               <option>--select one--</option>
              <option>Christianity</option>
               <option>Islam</option>
               <option>Hinduism</option>
               <option>Buddhism</option>
               <option>Prefer not to say</option>
          </select>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
          <label>Maritial Status</label>
          <select name="mstatus" class="form-control" style="border-radius:0px;"required autofocus value="<?php echo $biod->mstatus ?>">
               <option>--select--</option>
              <option>Single</option>
               <option>Married</option>
               <option>Divorced</option>
                <option>Widowed</option>
             <option>Separated</option>
          </select>
    </div>
    <div class="col">
        <label>D.O.B</label>
<input type="date" name="dob" class="form-control"style="border-radius:0px;" required autofocus value="<?php echo $biod->dob ?>" >
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
          <label>Ethnicy</label>
   <input type="text" name="ethnicity" class="form-control"style="border-radius:0px;" required autofocus value="<?php echo $biod->ethnicity ?>" >
    </div>
    <div class="col">
        <label>Country of residence</label>
<input type="text" name="country" class="form-control"style="border-radius:0px;" required autofocus value="<?php echo $biod->country ?>">
    </div>
  </div>
  <br>
    <div class="row">
    <div class="col">
          <label>Nationality</label>
   <input type="text" name="nationality" class="form-control"style="border-radius:0px;" required autofocus value="<?php echo $biod->nationality ?>">
    </div>
    <div class="col">
        <label>Physical address</label>
<input type="text" name="paddress" class="form-control"style="border-radius:0px;" required autofocus value="<?php echo $biod->paddress ?>" >
    </div>
  </div>
      </div>
      <div class="modal-footer">
          {!!Form::hidden('_method','PUT')!!}
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>