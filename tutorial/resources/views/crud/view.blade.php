@extends('crud.parent')

@section('main')

<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('crud.index') }}" class="btn btn-primary">BACK</a>
	</div>
	<br/>
	<h3>Id - {{$data->id}}</h3>
	<h3>First Name - {{$data->first_name}}</h3>
	<h3>Last Name - {{$data->last_name}}</h3>
</div>
@endsection