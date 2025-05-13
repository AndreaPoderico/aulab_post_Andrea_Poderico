<x-layout>
@if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<div class="container-fluid p-5 bg-secondary-subtle text-center">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1 class="display-1">Tutti gli articoli</h1>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row g-4">
        @foreach ($articles as $article)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow-sm border-0 h-100 card-custom">
                    <img src="{{ Storage::url($article->image) }}" class="card-img-top img-fluid rounded-top" alt="Immagine dell'articolo: {{ $article->title }}">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title fw-bold">{{ $article->title }}</h5>
                            <p class="card-text text-primary fs-5">€ {{ $article->price }}</p>
                            <p class="small text-muted mb-2">
                                Categoria:
                                @if($article->category)
                                    <a href="{{ route('article.byCategory', $article->category) }}" class="text-decoration-none">{{ $article->category->name }}</a>
                                @else
                                    <span>Nessuna categoria</span>
                                @endif
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-0 mt-auto d-flex justify-content-between align-items-center p-0">
                            <small class="text-muted">
                                Redatto il {{ $article->created_at->format('d/m/Y') }} da 
                                @if($article->user)
                                    {{ $article->user->name }}
                                @else
                                    <span>Utente non disponibile</span>
                                @endif
                            </small>
                            <a href="{{ route('article.show', $article->id) }}" class="btn btn-outline-primary btn-sm rounded-pill">Vedi</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</x-layout>
