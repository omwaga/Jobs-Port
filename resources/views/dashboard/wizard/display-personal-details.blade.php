  <div class="row">
    <div class="col-lg-offset-1 col-lg-10">
      <section class="panel panel-default">
        <div class="panel-body">
          <article class="panel-body">
            <figure class="text-center">
              <img src="{{asset('assets/images/avatar.png')}}" class="img-thumbnail img-circle img-responsive" alt="me" width="140" height="140">
              <figcaption>
                <h3>{{$personalinfo->name  ?? ''}}</h3> {{$personalinfo->postal_code ?? ''}}. {{$personalinfo->postal_address ?? ''}}
                <br> Tel. {{$personalinfo->phone ?? ''}} E-mail: {{$personalinfo->email ?? ''}}
              </figcaption>
            </figure>
          </article>
          <br>
          <article>
            <h4>
              <strong>Personal Details</strong>
            </h4>
            <hr>
            <dl class="dl-horizontal">
              <dt>Date of Birth:</dt>
              <dd>{{$personalinfo->dob ?? ''}}</dd>
              <dt>Gender:</dt>
              <dd>{{$personalinfo->gender ?? ''}}</dd>
              <dt>Marital Status:</dt>
              <dd>{{$personalinfo->marital_status ?? ''}}</dd>
              <dt>ID/Passport Number:</dt>
              <dd>{{$personalinfo->id_pass ?? ''}}</dd>
              <dt>Religion:</dt>
              <dd>{{$personalinfo->religion ?? ''}}</dd>
              <dt>Nationality $ City:</dt>
              <dd>{{$personalinfo->nationality ?? ''}}, {{$personalinfo->city ?? ''}}</dd>
            </dl>
          </article>
        </div>
      </section>
    </div>
  </div>