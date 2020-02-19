 <div class="modal fade" id="login-overlay" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel"></h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-md-6">
                          <form id="loginForm" method="POST" action="{{ route('login') }}" novalidate="novalidate">
                                @csrf
                      <div class="well">
                              <div class="form-group">
                                  <label for="username" class="control-label">Username</label>
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Password</label>
                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Login</button>
                              <a href="#" class="btn btn-default btn-block">Help to login</a>
                          </form>
                      </div>
                  <div class="col-md-6">
                      <p class="lead">Register now for <span class="text-success">FREE</span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> Quick & easy</li>
                          <li><span class="fa fa-check text-success"></span> Job-winning content</li>
                          <li><span class="fa fa-check text-success"></span> Demand attention</li>
                          <li><span class="fa fa-check text-success"></span> Stay organized</li>
                          <li><span class="fa fa-check text-success"></span> Unlimited designs<small>(only for premium)</small></li>
                          <li><a href="#"><u>Read more</u></a></li>
                      </ul>
                      <p><a href="/register" class="btn btn-block  text-white" style="background-color:#070A53;">Yes please, register now!</a></p>
                  </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>