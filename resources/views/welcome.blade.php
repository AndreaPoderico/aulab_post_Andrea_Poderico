    {{-- banner sopra la navbar --}}
    <div class="col-12 bg-banner  d-flex justify-content-center py-1" id="bannerNav">
        Sign up and get 20% off to your first oder. <a class="text-grey" href=""> Sign Up Now</a>
      </div>

      {{-- fine banner sopra la navbar --}}


<x-layout>
@if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
</x-layout>