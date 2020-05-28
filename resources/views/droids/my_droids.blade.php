@extends('layouts.app')

@section('content')

{{-- <a href="{{ route('droids.index') }}" class="btn btn-info">View all droids</a> --}}
<h1>My Droids</h1>

<form action="{{ route('admin.users.update', [$user ?? '']) }}" method="POST" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <ul>
        @foreach($my_droids as $my_droid)
        <li>{{ $my_droid->class }}</li>
        @endforeach
    </ul>
</form>
@endsection

