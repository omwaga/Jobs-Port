<!-- Large Modal -->
            <div  id="modal-large" class="modal fade" role="dialog">
              <div class="modal-dialog modal-lg">
            
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">New Category</h4>
                  </div>
                  <div class="modal-body">
                      <form class="form-horizontal" method="POST" action="{{ route('cvupload.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">Name:</label>
                            <div class="col-sm-9">
                              <input class="form-control" value="{{old('name')}}" name="name" id="inputEmail3" placeholder="Name" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="val-suggestions">Description: <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <textarea class="form-control ckeditor" id="val-suggestions" name="description" rows="7" placeholder="Template Description">{{old('description')}}</textarea>
                            </div>
                          </div>
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">Resume Template:</label>
                            <div class="col-sm-9">
                              <input class="form-control" value="{{old('resume')}}" id="resume" type="file" name="resume" autofocus>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-offset-3 col-sm-9">
                              <button type="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </div>
                     </form>
                  </div>
                  <div class="modal-footer">
                  </div>
                </div>
            
              </div>
            </div>
             <!-- END Large Modal -->