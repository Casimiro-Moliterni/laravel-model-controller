@extends('layouts.app')

@section('main-content')
    <section>
        <div class="ms_container">
            <div class="row row-cols-5">
                @foreach ($movies as $single_movie)
                    <div class="col">
                        <div class="card">
                            @if ($single_movie->id == 1)
                            <img src="{{ Vite::asset('resources/img/padrino.jpe') }}" class="card-img-top" alt="...">
                            @endif
                            @if ($single_movie->id == 2)
                            <img src="{{ Vite::asset('resources/img/via-col-vento.jpg') }}" class="card-img-top" alt="...">
                            @endif
                            @if ($single_movie->id == 3)
                            <img src="{{ Vite::asset('resources/img/psycho.jpg') }}" class="card-img-top" alt="...">
                            @endif
                            @if ($single_movie->id == 4)
                            <img src="{{ Vite::asset('resources/img/gravity.jpg') }}" class="card-img-top" alt="...">
                            @endif
                            @if ($single_movie->id == 5)
                            <img src="{{ Vite::asset('resources/img/toy-story-jpg') }}" class="card-img-top" alt="...">
                            @endif
                            @if ($single_movie->id == 6)
                            <img src="{{ Vite::asset('resources/img/pulp-fiction.jpg') }}" class="card-img-top" alt="...">
                            @endif
                            @if ($single_movie->id == 7)
                            <img src="{{ Vite::asset('resources/img/forrest-gump.jpg') }}" class="card-img-top" alt="...">
                            @endif
                            @if ($single_movie->id == 8)
                            <img src="{{ Vite::asset('resources/img/guerre-stellari.jpg') }}" class="card-img-top" alt="...">
                            @endif
                            @if ($single_movie->id == 9)
                            <img src="{{ Vite::asset('resources/img/et.jpg') }}" class="card-img-top" alt="...">
                            @endif
                            @if ($single_movie->id == 10)
                            <img src="{{ Vite::asset('resources/img/il-silenzio-degli-innocenti.jpg') }}" class="card-img-top" alt="...">
                            @endif
                            <div class="card-body text-center">
                                <div>Titolo:
                                    <h5>{{ $single_movie->title }}</h5>
                                </div>
                                <div>
                                    Titolo Originale:
                                    <h5>{{ $single_movie->original_title }}</h5>
                                </div>
                                <div>Nazionalità:
                                    <div><strong> {{ $single_movie->nationality }}</strong></div>
                                </div>
                                <div>
                                    Data di Uscita nelle Sale:
                                    <div><strong>{{ $single_movie->date }}</strong></div>
                                </div>
                                <div>
                                    Voto:
                                   <div><strong> {{ $single_movie->vote }}</strong></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
