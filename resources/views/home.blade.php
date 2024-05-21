@extends('layouts.app')

@section('main-content')
    <section>
        <div class="ms_container">
            <div class="row row-cols-5">
                @foreach ($movies as $single_movie)
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
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
