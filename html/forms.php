<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Формы</title>
</head>
<body>
  <h1>Формы</h1>
  <form action="#" method="">
    <h4>Регистрация на курс</h4>
    <div>
      <input type="text" placeholder="Введите логин" name="login"> <!-- Поле ввода (строчный) -->
    </div>
    <div>
      <input type="password" placeholder="Введите пароль" name="password">
    </div>
    <div>
      <input type="text" placeholder="Введите имя" name="firstname" value="Иван">
      <input type="text" placeholder="Введите фамилию" name="lastname" value="Иванов">
    </div>
    <div>
      <p>Выберите языки, которые хотите изучить</p>
      <input type="checkbox" name="html" id="html-input">
      <label for="html-input">HTML</label> <!--Привязываем через id (строчный элемент)-->
      <label> <!--Привязываем через вложенность-->
        <input type="checkbox" name="css">
        <span>CSS</span>
      </label>
      <label>
        <input type="checkbox" name="javascript" checked>
        <span>JavaScript</span>
      </label>
      <label>
        <input type="checkbox" name="php" checked>
        <span>PHP</span>
      </label>
    </div>
    <div>
      <p>Выберите способ оплаты</p>
      <label>
        <input type="radio" name="payment" value="cash"> <!--У радио-кнопок name должен совпадать-->
        <span>Наличными</span>
      </label>
      <label> <!-- $_POST['payment'] == 'cash' -->
        <input type="radio" name="payment" value="card" checked>
        <span>Картой</span>
      </label>
    </div>
    <div>
      <p>Загрузите фотографию</p>
      <input type="file" name="photo">
    </div>
    <div>
      <textarea name="about" cols="30" rows="5" placeholder="Расскажите о себе"></textarea>
    </div>
    <input type="submit" value="Зарегистрироваться">
    <input type="reset" value="Очистить"> <!--Очистка формы-->0.
    
    <input type="button" value="Просто кнопка">
    <button>Еще одна кнопка</button> <!--Воспринимается как submit, если находится внутри формы-->
  </form>
</body>
</html>