
<x-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-8">
                <h1 class="text-center m-3">Accedi</h1>
                <form action="{{ route('login') }}" method="POST" class="card p-5 shadow">
                    @csrf
                    
                    <div class="mb-3">
                      <label for="email" class="form-label">Indirizzo email</label>
                      <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                      @error('email')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                      @error('password')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="mb-3 d-flex justify-content-center flex-column align-items-center">
                        <button type="submit" class="btn btn-primary">Accedi</button>
                        <p class="mt-2">Non sei registrato? <a href="{{ route('register') }}">Clicca qui</a></p>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</x-layout>