
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
    <div class="row justify-content-evenly">
        @foreach ($articles as $article)
            <div class="col-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="Immagine dell'articolo: {{ $article->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text">€ {{ $article->price }}</p>
                        <p class="small text-muted">Categoria:
                            <!-- Verifica se la categoria esiste -->
                            @if($article->category)
                                <a href="#">{{ $article->category->name }}</a>
                            @else
                                <span>Nessuna categoria</span>
                            @endif
                        </p>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <p>
                                Redatto il {{$article->created_at->format('d/m/Y')}} da 
                                <!-- Verifica se l'utente esiste -->
                                @if($article->user)
                                    {{ $article->user->name }}
                                @else
                                    <span>Utente non disponibile</span>
                                @endif
                            </p>
                            <a href="{{ route('article.store', $article->id) }}" class="btn btn-primary">Vedi articolo</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</x-layout>
