@extends('layouts.app')

@section('content')
	<div class="container">
	<h1>Edit the Droid</h1>

<form method="POST" action="/droids/{{ $droids->id }}">

	<div class="form-group">
		<textarea name="class" class="form-control">{{$droids->class }}</textarea>
	</div>


	<div class="form-group">
		<button type="submit" name="update" class="btn btn-primary">Update task</button>
	</div>
{{ csrf_field() }}
</form>



</div>

@stop
