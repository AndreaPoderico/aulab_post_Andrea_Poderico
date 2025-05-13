<x-layout>
    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">
                    {{ $article->title }}
                </h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 d-flex flex-column">
                <img src="{{Storage::url($article->image)}}" alt="Immagine dell'articolo: {{ $article->title }}">
                <p class="fs-5">€ {{ $article->price }}</p>
                <p class="fs-5">
                    Categoria:
                    <a href="{{ route('article.byCategory', $article->category) }}" class="text-capitalize fw-bold text-muted
                    ">{{ $article->category->name }}</a>
                </p>
                <div class="text-muted my-3">
                    <p>Redatto il {{ $article->created_at->format('d/m/Y') }} da {{ $article->user->name }}</p>
                </div>
                <div class="text-center">
                    <a href="{{route('article.index')}}" class="btn btn-primary">Tutti gli articoli <i class="fa-solid fa-arrow-right"></i"> </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>