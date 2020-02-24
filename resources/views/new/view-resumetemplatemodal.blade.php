<div class="modal fade" id="resume-{{$sample->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-md-6">
                    @guest
              <button class="btn text-white pull-right" style="background-color:#0B0B3B;" data-toggle="modal" data-title="" data-caption="" data-target="#login-overlay" data-dismiss="modal">Customize</button> 
              @else
              <a href="{{route('customizeresume')}}" class="btn text-white pull-right" style="background-color:#0B0B3B;">Customize</a> 
              @endguest 
                </div>
                <div class="col-md-6">
              <button class="btn text-white pull-left" style="background-color:#0B0B3B;">{{$sample->name}}</button>  
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="image-gallery-title"></h4>
                </div>
            </div>
            <div class="modal-body">
                        <img src="{{ asset('storage/'.$sample->resume)}}" alt="" style="width: 100%">
            </div>
            <div class="modal-footer">

                <div class="col-md-2">
                    <button type="button" class="btn btn-primary" id="show-previous-image">Previous</button>
                </div>

                <div class="col-md-8 text-justify" id="image-gallery-caption">
                    This text will be overwritten by jQuery
                </div>

                <div class="col-md-2">
                    <button type="button" id="show-next-image" class="btn btn-default">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>