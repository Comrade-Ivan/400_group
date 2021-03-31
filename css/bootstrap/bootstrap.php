<!doctype html>
<html lang="ru">
  <head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Bootstrap</title>
    <style>
      div[class^="col"] {
        min-height: 100px;
        border: 2px solid darkblue;
        box-sizing: border-box;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Домой</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Возможности</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Цены</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <h1 class="text-center my-5 d-none d-md-block d-xl-none">Привет мир!</h1>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://api.time.com/wp-content/uploads/2015/02/cats.jpg?quality=85&w=1024&h=512&crop=1" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://api.time.com/wp-content/uploads/2015/02/cats.jpg?quality=85&w=1024&h=512&crop=1" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://api.time.com/wp-content/uploads/2015/02/cats.jpg?quality=85&w=1024&h=512&crop=1" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Предыдущий</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Следующий</span>
      </button>
    </div>
    <div class="buttons p-3 p-sm-1">
      <button class="btn btn-primary">Кнопка 1</button>
      <button class="btn btn-warning ms-3">Кнопка 2</button>
    </div>
    <!--СЕТКА BOOTSTRAP-->
    <h2 class="my-5">Сетка</h2>
    <div class="container">
      <div class="row mb-5">
        <!--Бутстрап делит любой div с классом row на 12 колонок-->
        <div class="col-6 order-1 col-sm-4 col-md-12 col-lg-12">1</div>
        <div class="col-3 order-2 col-sm-2 order-sm-3 col-lg-12">2</div>
        <div class="col-2 order-3 order-sm-2 col-lg-12">3</div>
        <div class="col-1 order-3 col-sm-4 offset-md-4 col-lg-12 offset-lg-0">4</div>
        <div class="col-12 order-3 d-md-none col-lg-12 d-lg-block">5</div>
        <div class="col-4 order-3 order-sm-4 col-sm-2 col-lg-12">6</div>
        <div class="col-4 order-4 order-sm-5 col-sm-8 col-lg-12">7</div>
        <div class="col-4 order-5 order-sm-3 col-sm-2 col-lg-12">8</div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>