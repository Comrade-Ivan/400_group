<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Создание/перемещение элементов</title>
  <style>
    .box-container {
      display: flex;
      justify-content: center; 
      height: 300px;
      width: 75%;
      margin: 0 auto;
      border: 5px solid blue;
      box-sizing: border-box;
      position: relative;
    }
    .card-image {
      width: 100px;
      height: 100px;
      position: absolute;
      top: 0;
      left: 0;
    }
  </style>
</head>
<body>
  <h1>Создание элементов</h1>
  <div class="box-container" id="box-container">
    
  </div>
  <script src="./creating.js"></script>
</body>
</html>