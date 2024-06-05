<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Liste des recettes</h1>
    <a href="/recettes/creer" class="btn btn-primary">Creer</a>

    <div class="d-flex justify-content-around ">

    @foreach ($recettes as $recette)
    <div class="col-md-3 mb-4">
      <div class="card h-100"> <!-- Utilisation de h-100 pour spécifier que la carte doit occuper 100% de la hauteur de son conteneur -->
          <img src="{{ $recette->image_url }}" class="card-img-top" alt="..." name='image_url'>
          <div class="card-body d-flex flex-column"> <!-- Utilisation de d-flex et flex-column pour que le contenu se comporte comme une colonne et soit centré -->
            <h5 class="card-title">{{ $recette->titre }}</h5>
            <p class="card-text flex-grow-1">{{ Str::limit($recette->description, 100) }}</p> <!-- Utilisation de flex-grow-1 pour que le texte prenne toute la place disponible en hauteur -->
            <a href="/recettes/detail/{{ $recette->id }}" class="btn btn-primary mt-auto">Voir détails</a> <!-- Utilisation de mt-auto pour pousser le bouton en bas de la carte -->
          </div>
        </div>
  </div>
      @endforeach
    </div>



      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
  </html>
  


