@extends("layouts.jobseeker.jobseeker")
@section("content")
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    
         <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i>Upload your cv</h3>
        <div class="row mt">
          <div class="white-panel mt">
            <div class="panel-body">
              <form action="assets/dropzone/upload.php" class="dropzone" id="my-awesome-dropzone"></form>
            </div>
          </div>
        </div>
        
        <div class="content-panel">
              <div class="panel-body">
                <h4>Upload Notes</h4>
                <ul>
                  <li>The maximum file size for uploads is <strong>5 MB</strong> (default file size is unlimited).</li>
                  
                </ul>
              </div>
            </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!--main content end-->
    @endsection