<x-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h1>Registrati</h1>
                <form action="{{ route('register') }}" method="POST" class="card p-5 shadow">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Utente</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
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
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                      </div>
                    <div class="mb-3 d-flex justify-content-center flex-column align-items-center">
                        <button type="submit" class="btn btn-primary">Registrati</button>
                        <p class="mt-2">Hai già un account? <a href="{{ route('login') }}">Accedi</a></p>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</x-layout>