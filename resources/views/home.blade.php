@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MrBaddeley Printed Droid</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
        {{-- @foreach($images as $image) --}}
              <div class="carousel-item active">
                {{-- <img class="d-block w-100" src="{{ $image }}" alt="First slide"> --}}
              </div>
        {{-- @endforeach --}}
            </div>
          </div>

        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    MrBaddeley Printed Droids
                </div>

                <div class="links">
                    <a href="https://www.facebook.com/groups/MrBaddeley">Facebook</a>
                    <a href="https://www.patreon.com/mrbaddeley/posts">Patreon</a>
                    <a href="https://www.youtube.com/channel/UC_to0ElS5JqOOvnQMR_DVFA">YouTube</a>
                    <a href="https://3dprinteddroids.com/">Forum</a>
                    <a href="https://www.madcat3d.com/shop/">Shop</a>
                    <a href="https://discord.gg/q6n6vVk">Discord</a>
                    {{-- <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a> --}}
                </div>
            </div>
        </div>
        <script>
            document.querySelector('.carousel-inner > div:first-child').classList.add('active');
        </script>
    </body>
</html>
@endsection
