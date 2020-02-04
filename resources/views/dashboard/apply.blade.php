@extends("layouts.app")
@section("content")

    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section class="section section-top section-full">
          <div class="container"><br><br><br>
          <h5 class="text-primary">You are applying for:{{$job->jobtitle}}</h5>
          <small class="text-danger"><i class="text-info fa fa-bell text-info"></i>Tip: Complete your profile before submitting your job application.</small>
     
<div class="panel-body">
        @include('dashboard.preview')
<div class="clearfix"></div>
</div>

        <!-- /row -->
      </section>
    </section>
      <script>
$(document).ready(function(){
	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    localStorage.setItem('activeTab', $(e.target).attr('href'));
});

var activeTab = localStorage.getItem('activeTab');
if(activeTab){
    $('.nav-tabs a[href="' + activeTab + '"]').tab('show');
}
});
</script>
    <!--main content end-->
    @endsection