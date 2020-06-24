@extends('layouts.app')

@section('content')
    @foreach($currentBuilds as $currentBuild)
    <div class="heading">
        <h1 class="text-center">Editing Droid: {{ $currentBuild->class }} </h1>
        <div class="progress_bar" style="width:100%; background-color:lightgreen;">
            {{-- Insert Progress Bar Here To Depict Users Progress --}}
            <p class="lead text-center" style="color:white;">Progress: 100%</p>
        </div>
    </div>
    @endforeach
    <div class="row mt-5">
        <div class="col-md-6 mb-5">
            <div class="checklist">
            <?php
                $section = '';
                $sub_section = 'xxx';
            ?>
            <div class="panel-group" id="accordion">
                <h1 class="text-center">Checklist</h1>

                @foreach($Parts as $Part)
                    {{-- Sections --}}
                    @if($Part->droid_section != $section)
                    <?php
                        $section = $Part->droid_section;
                    ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                            </span>{{ $Part->droid_section }}</a>
                        </h4>
                    </div>
                    @endif
                    {{-- Sub-Section --}}
                    @if($Part->sub_section != $sub_section)
                    <?php
                        $sub_section = $Part->sub_section;
                    ?>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <ul class="list-group">
                                <li class="list-group-item"><span class="glyphicon glyphicon-pencil text-primary"></span><a href="#">{{ $Part->sub_section }}</a>
                                    <li class="list-group-item"><span class="glyphicon glyphicon-pencil text-primary"></span>
                                        <a href="#">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" value="{{ $Part->id }}">
                                                <label class="form-check-label" for="exampleCheck1">
                                                    {{ $Part->part_name }}
                                                </label>
                                            </div>
                                        </a>
                                    </li>
                    @endif
                                </li>
                            </ul>
                        </div>
                @endforeach
                    </div>
                </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="droidInfo">
                    @foreach($droidDetails as $droidDetail)

                    <table class="table table-responsive text-center">
                        <h1 class="text-center">Droid Information</h1>
                        <tbody>
                            <tr>
                                <th>Builder's Name</th>
                                <td>{{ $droidDetail->builder_name }}</td>
                            </tr>
                            <tr>
                                <th>Droid Description</th>
                                <td>{{ $droidDetail->description }}</td>
                            </tr>
                            <tr>
                                <th>Colour Scheme</th>
                                <td>#{{ $droidDetail->colors }}</td>
                            </tr>
                            <tr>
                                <th>Static/Moving?</th>
                                <td>{{ $droidDetail->mobility }}</td>
                            </tr>
                            <tr>
                                <th>Electronics</th>
                                <td>{{ $droidDetail->electronics }}</td>
                            </tr>
                            <tr>
                                <th>Control System</th>
                                <td>{{ $droidDetail->control_system }}</td>
                            </tr>
                            <tr>
                                <th>Drive System</th>
                                <td>{{ $droidDetail->drive_system }}</td>
                            </tr>
                            <tr>
                                <th>Power</th>
                                <td>{{ $droidDetail->power }}</td>
                            </tr>
                        </tbody>
                    </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>



@endsection
