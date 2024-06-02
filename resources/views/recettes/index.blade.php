<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <a href="/recettes/creer" class="btn btn-primary">Creer</a>


    @foreach ($recettes as $recette)
        
    <div class="card" style="width: 18rem;">
        <img src="{{ $recette->image_url}}" class="card-img-top" alt="..." name='image_url'>
        <div class="card-body">
          <h5 class="card-title">{{ $recette->titre}}</h5>
          <p class="card-text">{{ $recette->description}}</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
          <a href="/recettes/modifier/{{$recette->id}}" class="btn btn-primary">Modifier</a>
          <a href="/recettes/supprimer/{{$recette->id}}" class="btn btn-primary">supprimer</a>
        </div>
      </div>
      @endforeach


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
  </html>
  


