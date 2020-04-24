@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">All Droids</div>

            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Class</th>
                        <th scope="col">Image</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($droids as $droid)
                        <tr>
                            <th scope="row">{{ $droid->id }}</th>
                            <td>{{ $droid->class }}</td>
                            <td><a href="storage {{ $droid->path }}"></a></td>
                          </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
        </div>

        <div class="card">
            <div class="card-header">My Droids</div>

            <div class="card-body">
                @foreach($droids as $droid)
                <li>{{ $droid->class  }}</li>
                <li><img src="{{ $droid->path }}" class="img-fluid"></li>
                @endforeach
            </div>
        </div>

    </div>
</div>
</div>

@endsection
