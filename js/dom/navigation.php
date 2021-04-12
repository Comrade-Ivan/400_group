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
    .paragraph-three { /* . - селектор по классу*/
      color: darkorange;
      font-size: 10px;
    }
    
    h1 { /*Селектор по тэгу*/
      color: darkgrey;
    }
    
    .hidden {
      display: none;
    }
    
    .header-image {
      width: 100%;
    }
    
    .banner {
      position: relative;
    }
    
    .banner-info {
      width: 30%;
      min-height: 150px;
      background-color: rgba(50, 50, 200, 0.5);
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    
    .navigation {
      background: rgb(75, 75, 255); /*red greeb blue (0-255, 0-255, 0-255)*/
    }
    
    .navigation-list {
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: flex-end;
      list-style-type: none;
    }
    
    .navigation-list-item {
      /* display: inline-block; */ /*inline - строчный block - блочный inline-block - строчно-блочный*/
      margin-left: 15px;
      margin-right: 15px;
      padding: 10px;
    }
    
    .navigation-list-link {
      color: white;
      text-decoration: none; /*Убираем нижнее подчеркивание*/
    }
    
    .about {
      padding: 0 35px; 
    }
    
    .about-header {
      text-align: center;
    }
    
    .about-text {
      text-align: justify;
    }
    
    .employee {
      padding: 0 35px;
    }
    
    .employee-header {
      text-align: center;
    }
    
    .employee-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
    }
    
    .employee-card {
      padding: 15px;
      border: 2px solid lightgrey;
      border-radius: 15px;
      max-width: 150px;
      margin: 10px;
    }
    
    .employee-card-image {
      border-radius: 50% 15px 25% 5px; 
      height: 100px;
      width: 100px;
      box-shadow: 4px 4px 1px 0px rgba(0, 0, 255, 0.3);
      display: block;
      margin: 0 auto; /*auto работает только если элементу есть по чему выравниваться (чаще всего это display: block занимающий всю ширину)*/
    }
    
    .employee-card-description {
      text-align: center;
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
      <div class="employee-container" id="employee-container">
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
  <script src="./navigation.js"></script>
</body>
</html>