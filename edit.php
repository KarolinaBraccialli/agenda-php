<?php
include_once('templates/header.php');
?>

<div class="container">
    <?php include_once('templates/backbtn.html'); ?>
    <h1 id="main-title">Editar contato</h1>

    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $contact['id'] ?>">

        <div class="form-group mt-2">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $contact['name'] ?>" >
        </div>
        <div class="form-group mt-2">
            <label for="phone">Telefone:</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?= $contact['phone'] ?>" >
        </div>
        <div class="form-group mt-2">
            <label for="observation">Observações:</label>
            <textarea type="text" class="form-control" id="observation" name="observation" rows="3"><?= $contact['observation'] ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Atualizar</button>
    </form>

    <?php
    include_once('templates/footer.php');
    ?>