<!doctype html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
    <link rel="stylesheet" href="/css/materialize.min.css">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <nav>
      <div class="row nav-wrapper">
        <div class="col s12">
            <a href="#" class="brand-logo">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="/">Пройти опрос</a></li>
              <li><a href="/results/">Результаты</a></li>
            </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <?=$content?>
      </div>
    </div>
    <script src="/js/materialize.min.js"></script>
    <script src="/js/script.js"></script>
  </body>
</html>
