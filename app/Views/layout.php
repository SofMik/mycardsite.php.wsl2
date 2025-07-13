<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?= $title ?></title>
</head>
<body>
  <nav>
    <a href="?page=about">О нас</a> |
    <a href="?page=contact">Контакты</a>
  </nav>
  <hr>
  <?php include __DIR__ . "/{$page}.php"; ?>
</body>
</html>
