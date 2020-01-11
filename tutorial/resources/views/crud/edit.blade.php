@extends('crud.parent')

@section('main')

<div align="right">
	<a href="{{route('crud.index')}}" class="btn btn-primary">BACK</a>
</div>
<br/>

<div class="jumbotron">
<form method="post" action="{{route('crud.update',$data->id)}}">
	@csrf
	@method('PATCH')
	<div class="form-group">
		<label class="col-md-4 text-right">Enter First Name</label>
		<div class="col-md-8">
			<input type="text" name="first_name" value="{{$data->first_name}}" class="form-control input-lg">
		</div>
	</div>
	<br/>
	<br/>
	<div class="form-group">
		<label class="col-md-4 text-right">Enter Last Name</label>
		<div class="col-md-8">
			<input type="text" name="last_name" value="{{$data->last_name}}" class="form-control input-lg">
		</div>
	</div>
	<br/>
	<br/>
	<div class="form-group">
		<label class="col-md-4 text-right">Enter Email</label>
		<div class="col-md-8">
			<input type="email" name="email" value="{{$data->email}}" class="form-control input-lg">
		</div>
	</div>
	<br/>
	<br/>
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit">
	</div>
</form>
</div>
@endsection