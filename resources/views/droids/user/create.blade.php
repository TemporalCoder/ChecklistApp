@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="heading text-center">Customize your build</h1>
    <div class="row">
        <div class="col-md-6">
            <form action="" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="domeSelect" class="col-md-2 col-form-label">Dome:</label>
                    <div class="col-md-10">
                        <select class="custom-select">
                            <option value="1">Select your Dome...</option>
                            <option value="1">R0</option>
                            <option value="1">R2</option>
                            <option value="1">R4</option>
                            <option value="1">R5</option>
                            <option value="1">R6</option>
                            <option value="1">R7</option>
                            <option value="1">R9</option>
                            <option value="1">BT1</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="bodySelect" class="col-md-2 col-form-label">Body:</label>
                    <div class="col-md-10">
                        <select class="custom-select">
                            <option value="1">Select your Body...</option>
                            <option value="1">R2</option>
                            <option value="1">R7</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="bodySelect" class="col-md-2 col-form-label">Legs:</label>
                    <div class="col-md-10">
                        <select class="custom-select">
                            <option value="1">Select your Legs...</option>
                            <option value="1">R2</option>
                            <option value="1">R7</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="bodySelect" class="col-md-2 col-form-label">Feet:</label>
                    <div class="col-md-10">
                        <select class="custom-select">
                            <option value="1">Select your Feet...</option>
                            <option value="1">R2</option>
                            <option value="1">R7</option>
                        </select>
                    </div>
                </div>
        </div>
        <div class="col-md-6">
                <div class="form-group row">
                    <label for="versionSelect" class="col-md-2 col-form-label">Version:</label>
                    <div class="col-md-10">
                        <select class="custom-select">
                            <option value="1">Choose your Dome version...</option>
                            <option value="1">MK1</option>
                            <option value="1">MK2</option>
                            <option value="1">MK3</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="versionSelect" class="col-md-2 col-form-label">Version:</label>
                    <div class="col-md-10">
                        <select class="custom-select">
                            <option value="1">Choose your Body version...</option>
                            <option value="1">MK1</option>
                            <option value="1">MK2</option>
                            <option value="1">MK3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="versionSelect" class="col-md-2 col-form-label">Version:</label>
                    <div class="col-md-10">
                        <select class="custom-select">
                            <option value="1">Choose your Leg version...</option>
                            <option value="1">MK1</option>
                            <option value="1">MK2</option>
                            <option value="1">MK3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="versionSelect" class="col-md-2 col-form-label">Version:</label>
                    <div class="col-md-10">
                        <select class="custom-select">
                            <option value="1">Choose your Feet version...</option>
                            <option value="1">MK1</option>
                            <option value="1">MK2</option>
                            <option value="1">MK3</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Build your Droid</button>
            </form>
        </div>

    </div>
</div>
@endsection
