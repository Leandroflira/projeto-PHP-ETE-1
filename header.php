<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/temaescuro.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=menu" />
  
    <?php if($paginaUrl === "contato"):?>
        <link rel="stylesheet" href="css/contato.css">
        <link rel="stylesheet" href="css/validacao-contato.css">
    <?php endif; ?>
    <?php if($paginaUrl === "registrarnoticia" || "cadastrar-categoria" ):?>
      <?php endif; ?>
    <?php if($paginaUrl === "registro"):?>
        <link rel="stylesheet" href="css/registro.css">
    <?php endif; ?>
    <?php if($paginaUrl === "login"):?>
        <link rel="stylesheet" href="css/login.css">
    <?php endif; ?>
    <?php if($paginaUrl === "registrarnoticia"):?>
        <link rel="stylesheet" href="css/registro.css">
    <?php endif; ?>
    <?php if($paginaUrl === "categoria"):?>
        <link rel="stylesheet" href="css/registro.css">
    <?php endif; ?>

  <script src="scripts/header.js" defer></script>
  <script src="scripts/validacao.js" defer></script>
  <title>InfoSports</title>
</head>

<body>