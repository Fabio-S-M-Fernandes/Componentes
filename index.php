<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Sistema MVC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Menu Superior -->
    <nav>
        <a href="index.php?rota=clientes">👥 Clientes</a>
        <a href="index.php?rota=lojaracao">🐾 Loja de Ração</a>
    </nav>

    <!-- Conteúdo do PHP -->
    <div class="card">
        <?php
        include __DIR__ . '/main.php';
        servidorHTTP();
        ?>
    </div>

</body>
</html>