@extends('layouts.app')

@section('content')
<h1 class="text-center">My Droids - Dashboard</h1>

<div class="row">
    @foreach($my_droids as $my_droid)
        <div class="col-md-3 mb-5">
            <div class="droid-list">
                <img src="{{ $my_droid->image }}" alt="{{ $my_droid->image }}" class="img-fluid" style="width:600px; height:400px;">

                <a href="{{ route('droid.user.edit', $my_droid->id) }}" class="btn btn-block btn-info mb-2">
                    {{ $my_droid->class }}
                </a>
                <form action="{{ route('droid.user.destroy', $my_droid->id) }}" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}

                    <button type="submit" class="btn btn-block btn-danger">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
</div>

@endsection
