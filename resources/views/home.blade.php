@extends('layout.main')

@section('title', 'Home')

@section('comtent')

    <section id="movies" class="container p-5">
        @forelse ($travels as $travel)
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $travel->where}}</h4>
                    <h6 class="card-subtitle">{{ $travel->when }}</h5>
                    <div class="card-text">
                        <p>{{ $travel->days}}</p>
                    
                        <pre>{{ $travel->price}}</pre>
                    </div>    
                </div>
            </div>
        @empty
            <h3>Nessun viaggio è disponibbile</h3>
        @endforelse
    </section>

@endsection