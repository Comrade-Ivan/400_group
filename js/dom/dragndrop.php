<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Dran'n'Drop</title>
  <style>
    .container {
      display: flex;
    }
    .goods {
      flex: 0 0 50%;
      border: 2px solid red;
      min-height: 500px;
      box-sizing: border-box;
    }
    .cart {
      flex: 0 0 50%;
      border: 2px solid blue;
      min-height: 500px;
      box-sizing: border-box;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="goods">
      <img src="../../../fruits/yammibanana.png" alt="" class="fruit" cost="100">
    </div>
    <div class="cart"></div>
  </div>
  <input type="text" placeholder="Итого" id="sum-input">
  <script src="./dragndrop.js"></script>
</body>
</html>