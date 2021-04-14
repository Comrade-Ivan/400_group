<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Изменение документа</title>
    <style>
      .box {
        width: 200px;
        height: 200px;
        border: 2px solid black;
      }

      .left-fruit, .right-fruit {
        width: 200px;
      }

      .task-4 .box {
        background-color: red;
      }
    </style>
  </head>
  <body class="p-3">
    <p><h3>Примечание.</h3> Все созданные функции вызываются из консоли</p>
    <button class="btn btn-danger" id="cancel-button">Удалить обработчики событий с кнопок</button>
    <div class="task-1">
      <h2>Задание 1 <button class="btn btn-primary" id="task1-button" onclick="task1()">Выполнить</button></h2>
      <p>Напишите функцию, которая бы считывала значение из левого input'a и переносила бы это значение как внутренний HTML элемента .input-result</p>
      <input type="text" class="task1-input">
      <span class="input-result"></span>
    </div>
    <div class="task-2">
      <h2>
        <span>Задание 2</span>
        <button class="btn btn-primary task2-button" color="lightblue">Синий</button>
        <button class="btn btn-success task2-button" color="lime">Зеленый</button>
        <button class="btn btn-warning task2-button" color="yellow">Желтый</button>
        <button class="btn btn-danger task2-button" color="red">Красный</button>
      </h2>
      <p>Напишите функцию, которая параметром принимает цвет (color), а затем применяет этот цвет к квадрату ниже</p>
      <div class="box"></div>
    </div>
    <div class="task-3">
      <h2>Задание 3 <button class="btn btn-primary" id="task3-button">Выполнить</button></h2>
      <p>Напишите функцию, которая считывает атрибут src левой картинки и записывает это значение в атрибут src  правой картинки</p>
      <img src="https://images.immediate.co.uk/production/volatile/sites/30/2017/01/Bananas-218094b-scaled.jpg?quality=45&resize=960,872" alt="" class="left-fruit">
      <img src="https://upload.wikimedia.org/wikipedia/commons/f/f4/Honeycrisp.jpg" alt="" class="right-fruit ml-5">
    </div>
    <div class="task-4">
      <h2>Задание 4 <button class="btn btn-primary" id="task4-button">Выполнить</button></h2>
      <p>Напишите функцию, которая удалит класс d-none у квадрата ниже (он невидим)
      **Напишите "переключатель" - при первом вызове функции квадрат показывается, при втором - прячется и т.д.
      </p>
      <div style="min-height: 300px;">
        <div class="box d-none"></div>
      </div>
    </div>
    <h2 class="text-center">Войти</h2>
    <div class="row justify-content-center mb-5">
      <div class="col-6">
        <form action="" id="login-form">
          <input type="text" placeholder="Логин" class="d-block w-100">
          <input type="password" placeholder="Пароль" class="d-block w-100 my-2">
          <input type="submit" value="Войти" class="btn btn-primary btn-block">
        </form>
      </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="events.js"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>