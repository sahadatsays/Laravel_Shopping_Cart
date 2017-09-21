@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-md-4 col-md-offset-4">
	<h1>Sign In</h1>
	@if(count($errors) > 0)
	<div class="alert alert-danger">
		@foreach($errors->all() as $error)
		<p>{{ $error }}</p>
		@endforeach
	</div>
	@endif
	<hr>
		<form action="" method="post">
			<div class="form-group">
			<label for="email">Email Address</label>
				<input type="text" name="email" id="email" class="form-control">
			</div>
			<div class="form-group">
			<label for="password">Password</label>
				<input type="password" id="password" name="password" class="form-control">
			</div>
			<div class="form-group">
				<button class="btn btn-primary">Sign In</button>
				{{ csrf_field() }}
			</div>
		</form>
	</div>
</div>

@endsection