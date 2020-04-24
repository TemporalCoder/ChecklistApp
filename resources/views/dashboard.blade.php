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
                            <td>{{ $droid->path }}</td>
                            {{-- <td>{{ implode(' , ' ,$user->roles()->get()->pluck('name')->toArray() ) }}</td>
                            <td>
                                @can('edit-users')
                                    <a href="{{ route('admin.users.edit',$user->id) }}"><button type="button" class="btn btn-warning float-left">Edit</button></a>
                                <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="float-left">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                @endcan
                            </td> --}}
                          </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
        </div>
    </div>
</div>
</div>

@endsection