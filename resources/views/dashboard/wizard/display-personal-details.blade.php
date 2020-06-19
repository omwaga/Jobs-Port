
<label class="switch pull-right" style="padding-right: 20px">Display Profile
  <input type="checkbox" name=""><span class="slider"></span>
</label>
<center>
  <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="{{asset('assets/images/avatar.png')}}" name="aboutme" width="140" height="140" class="img-circle"></a>
  <h3>{{$personalinfo->name  ?? ''}}</h3>
  <em>{{$personalinfo->email ?? ''}}</em>
  <em>{{$personalinfo->phone ?? ''}}</em>
</center>

<div class="col-md-6" align="center">
  <label><strong>ID/Passport Number:</strong> {{$personalinfo->id_pass ?? ''}}</label><br>
  <label><strong>Date of Birth:</strong> {{$personalinfo->dob ?? ''}}</label><br>
  <label><strong>Marital Status:</strong> {{$personalinfo->marital_status ?? ''}}</label><br>
  <label><strong>Religion:</strong> {{$personalinfo->religion ?? ''}}</label><br>
  <label><strong>Gender:</strong> {{$personalinfo->gender ?? ''}}</label><br>
</div>
<!-- /col-md-4 -->
<div class="col-md-6" align="center">
  <label><strong>Nationality:</strong> {{$personalinfo->nationality ?? ''}}</label><br>
  <label><strong>City:</strong> {{$personalinfo->city ?? ''}}</label><br>
  <label><strong>Postal Address:</strong> {{$personalinfo->postal_address ?? ''}}</label><br>
  <label><strong>Postal Code:</strong> {{$personalinfo->postal_code ?? ''}}</label><br>
  <p class="pull-right"><button class="btn btn-danger text-white btn-sm"  data-toggle="modal" data-target="#exampleModal"><i class="fa fa-edit"></i> Edit </button></p> 
</div>