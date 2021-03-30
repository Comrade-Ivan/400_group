<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/selectors.css">
  <title>Задание на селекторы</title>
  <style>
    h1 {
      color: red !important;
    }
  </style>
</head>
<body>
  <h1 style="color: orange">Я синий</h1> <!--Используйте селектор тэгов-->
  <h2 id="red">Я красный и слева</h2> <!--Используйте селектор по ID-->
  <h2 id="yellow">Я желтый и по центру</h2>
  <h2 id="green">Я зеленый и справа</h2>
  <ul>
    <li class="blue-list-item">Мы синие элементы</li> <!--Используйте селектор по классам-->
    <li class="red-list-item">А мы красные</li>
    <li class="blue-list-item">Мы синие элементы</li>
    <li class="red-list-item">А мы красные</li>
  </ul>
  <h3>Контекстный селектор</h3>
  <ol class="orange-list">
    <li class="orange-list-item">Мы <span class="bold">должны</span> быть оранжевые</li>
    <li>Но у нас нет ни класса не ID</li>
    <li class="orange-list-item">Найти нас придется по другому</li>
    <li class="orange-list-item">Понадобится контекстный селектор</li>
    <li class="orange-list-item">И не покрасьте второй &lt;ol&gt;</li>
  </ol>
  <h3>Множественный селектор</h3>
  <ol class="darkred-list">
    <li class="darkred-list-item-1">Мы все хотим быть темно-красными</li>
    <li class="darkred-list-item-2">Но у нас разные классы</li>
    <li class="darkred-list-item-1">Не находя родительский &lt;ol&gt; сделайте нас такими</li>
    <li class="darkred-list-item-2">Воспользуйтесь множественным селектором</li>
  </ol>
  <h3>Соседний селектор</h3>
  <div class="siblings">
    <p>Найдите нас внутри родительского &lt;div&gt;(используя контекстный селектор), и, используя соседний селектор,</p>
    <p>Покрасьте только меня в красный (объедините два селектора)</p>
    <p>Покрасьте только меня в красный (объедините два селектора)</p>
  </div>
  <h3>Дочерний селектор</h3>
  <div class="children">
    <p>Нас надо покрасить в синий</p>
    <p>Но внутри есть еще &lt;div&gt; и в нем тоже есть &lt;p&gt;</p>
    <div class="descendants">
      <p>Нас красить не надо</p>
      <p>Нас красить не надо</p>
      <p>Нас красить не надо</p>
    </div>
    <p>А меня снова надо, воспользуйтесь дочерним селектором</p>
  </div>
  <h3>Селектор атрибутов</h3>
  <div class="attr-selector">
    <!-- Теперь самое сложное, здесь необходимо использовать селекторы атрибутов -->
    <!-- У всех элементов, у который атрибут class НАЧИНАЕТСЯ С "col", переместите текст вправо -->
    <!-- Элемент, у которого атрибут title РАВЕН "Красный", должен стать красным-->
    <!-- Ссылки, у которых атрибут href ОКАНЧИВАЕТСЯ НА ".ru" должны стать оранжевыми -->
    <!-- Текст внутри <input>, у которых атрибут name СОДЕРЖИТ "user" должен стать темно-синими -->
    <div class="col-1">Какой-то текст</div>
    <div class="col-2" title="Красный">Еще немного какого-то текста, но красного</div>
    <div class="col-3">Описание, что надо сделать, в комментариях выше</div>
    <ul class="links">
      <a href="https://yandex.ru">Яндекс</a>
      <a href="https://fb.com">Фейсбук</a>
      <a href="https://ok.ru">Одноклассники</a>
      <a href="https://vk.com">Вконтакте</a>
    </ul>
    <div class="inputs">
      <input type="text" value="Василий" name="user-name">
      <input type="text" value="Петров" name="second-user-name">
      <input type="text" value="34p$1dd" name="token">
    </div> 
  </div>
</body>
</html>