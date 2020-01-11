@extends('crud.parent')

@section('main')

<div align="right">
	<a href="{{ route('crud.index')}}" class="btn btn-default">BACK</a>
</div>

<div class="jumbotron">
<form method="post" action="{{ route('crud.store') }}">
	
	@csrf
	<div class="form-group">
		<label class="col-md-4 text-right">Enter First Name</label>
		<div class="col-md-8">
			<input type="text" name="first_name" class="form-control input-lg">
		</div>
		<div style="color: red">{{$errors->first('first_name')}}</div>
	</div>
	<br/>
	<br/>
	<div class="form-group">
		<label class="col-md-4 text-right">Enter Last Name</label>
		<div class="col-md-8">
			<input type="text" name="last_name" class="form-control input-lg">
		</div>
		<div style="color: red">{{$errors->first('last_name')}}</div>
	</div>
	<br/>
	<br/>
	<div class="form-group">
		<label class="col-md-4 text-right">Enter Email</label>
		<div class="col-md-8">
			<input type="email" name="email" class="form-control input-lg">
		</div>
		<div style="color: red">{{$errors->first('email')}}</div>
	</div>
	<br/>
	<br/>
	<div class="form-group text-center">
		<input type="submit" name="add" class="btn btn-primary input-lg" value="Add">
	</div>

</form>
</div>
@endsection