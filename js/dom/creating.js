const catalog = [
  {id: 1, name: "Яблоко", price: "40", description: "Вкусное яблоко", image: "http://edu.ivandp.su/fruits/apples.jpg"},
  {id: 2, name: "Банан", price: "80", description: "Вкусный желтый банан", image: "http://edu.ivandp.su/fruits/banana.jpg"},
  {id: 3, name: "Грейпфрут", price: "150", description: "Вкусный грейпфрут", image: "http://edu.ivandp.su/fruits/garnet.jpg"},
  {id: 4, name: "Виноград", price: "130", description: "Вкусный виноград", image: "http://edu.ivandp.su/fruits/grape.jpg"},
  {id: 5, name: "Дыня", price: "300", description: "Вкусная дыня", image: "http://edu.ivandp.su/fruits/mellon.jpg"},
] //JSON
//createCatalog(catalog);


function createCatalog(catalog) {
  const container = document.getElementById("box-container");
  for( const item of catalog ) {
    const card = document.createElement("div"); //Создаем родительский div
    card.innerHTML = `<img src="${item.image}" class="card-image">`;
    container.append(card); //Добавляем внутрь в конец контейнера
    //container.prepend(card); //Добавляем внутрь в началао контейнера
    //container.before(card); //Добавляет соседа перед контейнера
    //container.after(card); //Добавляет соседа после контейнера
    //container.replaceWith(card); //Заменяет контейнер на элемент
  }
}

createRandomImages(catalog);
function createRandomImages(catalog) {
  const container = document.getElementById("box-container");
  const containerCoords = container.getBoundingClientRect(); //Узнаем информацию о расположении элемента на экране
  console.log(containerCoords);
  for (const item of catalog) {
    const img = document.createElement("img");
    img.setAttribute("src", item.image);
    img.className = "card-image";
    img.style.top = Math.floor(Math.random() * (containerCoords.height - 110)) + "px";
    img.style.left = Math.floor(Math.random() * (containerCoords.width - 110)) + "px";
    container.append(img);
  }
}
