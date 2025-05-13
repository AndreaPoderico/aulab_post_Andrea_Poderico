<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Aulab Post</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- CDN GOOGLEFONTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tagesschrift&display=swap" rel="stylesheet">
    {{-- CDN FONTAWESOME --}}
    <script src="https://kit.fontawesome.com/af7f2f17d3.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <x-navbar/>

<div class="bg-banner py-3">
    <div class="container">
        <div class="d-flex justify-content-center flex-wrap gap-3">
            @foreach($categories as $category)
                <a href="{{ route('article.byCategory', $category) }}" class="btn btn-secondary mx-4">
                    {{ $category->name }}
                </a>
            @endforeach
        </div>
    </div>
</div>


    
    <div class="min-vh-100">
        {{ $slot }}
    </div>
    
    <x-footer/>
    
</body>
</html>