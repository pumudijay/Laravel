@extends('layout')

@section('title','Contact page')


@section('content')
<body>

	<div class="container">

		<div class="jumbotron">
			
			<div>
				<h3>Contact Form</h3>
			</div>
			<form action="contact" method="post">
				@csrf
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" class="form-control">
					<div style="color: red">{{ $errors->first('name')}}</div>
				</div>
				<div class="form-group">
					<label for="emai">Email</label>
					<input type="email" name="email" class="form-control">
					<div style="color: red">{{ $errors->first('name')}}</div>
				</div>
				<div class="form-group">
					<label for="message">Message</label>
					<textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
					<div style="color: red">{{ $errors->first('name')}}</div>
				</div>
				<button type="submit" class="btn btn-primary">Send Message</button>
			</form>
		</div>
		
	</div>
</body>
@endsection