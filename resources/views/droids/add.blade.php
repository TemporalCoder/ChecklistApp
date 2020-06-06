@extends('layouts.app')
@section('content')

<h3>Add Droid</h3>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
</div>
<img src="images/{{ Session::get('image') }}">
@endif

@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

    <form action="{{ route('droids.index.store') }}" method="POST" encrypt="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="class">Droid Class</label>
                    <input type="text" class="form-control" name="class">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group d-flex flex-column">
                    <label for="image">Droid Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-success">Add Product</button>
            </div>
        </div>
    </form>

@endsection
