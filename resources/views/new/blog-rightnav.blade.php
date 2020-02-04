
             <!--<h4 class="text-center" style="font-family: 'Source Sans Pro', sans-serif;">Advanced filter</h4>-->
             <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" style="color:#0B0B3B;" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <b><i class="fa fa-bars"></i>  Blog Categories</b>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
          <ul>
              @foreach($categories as $category)
              @if($category->jobs->count() > 0)
              <li class="d-flex justify-content-between align-items-center">
                  <a href="{{url('job-category',[$category->jobcategories])}}" class="nav-link" style="color:#0B0B3B;">
                      <i class="fas fa-angle-right"></i>
                     {{$category->jobcategories}}
                  </a>
                  <span class="badge badge-primary badge-pill">
                      {{$category->jobs->count()}}
                  </span>
              </li>
              @endif
              @endforeach
          </ul>
      </div>
    </div>
  </div>
</div>
              