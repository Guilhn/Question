<!DOCTYPE html>
<html>
<head>
    <title><?= APLICACAO_NOME ?></title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL_CSS . 'materialize.min.css' ?>"  media="screen,projection">
    <link rel="stylesheet" href="<?= URL_CSS . 'style.css' ?>"  media="screen,projection">
</head>
<body>

  <?php $this->imprimirConteudo() ?>


  <!--  Scripts-->
  <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?= URL_JS . 'materialize.min.js' ?>"></script>
  <script src="<?= URL_JS . 'init.js' ?>"></script>

</body>
</html>
