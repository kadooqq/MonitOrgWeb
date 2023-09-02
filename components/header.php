<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MonitOrg</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body class="d-flex flex-column min-vh-100">
<header class="d-flex flex-wrap justify-content-between align-items-center py-2 px-5 bg-dark text-white">
    <ul class="nav">
        <li>
            <a class="navbar-brand text-white" href=<?php isset($_SESSION['login_user']) ? "/products" : "/" ?>>
                <i class="bi bi-building" style="font-size: 2rem;"></i>
                MonitOrg
            </a>
        </li>
        <?php if (isset($_SESSION['login_user'])) :?>
        <li class="d-flex align-items-center mt-2">
            <a href="/products" class="nav-link text-white">Продукция</a>
        </li>
        <li class="d-flex align-items-center mt-2">
            <a href="/vendors" class="nav-link text-white">Производители</a>
        </li>
        <?php endif; ?>
    </ul>

    <div class="text-end mx-2">
        <?php if (isset($_SESSION['login_user'])) :?>
        Вы авторизованы, как <?php echo $_SESSION['login_user']?>. <a href="/logics/logout-logic.php">Выйти</a>
        <?php else : ?>
            <a type="button" href="/login" class="btn btn-outline-light me-2">Войти</a>
            <a type="button" href="/sign-up" class="btn btn-outline-light me-2">Зарегистрироваться</a>
        <?php endif; ?>
    </div>
</header>
