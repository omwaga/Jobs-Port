  <p>{!! str_limit(strip_tags($train->description), 200) !!}
        @if (strlen(strip_tags($train->description)) > 200)
        <br>
        ... <a href="#" class="btn btn-default btn-sm">Book Training</a>
        @else
        <br>
        <a href="#" class="btn btn-default btn-sm float-right bg-dark text-white" style="border-radius: 0%;">Book Training</a>
        @endif</p>