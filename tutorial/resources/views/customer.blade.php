@extends('layout')

@section('content')
<body>
	<h1>Customer page</h1>

	<div class="container">
		<form>
		  <div class="form-group">
		    <label for="name">Name</label>
		    <input type="text" class="form-control" id="name" style="width: 25%">
		  </div>

		  <button type="submit" class="btn btn-primary">Submit</button>
	 	</form>

	<ul>
		@foreach($customers as $customer)
			<li>{{ $customer }}</li>
		@endforeach
	</ul>

	</div>
	
</body>

@endsection