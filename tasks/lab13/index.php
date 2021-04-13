<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Лабораторная 13</title>
</head>
<body>
  <h2>Task 1</h2>
  <div class="task1">
    <div>Пользователи:</div>
    <ul>
      <li>Джон</li>
      <li>Пит</li>
    </ul>
  </div>
  <h2>Task 2</h2>
  <div class="task2">
    <form name="search">
      <label>Search the site:
        <input type="text" name="search">
      </label>
      <input type="submit" value="Search!">
    </form>
  
    <hr>
  
    <form name="search-person">
      Search the visitors:
      <table id="age-table">
        <tr>
          <td>Age:</td>
          <td id="age-list">
            <label>
              <input type="radio" name="age" value="young">less than 18</label>
            <label>
              <input type="radio" name="age" value="mature">18-50</label>
            <label>
              <input type="radio" name="age" value="senior">more than 50</label>
          </td>
        </tr>
  
        <tr>
          <td>Additionally:</td>
          <td>
            <input type="text" name="info[0]">
            <input type="text" name="info[1]">
            <input type="text" name="info[2]">
          </td>
        </tr>
  
      </table>
  
      <input type="submit" value="Search!">
    </form>
  </div>
  <h2>Task 3</h2>
  <div class="task3">
    <table border="1">
      <tr>
        <td>1:1</td>
        <td>2:1</td>
        <td>3:1</td>
        <td>4:1</td>
        <td>5:1</td>
      </tr>
      <tr>
        <td>1:2</td>
        <td>2:2</td>
        <td>3:2</td>
        <td>4:2</td>
        <td>5:2</td>
      </tr>
      <tr>
        <td>1:3</td>
        <td>2:3</td>
        <td>3:3</td>
        <td>4:3</td>
        <td>5:3</td>
      </tr>
      <tr>
        <td>1:4</td>
        <td>2:4</td>
        <td>3:4</td>
        <td>4:4</td>
        <td>5:4</td>
      </tr>
      <tr>
        <td>1:5</td>
        <td>2:5</td>
        <td>3:5</td>
        <td>4:5</td>
        <td>5:5</td>
      </tr> 
    </table>
  </div>
  <script src="./script.js"></script>
</body>
</html>