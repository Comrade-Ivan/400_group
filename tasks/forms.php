<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Заявка</title>
</head>
<body>
  <h1>Оставить заявку</h1>
  <form action="#">
    <div>
      <input type="text" name="name" placeholder="Введите имя" value="Иван">
    </div>
    <div>
      <input type="email" name="email" placeholder="Введите e-mail">
    </div>
    <div>
      <label>
        <input type="radio" name="sitetype" value="static">
        <span>Статический</span>
      </label>
      <label>
        <input type="radio" name="sitetype" value="adaptive" checked>
        <span>Адаптивный</span>
      </label>
    </div>
    <div>
      <div>
        <label>
          <input type="checkbox" name="support">
          <span>Поддержка</span>
        </label>
      </div>
      <div>
        <label>
          <input type="checkbox" name="design">
          <span>Дизайн</span>
        </label>
      </div>
      <div>
        <label>
          <input type="checkbox" name="seo">
          <span>SEO</span>
        </label>
      </div>
    </div>
    <div>
      <p>Загрузите ваш макет</p>
      <input type="file" name="template">
    </div>
    <div>
      <textarea name="comment" cols="30" rows="10" placeholder="Ваш комментарий"></textarea>
    </div>
    <input type="submit" value="Отправить">
    <input type="reset" value="Очистить">
  </form>
</body>
</html>