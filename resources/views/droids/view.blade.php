@extends('layouts.app')

@section('content')
<h1>View Droids</h1>
<form action="{{ route('droids.index.store') }}" method="POST">
    @csrf
      <table class="table text-center">
        <thead class="thead-light">
          <tr>
            <th scope="col">Class</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach($droids as $droid)
            <tr>
                <td>{{ $droid->class }}</td>
                <td><button type="submit" class="btn btn-success" value="{{ $droid->id }}" name="droidIdentification">Build This Droid</button></td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </form>
@endsection
