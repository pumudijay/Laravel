@extends('layout')

@section('title','Customer page')


@section('content')
<body>
	<h1>Customer page</h1>

	<div class="container">
		<form action="customer" method="post">
		@csrf
		<div class="form-group">
			<label for="name">Name</label>
			  <input type="text" name="name" value="{{old('name')}}" class="form-control">
			  <div style="color: red">{{$errors->first('name')}}</div>
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			  <input type="email" name="email" value="{{old('email')}}" class="form-control">
			  <div style="color: red">{{$errors->first('email')}}</div>
		</div>
		  
		  <button type="submit" class="btn btn-primary">Submit</button>

		  
	 	</form>

	<table>
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
			</tr>
		</thead>

		<tbody>
			@foreach($customers as $customer)
				<tr>
					<td>{{ $customer->id }}</td>
					<td>{{ $customer->name }}</td>
					<td>{{ $customer->email }}</td>
				</tr>

			@endforeach
		</tbody>
		
	</table>

	</div>
	
</body>

@endsection