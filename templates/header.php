<?php
include_once('config/url.php');
include_once('config/process.php');

//limpa a msg
if (isset($_SESSION['msg'])) {
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.1/css/bootstrap.rtl.min.css" integrity="sha512-v/0rtuCuKOmpkT153wINc6H7UtLualQIhOpXdmB4Y1KtYBBtg++8UFPyYJBHLmnd2qBbrKvO+eudewymb5FW6w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonte de ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a href="<?= $BASE_URL ?>index.php" class="navbar-brand">
                <img src="<?= $BASE_URL ?>img/logo.svg" alt="Agenda">
            </a>
            <div>
                <div class="navbar-nav">
                    <a href="<?= $BASE_URL ?>index.php" class="nav-link active" id="home-link">Agenda</a>
                    <a href="<?= $BASE_URL ?>create.php" class="nav-link active" id="create-link">Adicionar contato</a>

                </div>
            </div>
        </nav>
    </header>