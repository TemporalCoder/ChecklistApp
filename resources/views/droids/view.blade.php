@extends('layouts.app')

@section('content')
<h1>Add New Droid</h1>
@can('add-droids')
    <form action="view" method="POST" class="pb-5">
        <div class="input-group">
            <input type="text" name="class">
        </div>
        <button type="submit" class="btn btn-success">Add Droid</button>
        @csrf
    </form>
@endcan
<h1>View Droids</h1>
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
                    <td><button name="buildDroid" class="btn btn-success" value="{{ $droid->id }}">{{ $droid->class }}</button></td>

                    <td><button type="submit" class="btn btn-success">Build This Droid</button></td>
                </tr>
            @endforeach
        </tbody>
      </table>
@endsection
