<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Основы CSS</title>
  <link rel="stylesheet" href="./style/css-basics.css">
  <style>
    #paragraph-two { /* # - находим элемент по id */
      color: blue;
      font-size: 25px;
    }
    
    .box {
      display: none;
      background: red;
      height: 150px;
      width: 150px;
      margin: 0 auto;
    }
  </style>
</head>
<body>
  <div class="hidden">
    <p style="color: red;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, dicta.</p>
    <p id="paragraph-two">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, dicta.</p>
    <p class="paragraph-three">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, dicta.</p>
    <h1>Заголовок h1</h1>
  </div>
  <header>
    <div class="banner">
      <img class="header-image" src="http://extendthemes.com/demos/mesmerize-pro-business/wp-content/uploads/sites/20/2018/02/cropped-bizz-inside-header-bg.jpg" alt="">
      <div class="banner-info"></div>
    </div>
    <nav class="navigation">
      <ul class="navigation-list">
        <li class="navigation-list-item"><a href="" class="navigation-list-link">Главная</a></li>
        <li class="navigation-list-item"><a href="" class="navigation-list-link">О нас</a></li>
        <li class="navigation-list-item"><a href="" class="navigation-list-link">Сотрудники</a></li>
        <li class="navigation-list-item"><a href="" class="navigation-list-link">Контакты</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section class="about">
      <h2 class="about-header">О нас</h2>
      <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, porro, modi, quidem commodi minus alias vero ex animi odio quos dicta magnam numquam deserunt sequi eos reiciendis excepturi laboriosam. Nobis, quos, ut voluptatibus optio necessitatibus consequuntur ipsa rerum qui quasi dolores aut in quod quo quisquam voluptatem aliquam eveniet ea ullam fuga commodi fugit earum deserunt doloribus quaerat neque. Facere, dicta, eligendi, nemo tempore magnam omnis voluptatem nisi corporis perferendis eaque accusantium sed minima sequi modi suscipit doloribus vel doloremque veritatis accusamus officia enim officiis minus atque nobis reprehenderit voluptatibus laborum unde ipsa voluptate veniam! Nihil, sit architecto laborum doloribus.</p>
    </section>
    <section class="employee">
      <h2 class="employee-header">Наши сотрудники</h2>
      <div class="employee-container">
        <div class="employee-card">
          <img src="http://content.wfmynews2.com/photo/2016/11/01/Cookie%20Monster%20USAT_1478046170218_6692962_ver1.0.JPG" alt="" class="employee-card-image">
          <p class="employee-card-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, amet, iste voluptate repellat veniam dolorem blanditiis illo ipsa sequi repellendus dolores laudantium ad harum! Deserunt.</p>
        </div>
        <div class="employee-card">
          <img src="http://content.wfmynews2.com/photo/2016/11/01/Cookie%20Monster%20USAT_1478046170218_6692962_ver1.0.JPG" alt="" class="employee-card-image">
          <p class="employee-card-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, amet, iste voluptate repellat veniam dolorem blanditiis illo ipsa sequi repellendus dolores laudantium ad harum! Deserunt.</p>
        </div>
        <div class="employee-card">
          <img src="http://content.wfmynews2.com/photo/2016/11/01/Cookie%20Monster%20USAT_1478046170218_6692962_ver1.0.JPG" alt="" class="employee-card-image">
          <p class="employee-card-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, amet, iste voluptate repellat veniam dolorem blanditiis illo ipsa sequi repellendus dolores laudantium ad harum! Deserunt.</p>
        </div>
        <div class="employee-card">
          <img src="http://content.wfmynews2.com/photo/2016/11/01/Cookie%20Monster%20USAT_1478046170218_6692962_ver1.0.JPG" alt="" class="employee-card-image">
          <p class="employee-card-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, amet, iste voluptate repellat veniam dolorem blanditiis illo ipsa sequi repellendus dolores laudantium ad harum! Deserunt.</p>
        </div>
        <div class="employee-card">
          <img src="http://content.wfmynews2.com/photo/2016/11/01/Cookie%20Monster%20USAT_1478046170218_6692962_ver1.0.JPG" alt="" class="employee-card-image">
          <p class="employee-card-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, amet, iste voluptate repellat veniam dolorem blanditiis illo ipsa sequi repellendus dolores laudantium ad harum! Deserunt.</p>
        </div>
        <div class="employee-card">
          <img src="http://content.wfmynews2.com/photo/2016/11/01/Cookie%20Monster%20USAT_1478046170218_6692962_ver1.0.JPG" alt="" class="employee-card-image">
          <p class="employee-card-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, amet, iste voluptate repellat veniam dolorem blanditiis illo ipsa sequi repellendus dolores laudantium ad harum! Deserunt.</p>
        </div>
      </div>
      <div class="box"></div> <!--Выравниваем по середине-->
    </section>
  </main>
  <footer>
    <p>&copy; 2021</p>
  </footer>
</body>
</html>