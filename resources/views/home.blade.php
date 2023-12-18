@extends('layouts.app')

@section('title', 'Home')

@section('content')

<main>
    <div class="container">
        <h2 class="text-light">DC COMICS</h2>
        <div class="row">
            @foreach ($products as $comic)
                <div class="col-12 col-md-3 col-lg-2">
                    <div class="wrapper">
                        <div class="copertina overflow-hidden">
                            <img src="{{ $comic['thumb'] }}" >
                        </div>
                        <h5 class="text-light">{{ $comic['title'] }}</h5>
                    </div>



                </div>
            @endforeach

        </div>
    </div>

</main>

@endsection

