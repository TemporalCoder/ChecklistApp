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

<div class="container">
    <div class="row">
        <div class="col-sm-10 col-md-10">
            <?php
                $section = '';
                $sub_section = 'xxx';
            ?>
            <div class="panel-group" id="accordion">
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
        </div>
    </div>



    @endforeach
@endsection



