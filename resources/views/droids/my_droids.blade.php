@extends('layouts.app')

@section('content')

{{-- <a href="{{ route('droids.index') }}" class="btn btn-info">View all droids</a> --}}
<h1>My Droids</h1>

<form action="{{ route('admin.users.update', [$user ?? '']) }}" method="POST" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <ul>
        @forelse($droids as $droid)
            <li>
                <label>
                    <input type="checkbox" name="droids[]"
                           value="{{ $droid->class }}" {{ $user ?? ''->hasDroid($droid) ? 'checked' : '' }}>
                    {{ $droid->class }}
                </label>
            </li>
        @empty
            <li>no droids</li>
        @endforelse
    </ul>

    <p>
        <button type="submit">Save</button>
    </p>
</form>
@endsection
