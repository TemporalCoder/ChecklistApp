@extends('layouts.app')

@section('content')
    <div class="heading text-center">
        <h1>Droids List</h1>
        <p class="lead">Which droid do you want to build?</p>
        <span>Select from the list below!</span>
    </div>

    <form action="{{ route('droid.user.store') }}" method="POST">
        @csrf
        <div class="row mt-5">
            @foreach($droids as $droid)
            <div class="col-md-3 mb-5">
                <div class="droids">
                    <div class="head">
                        <h1 class="text-center">{{ $droid->class }}</h1>
                    </div>
                    <div class="body">
                        <p class="text-center">{{ $droid->description }}</p>
                        <button type="submit" class="btn btn-block btn-success" value="{{ $droid->id }}" name="droidIdentification">Build This Droid</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </form>
    <hr>
    <div class="col-md-12">
    @can('add-droids')
        <div class="droid text-center">
            <a href="{{ route('droids.index.create') }}" class="btn btn-primary">Add Droid</a>
        </div>
    </div>
    @endcan
@endsection
