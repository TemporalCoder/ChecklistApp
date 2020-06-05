@extends('layouts.app')

@section('content')
<h1 class="text-center">My Droids - Dashboard</h1>

<div class="row">
    @foreach($my_droids as $my_droid)
        <div class="col-md-3 mb-5">
            <div class="droid-list">
                <img src="{{ $my_droid->path }}" alt="{{ $my_droid->class }}" class="img-fluid">

                <a href="{{ route('droid.user.edit', $my_droid->id) }}" class="btn btn-block btn-info mb-2">
                    {{ $my_droid->class }}
                </a>
                <h1>ID: {{ $my_droid->id }}</h1>

                <form action="{{ route('droid.user.destroy', $my_droid->id) }}" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    {{-- TO MAKE WORK --}}
                    <button type="submit" class="btn btn-block btn-danger">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
</div>

@endsection
