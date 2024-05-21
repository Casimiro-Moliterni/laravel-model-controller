@extends('layouts.app')

@section('main-content')
    <section>
        <div class="ms_container pt-5 pb-5">
            <div class="row row-cols-5 g-2">
                @foreach ($movies as $single_movie)
                    <div class="col">
                        <div class="card text-center ">
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
                            <img src="{{ Vite::asset('resources/img/toy-story.jpg') }}" class="card-img-top" alt="...">
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
                            <div class="card-body ">
                                
                                    <h5 class="text-center">{{ $single_movie->title }}</h5>
                              
                                <small >
                                    Titolo Originale:
                                    <h6>{{ $single_movie->original_title }}</h6>
                                </small>
                                <div class="ms_flag">Nazionalità:
                                    @if ($single_movie->nationality == 'american')
                                    <div class="text-white"><strong> {{ $single_movie->nationality }}</strong></div>
                                    <img src="{{ Vite::asset('resources/img/american.png') }}" alt="">
                                    @else
                                    <div class="text-white"><strong> {{ $single_movie->nationality }}</strong></div>
                                    <img src="{{ Vite::asset('resources/img/american-british.jpg') }}" alt="">
                                    @endif
                                </div>
                                <small>
                                    Data di Uscita:
                                    <div class="text-white"><strong>{{ $single_movie->date }}</strong></div>
                                </small>
                                <small>
                                    Voto:
                                   <div class="ms_vote"><strong> {{ $single_movie->vote }}</strong></div>
                                </small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
