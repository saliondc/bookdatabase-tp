<?php
    $userID = isset($_GET['userID']) ? $_GET['userID'] : 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>BookDatabase</title>
</head>
<body>
<div class="navbar">
    <div class="left-container">
        <a href="index.php" class="navbar-logo">
            <img src="logo.png" style="height: 41px;" alt="Logo da barra de navegação" />
        </a>
        <a href="index.php" class='nav-link'>Home</a>
        <?php if ($isLoggedIn) {
            echo "<a href='groups.php' class='nav-link'>Grupos</a>";
            echo"<a href='books.php' class='nav-link'>Books</a>";
            }
        ?>
        <a href="about.php" class='nav-link'>Sobre</a>
        <a href="contact.php" class='nav-link'>Contate-nos</a>
    </div>
    <div class="right-container">
        <?php if ($isLoggedIn): ?>
            <a href="perfil.php" class='nav-link'>Perfil</a>
            <a href="logout.php" class='nav-link'>Logout</a>
        <?php else: ?>
            <button onclick="location.href='cadastro.php'" class='white-button'>Cadastro</button>
            <button onclick="location.href='login.php'" class='white-button'>Login</button>
        <?php endif; ?>
    </div>
</div>

    <section id="overview" class="feature-container">
        <div class="feature-content">
            <h2>Visão Geral</h2>
            <p>
                O projeto de banco de dados de livros tem como objetivo criar uma solução eficiente para armazenar informações sobre uma coleção de livros.
                Ele inclui entidades como Livros, Autores, Gêneros, Editoras, entre outras, para garantir uma representação abrangente dos dados.
            </p>
            <button class="start-button"><a href="cadastro.php">Começar Agora</a></button>
        </div>
    </section>

    <section id="features" class="features-section">
        <img src="checklist-image.png" alt="Checklist" class="checklist-image">
        <ul class="features-list">
            <li>Sistema de gerenciamento de livros, autores e editoras.</li>
            <li>Relacionamento entre livros e autores para fácil busca.</li>
            <li>Categorização de livros por gênero.</li>
            <li>Rastreamento de informações detalhadas, como ano de publicação e número de páginas.</li>
        </ul>
    </section>


    <footer class="site-footer">
        <div class="footer-content">
            <img src="footer-logo.png" alt="Footer Logo" class="footer-logo">
            <p>&copy; 2023 Projeto de Banco de Dados de Livros</p>
        </div>
    </footer>
</body>
</html>
