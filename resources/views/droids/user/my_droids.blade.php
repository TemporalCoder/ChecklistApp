@extends('layouts.app')

@section('content')

{{-- <a href="{{ route('droids.index') }}" class="btn btn-info">View all droids</a> --}}
<h1>My Droids</h1>

<form action="{{ route('droids.index.update', [$user ?? '']) }}" method="POST" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            @foreach($my_droids as $my_droid)
            <div class="col-md-4 mb-5">
                <div class="droid-list">
                    <img src="{{ $my_droid->path }}" alt="{{ $my_droid->class }}" class="img-fluid">
                    <button href="#" class="btn btn-block btn-info mb-2">
                        {{ $my_droid->class }}
                    </button>
                    <form action="{{ route('droids.index.destroy', $my_droid->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-block btn-danger">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
</form>
@endsection

