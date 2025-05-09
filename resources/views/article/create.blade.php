<x-layout>
    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">Inserisci un articolo</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form action="{{ route('article.store') }}" method="POST" class="card p-5 shadow" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Titolo</label>
                      <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}">
                      @error('title')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" name="price" class="form-control" id="price">
                      </div>
                      @error('price')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    <div class="mb-3">
                        <label for="image" class="form-label">Inserisci immagine</label>
                        <input type="file" name="image" class="form-control" id="image" >
                      </div>
                      @error('image')   
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    <div class="mb-3">
                      <label for="category" class="form-label">Categoria</label>
                      <select name="category" class="form-control" id="category">
                        <option selected disabled>Seleziona una categoria"</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                      </select>
                      @error('category')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                     <div class="mt-3 d-flex justify-content-center flex-column align-items-center"><button class="btn" type="submit">Inserisci articolo</button>
                    <a href="{{ route('homepage') }}" class="btn mt-2">Torna alla home</a>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</x-layout>