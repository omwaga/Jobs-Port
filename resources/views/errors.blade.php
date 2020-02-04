@if ($errors->any())
  <div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li><strong>Oh Snap! </strong>{{ $error }}</li>
        @endforeach
        </ul>
  </div>
@endif
