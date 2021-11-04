@extends('layout.main')

@section('title', 'Home')

@section('comtent')

    <section id="movies" class="container p-5">
        @forelse ($travels as $travel)
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $travel->title}}</h4>
                    <h6 class="card-subtitle">{{ $travel->original_title }}</h5>
                    <div class="card-text">
                        <p>{{ $travel->nationality}}</p>
                    
                        <pre>{{ $travel->vote}}</pre>
                    </div>    
                </div>
            </div>
        @empty
            <h3>Nessun viaggio è disponibbile</h3>
        @endforelse
    </section>

@endsection