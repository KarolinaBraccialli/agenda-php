<?php
include_once('templates/header.php');
?>

<div class="container">
    <?php include_once('templates/backbtn.html'); ?>
    <h1 id="main-title">Adicionar contato</h1>

    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="create">
        <div class="form-group mt-2">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome do contato" required>
        </div>
        <div class="form-group mt-2">
            <label for="phone">Telefone:</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone do contato" required>
        </div>
        <div class="form-group mt-2">
            <label for="observation">Observações:</label>
            <textarea type="text" class="form-control" id="observation" name="observation" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Adicionar</button>
    </form>

    <?php
    include_once('templates/footer.php');
    ?>