@extends('layouts.app')

@section('content')
    @foreach($currentBuilds as $currentBuild)
    <div class="heading">
        <h1 class="text-center">Editing Droid: {{ $currentBuild->class }} </h1>
        <div class="progress_bar" style="width:100%; background-color:lightgreen;">
            {{-- Insert Progress Bar Here To Depict Users Progress --}}<p class="lead text-center" style="color:white;">Progress: 100%</p>

        </div>
    </div>
    Droid Version - MK3
    <table class="table">
            <thead>
                <tr>
                    <th>Dome</th>
                </tr>
            </thead>
            <tbody>
                @foreach($Parts as $Part)
                <tr>
                    <td>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">
                            @if($Part->droid_section === 'Dome')
                                {{ $Part->part_name  }}</label>
                            @endif
                        </div>
                    </td>
                </tr>

        </tbody>
      </table>
      @endforeach

      @endforeach
@endsection
