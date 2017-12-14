<html>
    <head>
        <title>Exercice 6</title>
    </head>
    <body>
        <?php
        $nom = 'DEFRETIN ';
        $prenom = 'Maxime ';
        $age = 24 . ' ans.';

        function string($nom, $prenom, $age) {
            return 'Bonjour ' . $nom . $prenom . ', tu as ' . $age;
        };
        echo string($nom, $prenom, $age);
        ?>
    </body>
</html>