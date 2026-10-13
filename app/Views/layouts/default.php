<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPFramework :: <?= $title ?? ''; ?></title>
    <link rel="stylesheet" href="/public/assets/bootstrap/css/bootstrap.min.css">
    <script src="/public/assets/bootstrap/js/bootstrap.min.js" defer></script>
</head>
<body>
    <ul class="nav nav-pills mb-5 mt-5">
        <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/register">Register</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/login">Log in</a>
        </li>
    </ul>
    <?= $this -> content; ?>
</body>
</html>

