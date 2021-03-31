<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Батарейка</title>
  <style>
    :root {
      --red: rgb(255, 50, 50);
      --green: rgb(100, 255, 100);
    }
    body {
      display: flex;
      min-height: 100vh;
      justify-content: center;
      align-items: center;
    }
    .battery {
      width: 280px;
      height: 70px;
      border: 4px solid black;
      box-sizing: border-box;
      position: relative;
    }
    .battery:before, .battery:after {
      content: "";
      display: inline-block;
      position: absolute;
    }
    .battery:before {
      height: 101%;
      width: 33%;
      background-color: var(--red); /*variable - переменная*/
      transition: all 3s ease-in;
    }
    .battery:after {
      height: 20px;
      width: 10px;
      background-color: black;
      left: calc(100% + 4px);
      top: 50%;
      transform: translateY(-50%);
    }
    .battery:hover:before {
      background-color: var(--green);
      width: 100%;
    }
  </style>
</head>
<body>
  <div class="battery"></div>
</body>
</html>