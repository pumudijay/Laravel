@extends('layout')

@section('content')
<body>
	<h1>Customer page</h1>

	<div class="container">
		<form action="customer" method="post">
		@csrf
		  <label>Name</label>
		  <input type="text" name="name" >
		  <button type="submit" class="btn btn-primary">Submit</button>

		  
	 	</form>

	<ul>
		@foreach($customers as $customer)
			<li>{{ $customer->name }}</li>
		@endforeach
	</ul>

	</div>
	
</body>

@endsection