@extends('layouts.app')

@section('content')
    @foreach($currentBuilds as $currentBuild)
    <div class="heading">
        <h1 class="text-center">Editing Droid: {{ $currentBuild->class }} </h1>
        <div class="progress_bar" style="width:100%; background-color:lightgreen;">
            {{-- Insert Progress Bar Here To Depict Users Progress --}}<p class="lead text-center" style="color:white;">Progress: 100%</p>

        </div>
    </div>
    <div class="mk_3">
        Droid Version - MK3
        @foreach($Parts as $Part)
        <table class="table">
                <thead>
                    <tr>
                        <th>{{ $Part->droid_section->orderBy('droid_section') }}</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            {{-- <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">
                                    {{ $Part->part_name  }}</label>
                            </div> --}}
                        </td>
                    </tr>

            </tbody>
        </table>
    </div>
    @endforeach
    @endforeach
@endsection
