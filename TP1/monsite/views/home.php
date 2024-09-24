<body>
    <h1>Bienvenue sur mon site !</h1>
    <p>
        <?php
        $date = date('d/m/Y');
        $heure = date('H:i:s');
        echo "Nous sommes le {$date}<br>"; // date du jour
        echo 'Il est ' . $heure;
        ?>
    </p>
    <table border="1">
        <thead>
            <th>Nom</th>
            <th>Mail de l'auteur</th>
        </thead>
        <?php foreach ($recipes as $recipe) : ?>
            <tr>
                <td><?= $recipe['nom'] ?></td>
                <td><?= $recipe['email'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>