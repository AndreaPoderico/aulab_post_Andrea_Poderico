<x-layout>
    @if(session('message'))
    <div class="alert ">
        {{ session('message') }}
    </div>
    @endif
    
    <header class="header-custom">
        <img src="{{ asset('img/HeaderPet2.png') }}" class="imgHeader" alt="Immagine header">
        <div class="header-text">
            <h1>Vendi i tuoi articoli senza costi!</h1>
        </div>
        <div>
            <a href="{{ route('article.index') }}" class="btn btn-primary header-text2">Compra ora <i class="fa-solid fa-arrow-right ms-2 "></i></a>
        </div>
        
       
    </header>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="titoloCard">
                    Ultimi Articoli
                </h1>
            </div>
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-evenly">
            @foreach ($articles as $article)
            <div class="col-12 col-md-3 mb-4">
                <div class="card shadow-lg border-0 rounded-3 transition-card" style="width: 15rem; height: 30rem;">
                    <img src="{{Storage::url($article->image)}}" class="card-img-top rounded-top" alt="Immagine dell'articolo: {{ $article->title }}">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title ">{{ $article->title }}</h5>
                        <p class="card-text text-dark">€ {{ $article->price }}</p>
                        <p class="small text-muted">Categoria:
                            @if($article->category)
                            <a href="{{ route('article.byCategory', $article->category) }}" class="text-decoration-none text-warning">{{ $article->category->name }}</a>
                            @else
                            <span class="text-danger">Nessuna categoria</span>
                            @endif
                        </p>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <p class="text-muted small">
                                Redatto il {{$article->created_at->format('d/m/Y')}} da 
                                @if($article->user)
                                {{ $article->user->name }}
                                @else
                                <span class="text-warning">Utente non disponibile</span>
                                @endif
                            </p>
                            <a href="{{ route('article.show', $article->id) }}" class="btn btn-primary btn-sm rounded-3 transition-btn">Vedi articolo</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>


