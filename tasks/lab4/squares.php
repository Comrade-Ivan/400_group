<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Чередующиеся квадраты</title>
  <style>
    .squares {
      display: flex;
      min-height: 100vh; /*100% Видимой высоты экрана*/
      justify-content: center;
      align-items: center;
    }
    .squares div {
      height: 150px;
      width: 150px;
      background-color: black;
      margin: 10px;
      /* transition: background-color 1s ease, margin 1s ease; */
      transition: all 1s ease;
    }
    .squares div:nth-child(2n) {
      background-color: lightblue;
    }
    .squares div:hover {
      background-color: orange;
      margin: 50px;
      height: 200px;
      width: 200px;
    }
  </style>
</head>
<body>
  <div class="squares">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</body>
</html>