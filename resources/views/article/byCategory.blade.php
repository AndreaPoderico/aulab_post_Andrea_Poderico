<x-layout>
    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">
                    Articoli di categoria: {{ $category->name }}
                </h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 d-flex flex-column">
                @foreach ($articles as $article)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $article->title }}</h5>
                            <p class="card-text text-primary fs-5">€ {{ $article->price }}</p>
                            <p class="small text-muted mb-2">
                                Categoria:
                                @if($article->category)
                                    <a href="#" class="text-decoration-none">{{ $article->category->name }}</a>
                                @else
                                    <span>Nessuna categoria</span>
                                @endif
                            </p>
                        </div>
                    </div>
                    
                @endforeach
            </div>
        </div>
</x-layout>