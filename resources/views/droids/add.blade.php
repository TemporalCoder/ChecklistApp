@extends('layouts.app')

@section('content')
<div class="container">
                <h2>Add New Droid</h2>

<form method="POST" action="/droids">

    <div class="form-group">
        <textarea name="class" class="form-control"></textarea>
    </div>


    <div class="form-group">
        <button type="submit" class="btn btn-primary">Add Droid</button>
    </div>
{{ csrf_field() }}
</form>


</div>
@endsection
