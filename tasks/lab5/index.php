<!doctype html>
<html lang="ru">
  <head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Привет мир!</title>
    <style>
      div[class^="col"] {
        min-height: 150px;
        border: 2px solid blue;
        box-sizing: border-box;
      }
      .col-12 span {
        background: rgba(255, 255, 255, .7);
        display: inline-block;
        padding: 1rem;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12 order-1 col-md-3 col-lg-12"><span>1</span></div>
        <div class="col-12 order-1 d-sm-none d-md-block col-md-8 col-lg-6 order-lg-2">
          <div class="row p-2 d-none d-lg-flex">
            <div class="col-2 bg-primary">2.1</div>
            <div class="col-8 bg-secondary">2.2</div>
            <div class="col-2 bg-danger">2.3</div>
            <div class="col-2 bg-warning">2.4</div>
            <div class="col-10 bg-info">2.5</div>
            <div class="col-8 bg-success">2.6</div>
            <div class="col-4 bg-dark">2.7</div>
          </div>
        </div>
        <div class="col-12 order-2 d-sm-none d-md-block col-md-1 col-lg-6 order-lg-1"><span>3</span></div>
        <div class="col-12 order-2 col-sm-4 order-lg-4 col-lg-5"><span>4</span></div>
        <div class="col-12 order-3 col-sm-8 col-md-4 offset-md-4 col-lg-2 offset-lg-0"><span>5</span></div>
        <div class="col-12 order-3 col-sm-8 col-md-5 col-lg-2"><span>6</span></div>
        <div class="col-12 order-4 d-sm-none d-md-block col-md-3 offset-md-1 col-lg-1 offset-lg-0"><span>7</span></div>
        <div class="col-12 order-4 col-sm-2 offset-sm-2 col-md-1 offset-md-2 col-lg-2 offset-lg-0"><span>8</span></div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script>
      const columns = document.querySelectorAll(".col-12");
      const colors = ['#BB2020', '#06111C', '#BEC7C7', '#FFEB4D', '#3A3A3A', '#FFFFFF', '#506AD4', '#A3CDD9'];
      columns.forEach((column, index) => column.style.background = colors[index]);
    </script>
  </body>
</html>