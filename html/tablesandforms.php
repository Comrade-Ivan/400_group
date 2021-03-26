<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Таблицы и формы</title>
</head>
<body>
  <!-- Таблицы -->
  <h1>Таблицы</h1>
  <table border="1">
    <thead> <!--Table headers - шапка таблицы -->
      <tr> <!--Table row - строка таблицы -->
        <th>№ п\п</th> <!--Table header - ячейка заголовков-->
        <th>Тип проекта</th>
        <th>Количество</th>
      </tr> 
    </thead>
    <tbody> <!--Table body - основная часть таблицы-->
      <tr> <!--Table row - строка таблицы -->
        <td>1</td> <!--Table data - ячейка с данными-->
        <td>Сайт (статичный)</td>
        <td>10</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Сайт (адаптиный)</td>
        <td>15</td>
      </tr>
      <tr>
        <td>3</td>
        <td>SPA (Одностраничное приложение)</td>
        <td>2</td>
      </tr>
    </tbody>
  </table>
  <hr> <!--Линия разделения (блочный)-->
  <table border="1">
    <thead>
      <tr>
        <th colspan="3">Название таблицы</th> <!--colspan - объединение по горизонтали-->
      </tr>
      <tr>
        <th>Заголовок 1</th>
        <th>Заголовок 2</th>
        <th>Заголовок 3</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td rowspan="2">Значение 1</td>
        <td>Значение 2</td>
        <td>Значение 3</td>
      </tr>
      <tr>
        <td>Значение 4</td>
        <td>Значение 5</td>
      </tr>
    </tbody>
  </table>
</body>
</html>