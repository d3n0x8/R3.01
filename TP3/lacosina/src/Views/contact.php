<h1>Formulaire de contact</h1>

<form action="?c=enregistrerContact" method="post">
    <div class="mb-2">
        <label for="nom" class="form-label">Votre nom</label>
        <input type="text" class="form-control" name="nom" id="nom" required>
    </div>
    <div class="mb-2">
        <label for="emailAuteurContact" class="form-label">Votre mail</label>
        <input type="email" class="form-control" name="auteur" id="emailAuteurContact" required>
    </div>
    <div class="mb-2">
        <label for="descriptionContact" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="descriptionContact" rows="3" required></textarea>
    </div>
    <div class="mb-2">
        <button type="submit" class="btn btn-primary" id="enregistrerContact">Enregistrer</button>
    </div>
</form>
