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
                        @if($droid->description == "Full Droid")
                        <p class="text-center">{{ $droid->description }}</p>
                        <button type="submit" class="btn btn-block btn-success" value="{{ $droid->id }}" name="droidIdentification">Build This Droid</button>
                        @elseif($droid->description == "Dome Only")
                        <p class="text-center">{{ $droid->description }}</p>
                        <button type="submit" class="btn btn-block btn-info" value="{{ $droid->id }}" name="droidIdentification">Build This Droid</button>
                        @elseif($droid->description == "WIP")
                        <p class="text-center">{{ $droid->description }}</p>
                        <button type="submit" class="btn btn-block btn-dark" value="{{ $droid->id }}" name="droidIdentification">Build This Droid</button>
                        @elseif($droid->description == 'Your custom droid')
                        <p class="text-center">{{ $droid->description }}</p>
                        <a href="{{ route('droid.user.create') }}"class="btn btn-block btn-dark" value="{{ $droid->id }}" name="droidIdentification">Build a Custom Droid</a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </form>
@endsection
