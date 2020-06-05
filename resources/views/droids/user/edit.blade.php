@extends('layouts.app')

@section('content')
    @foreach($currentBuilds as $currentBuild)
    <div class="heading">
        <h1 class="text-center">Editing Droid: {{ $currentBuild->class }} </h1>
        <div class="progress_bar" style="width:100%; background-color:lightgreen;">
            {{-- Insert Progress Bar Here To Depict Users Progress --}}<p class="lead text-center" style="color:white;">Progress: 100%</p>
        </div>
    </div>

    @endforeach
@endsection
