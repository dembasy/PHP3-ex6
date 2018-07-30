<?php
// defintion de la variable start initialiser a 1
  $start = 20;
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>ex6</title>
  </head>
  <body>
    <p>
      <?php
      // definition de la boucle grace a while,
      // on reprend la variable et on lu indique que tant qu'elle est inférieur ou egal a  on affiche le message on y est presque
      // pour l'incrémentation du résultat, on reprend la variable start plus on l'incremente
        while ($start >= 0) {
          echo 'C\'est presque bon';
          $start--;

        }
       ?>
    </p>
  </body>
</html>
