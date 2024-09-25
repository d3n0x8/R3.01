<h1>Ajouter une recette</h1>

<form action="?c=enregistrerRecette" method="post">
    <div class="mb-3">
        <label for="titre" class="form-label">Titre de la recette</label>
        <input type="text" class="form-control" name="titre" id="titre" required>
    </div>
    <div class="mb-3">
        <label for="descriptionRecette" class="form-label">Description de la recette</label>
        <textarea class="form-control" name="description" id="descriptionRecette" rows="3" required></textarea>    
    </div>
    <div class="mb-3">
        <label for="emailAuteurRecette" class="form-label">Mail de l'auteur</label>
        <input type="email" class="form-control" name="auteur" id="emailAuteurRecette" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary" id="enregistrerAjout">Enregistrer</button>
    </div>
</form>
