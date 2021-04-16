<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Планирование</title>
  <style>
    .box {
      width: 150px;
      height: 150px;
      border: 7px solid black;
      background-color: lightblue;
      margin-top: 25px;
    }
  </style>
</head>
<body>
  <button id="clear-button">Остановить перекраску</button>
  <h2>setTimeout</h2>
  <div class="box" id="timeout-box"></div>
  <h2>setInterval</h2>
  <button id="clear-interval-button">Остановить перекраску</button>
  <div class="box" id="interval-box"></div>
  <script src="./planning.js"></script>
</body>
</html>