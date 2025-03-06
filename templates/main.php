<main class="container text-center mt-5">
    <section class="d-flex justify-content-center">
        <img src="<?= $sprite; ?>" class="img-fluid rounded" width="300" alt="Sprite de <?= $name; ?>" />
    </section>

    <hgroup id="info" class="mt-4">
        <h3 class="my-2">ID: <?= $id; ?></h3>
        <h3 class="my-2">Nombre: <?= $name; ?></h3>
        <h3 class="my-2">Tipo: <?= $type; ?></h3>
        <h3 class="my-2">Habilidad: <?= $hability; ?></h3>
        <h3 class="my-2">Peso: <?= $weight; ?> kg</h3>
        <h3 class="my-2">Altura: <?= $height; ?> m</h3>
        <h3 class="my-2">Experiencia Base: <?= $base_exp; ?></h3>
    </hgroup>
</main>
