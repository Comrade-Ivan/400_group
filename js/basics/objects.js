"use strict";

const user = {
  name: "Василий",
  lastname: "Петров",
  role: "admin",
  age: 30,
  "like birds": true,
  friends: ["Петр", "Иван", "Дарья"],
}

const computer = {
  /*Свойства объекта*/
  color: "black", //Пара ключ: значение
  brand: "Dell",
  diagonal: 17,
  hasDiskDrive: true,
  owner: user,
  accessories: {
    disk: "SSD",
    memory: "1TB",
  }
}

console.log(computer.brand);
computer.color = "white"; /*Изменяем свойство*/
console.log(computer.color);
computer.os = "windows"; /*Добавляем новое свойство*/
console.log(computer);

console.log(computer.owner.name); /*Обращаемся к свойству вложенного объекта*/

console.log(user['like birds']); //Доступ к св-вам с помощью [];
console.log(user['lastname']);

//Переменные, содержащие объекты, являются ссылками на эти объекты
const newComputer = computer; //Скопировали не объект, а ссылку на него
newComputer.brand = "Lenovo";
console.log(newComputer); //brand: "Lenovo"
console.log(computer); //brand: "Lenovo"

console.log("----------------------");

//Как скопировать объект?
const anotherComputer = {};
Object.assign(anotherComputer, computer);
//const anotherComputer = {...computer};
anotherComputer.brand = "HP";
console.log(computer);
console.log(anotherComputer);

//Перебираем свойства объекта с помощью цикла for in
for(let key in user) {
  console.log(key + "=" + user[key]);
}

//Методы объекта

const car = {
  brand: "BMW",
  color: ['black'],
  color: this.color,
  driveForward: function() { //Методы объекта
    console.log("Машина едет вперед");
  },
  driveBackwards: function() {
    console.log("Машина едет назад");
  },
  changeColor: function(newColor) {
    this.color = newColor;
    console.log("Машина перекрашена в " + newColor);
  },
  startDriving: function(direction) {
    if (direction === "forward") {
      this.driveForward();
    } else if (direction === "backwards") {
      this.driveBackwards();
    } else {
      console.log("wrong direction");
    }
  },
  func: () => {
    //Стрелочные функции не имеют собственного this
    console.log(this); //Получим глобальный объект window
  },
}
car.driveForward();
car.driveBackwards();

car.changeColor("white");





