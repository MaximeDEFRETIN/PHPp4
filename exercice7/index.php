<html>
    <head>
        <title>Exercice 7</title>
    </head>
    <body>
        <?php
        $kind = 'homme';
        $age = 18;

        function string($kind, $age) {
            if (($kind == 'homme')  && ($age >= 18)) {
                return 'Tu es un ' . $kind . ' et tu es majeur.';
            }
            elseif (($kind == 'femme')  && ($age >= 18)) {
                return 'Tu es une ' . $kind . ' et tu es majeur.';
            }
            elseif (($kind == 'homme')  && (($age < 18) && ($age >= 0))) {
                return 'Tu es un ' . $kind . ' et tu es mineur.';
            }
            elseif (($kind == 'femme')  && (($age < 18) && ($age >= 0))) {
                return 'Tu es une ' . $kind . ' et tu es mineur.';
            }              
        }
        echo string($kind, $age);
        ?>
    </body>
</html>