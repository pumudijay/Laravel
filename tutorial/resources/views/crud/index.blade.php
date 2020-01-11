@extends('crud.parent')

@section('main')

<div align="right">
	<a href="{{ route('crud.create')}}" class="btn btn-success btn-sm">ADD</a>
</div>

@if($message=Session::get('success'))
<div class="alert alert-success">
	<p>{{$message}}</p>
</div>
@endif

<table class="table table-bordered table-striped">
	<tr>
		<th width="5%">Id</th>
		<th width="15%">First Name</th>
		<th width="15%">Last Name</th>
		<th width="30%">Email</th>
		<th width="35%">Action</th>
	</tr>

	@foreach($data as $row)
	<tr>
		<td>{{$row->id}}</td>
		<td>{{$row->first_name}}</td>
		<td>{{$row->last_name}}</td>
		<td>{{$row->email}}</td>
		<td >
			<div class="row">
			<a href="{{route('crud.show',$row->id)}}" class="btn btn-primary">Show</a>
			<a href="{{route('crud.edit',$row->id)}}" class="btn btn-warning">Edit</a>
			<form action="{{route('crud.destroy',$row->id)}}" method="post">
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-danger">Delete</button>
			</form>
			</div>
		</td>
	</tr>
	@endforeach
</table>

{!! $data->links()!!}
@endsection