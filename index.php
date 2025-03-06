<?php

// Para que haga el checkeo del tipo en lugar de convertir automaticamente si lo damos mal
declare (strict_types = 1);

// Traemos el contenido de functions.php, conts.php y pokemon.php
require_once 'consts.php';
require_once 'functions.php';
require_once 'classes/pokemon.php';

// Obtenemos los datos de los pokémon que queremos con el método fetch_and_create_poemon y le pasamos la API y el id
// Por ejemplo yo obtengo un articuno y un lapras
$articuno = Pokemon::fetch_and_create_pokemon(API_URL, 144);
$lapras = Pokemon::fetch_and_create_pokemon(API_URL, 131);

?>

<!doctype html>
<html lang="en">

<?php require_once 'templates/head.php' ?>

<body class="bg-dark text-white">

<?php require_once 'templates/header.php' // Nos traemos el header?>

<?php render_template('main',$articuno->get_data()); // Renderizamos las plantillas de los pokémon usando la variable asignada al obtenerlos ?>
<?php render_template('main',$lapras->get_data()); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
