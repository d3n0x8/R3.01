<body>
    <hi>Recettes</hi>

    <div class="row">
        <?php foreach ($recipes as $recipe) : ?>
            <div class="col-4 p-2">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title"><?= $recipe['titre'] ?></h2>
                        <p class="card-text"><?= $recipe['description'] ?></p>
                        Auteur : <a href="mailto:<?= $recipe['auteur'] ?>"><?= $recipe['auteur'] ?></a>
        
                    </div>
                
                </div>
            </div>

        <?php endforeach ?>
    </div>

</body>