@extends("layouts.jobseeker.jobseeker")
@section("content")
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-8">
              <div class="col-lg-12">
            <div class="row content-panel">
              <div class="col-md-4 profile-text mt mb centered">
                <div class="right-divider hidden-sm hidden-xs">
                  <h6 style="color:black;">Location:{{$job->salary}}</h6>
                  <h6 style="color:black;">Job Type:{{$job->jobtype}}</h6>
                  <h6 style="color:black;">Salary:{{$job->salary}}</h6>
                </div>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-8 profile-text">
                <h4>{{$job->jobtitle}}</h4>
                <h6 style="color:#1a1b3b;">Posted By:{{$job->cprofile->cname}} </h6>
              </div>
            </div>
                <p>{!!$job->description!!}</p>
                <br>
                <p><button class="btn btn-danger pull-right"><i class="fa fa-eye"></i>Apply</button></p>
            <!-- /row -->
          </div>
              
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12">
                  @include('dashboard.rightnav')
            </div>
              </div>
      </section>
    </section>
    <!--main content end-->
    @endsection