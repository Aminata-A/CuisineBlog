<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <form action="/recettes/creer_ou_modifier" method="POST" class="container">
        @csrf
        @if ($recette != NULL)
        
            <input type="hidden" value="{{ $recette->id }}" name="recette_id">
            
            <div class="mb-3">
                <label for="titre" class="form-label">Titre</label>
                <input type="text" class="form-control" id="titre" aria-describedby="titre" name="titre" value="{{ $recette->titre }}">
            </div>        
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ $recette->description }}</textarea>
            </div>    
            <div class="mb-3">
                <label for="image" class="form-label">Url de l'image</label>
                <input type="text" class="form-control" id="image" aria-describedby="image" name="image_url" value="{{ $recette->image_url }}">
            </div>
            
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="nouveaute" name="nouveaute">
                <label class="form-check-label" for="nouveaute" value="{{ $recette->nouveaute }}">Nouveauté</label>
            </div>
        
        @else
                    
            <div class="mb-3">
                <label for="titre" class="form-label">Titre</label>
                <input type="text" class="form-control" id="titre" aria-describedby="titre" name="titre">
            </div>        
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
            </div>    
            <div class="mb-3">
                <label for="image" class="form-label">Url de l'image</label>
                <input type="text" class="form-control" id="image" aria-describedby="image" name="image_url">
            </div>
            
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="nouveaute" name="nouveaute">
                <label class="form-check-label" for="nouveaute">Nouveauté</label>
            </div>
        
        @endif
        
        <button type="submit" class="btn btn-primary">Ajouter Recette</button>    
    </form>
        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    </html>
    