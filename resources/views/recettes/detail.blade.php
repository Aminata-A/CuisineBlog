<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Recette détaillée</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .recette-image {
      max-width: 100%;
      height: auto;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <img src="{{ $recettes->image_url }}" class="recette-image" alt="Image de la recette">
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{ $recettes->titre }}</h5>
            <p class="card-text">{{ $recettes->description }}</p>
            <a href="/recettes/modifier/{{$recettes->id}}" class="btn btn-primary me-2">Modifier</a>
            <a href="/recettes/supprimer/{{$recettes->id}}" class="btn btn-danger">Supprimer</a>
          </div>
        </div>
      </div>
    </div>
    <a href="/" class="btn btn-secondary mt-3">Retour à la liste des recettes</a>
  </div>

        <!-- Formulaire de commentaire -->
        <section class="liste-commentaires container">
          <div class="row">
              <div class="col">
                  <h3> <i class="fa-solid fa-comments"></i> Vos commentaires </h3>
              </div>
          </div>
          <div class="row">
              <div class="col-7">
                  <ol class="list-group list-group-numbered">
                      @foreach ($commentaires as $commentaire )
                      <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                              <div class="fw-bold">{{ $commentaire->nom_auteur}}</div>
                              {{ $commentaire->contenu}}
                              <a href="/commentaires/supprimer/{{ $commentaire->id }}" class="danger" style="color:red">Supprimer</a>
                              <a href="/recettes/{{ $recettes->id }}/commentaires/{{ $commentaire->id }}" class="danger" style="">modifier</a>
                          </div>
                      </li>
                      @endforeach
                  </ol>
              </div>
              <div class="col-5">
                  <form action="/commentaires/sauvegarder" method="POST">
                      @csrf
                      <input type="hidden" name="recette_id" value="{{$recettes->id}}">
                      <div class="mb-3">
                          <label for="nom" class="form-label">Présentez vous ! </label>
                          @if ($commentaire_to_edit != Null)
                              <input type="hidden" name="commentaire_id" value="{{$commentaire_to_edit->id}}">
                              <input type="text" class="form-control @error('nom_auteur') is-invalid @enderror" id="nom" name="nom_auteur" value="{{ $commentaire_to_edit->nom_auteur }}">                                
                          @else
                              <input type="text" class="form-control @error('nom_auteur') is-invalid @enderror" id="nom" name="nom_auteur" value="{{ old('nom_auteur') }}">
                          @endif
                          @error('nom_auteur')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="mb-3">
                          <label for="contenu" class="form-label">Laissez nous un mot ! </label>
                          @if ($commentaire_to_edit != Null)
                              <textarea class="form-control  @error('contenu') is-invalid @enderror" id="contenu" name="contenu">{{ $commentaire_to_edit->contenu }}</textarea>
                          @else
                              <textarea class="form-control  @error('contenu') is-invalid @enderror" id="contenu" name="contenu">{{ old('contenu') }}</textarea>
                          @endif
                          <!-- -->
                          @error('contenu')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      <button type="submit" class="btn btn-outline-secondary">Envoyer</button>
                  </form>
              </div>
          </div>
      </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
