@extends('layouts.app')
@section('content')

<h3>Add Droid</h3>
@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('droids.index.create') }}" method="POST" encrypt="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="class">Droid Class</label>
                    <input type="text" name="class" class="form-control">
                    <div>{{ $errors->first('class') }}</div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group d-flex flex-column">
                    <label for="image">Droid Image</label>
                    <input type="file" name="image" class="form-control">
                    <div>{{ $errors->first('image') }}</div>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-success">Add Product</button>
            </div>
        </div>
    </form>

@endsection
