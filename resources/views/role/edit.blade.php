@extends('layouts.app')

@section('content')
<h3>Edit Role Information</h3>
<div class="row">
	<form method="POST" action="/role/{{$role->id}}">
		{{ method_field('PUT') }}
		{{ csrf_field() }}
		<div class="col-md-3 col-md-offset-4">
		<div class="form-group">
			<label>Enter Role Name</label>
			<input type="text" name="role" class="form-control" value="{{$role->role}}">
		</div>

		<div class="form-group">
			<input type="submit" class="btn btn-success">
		</div>
	</div>
	</form>
</div>
@endsection