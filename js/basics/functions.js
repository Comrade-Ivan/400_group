"use strict";

showMessage(); /*Вызов функции всегда с круглыми скобками*/
/*Функции могут вызываться до объявления*/
function showMessage() { /*Блок объявления*/
  alert( 'Всем привет!' );
}
showMessage();

//Локальные и глобальные переменные (Области видимости перменных)
//Переменные, объявленные через let, видны только внутри своего блока (фигурных скобок)
let message //Глобальная переменная, видна во всем документе
function greet() {
  message = "Всем привет!";
}
greet()
console.log(message);

function wave() {
  let message = "Машем ручкой на прощанье"; //Локальная переменная
  console.log(message)
}
wave();

function checkSpeedLimit() {
  let road = "town"
  if (road === "town") {
    let maxSpeed = 60;
    console.log(road);
  }
  console.log(maxSpeed);
}

//Параметры функции
const userMessage = prompt("Введите сообщение");

showTextInBrackets("foobar", "{", "}"); // "{foobar}"
showTextInBrackets(userMessage); //(сообщение_пользователя)

function showTextInBrackets(text, firstBracket="(", lastBracket=")") {
  alert(firstBracket + text + lastBracket);
}

//Возврат значений

function changeBalance(balance, coffeePrice) {
  let result = balance - coffeePrice;
  return result;
}

let newBalance = changeBalance(1000, 150);
console.log("Остаток на балансе: " + newBalance); 

let state = "cooking";
buyCoffee("Латте", 250);
function buyCoffee(coffeeName, coffeePrice) {
  if (state !== "waiting") return;
  alert(`Вы купили ${coffeeName} за ${coffeePrice} руб.`);
}

showRectangleInfo(10, 20);
function showRectangleInfo(a, b) {
  let perimetr = calcRectanglePerimetr(a, b);
  let area = calcRectangleArea(a, b);
  let message = "Периметр квадрата равен " + perimetr + "\nПлощадь квадрата равна " + area;
  alert(message);
}

function calcRectangleArea(a, b) {
  return a * b;
}

function calcRectanglePerimetr(a, b) {
  return a*2 + b*2;
}

//Function expression

function f(param1, param2) { /*Function declaration*/
  //...ваш код...
  console.log("Вызываем f")
}
f()


//f2(); Ошибка - переменная с функцией еще не объявлена
let f2 = function (param1, param2) { /*Function expression*/
  //...ваш код...
  console.log("Вызываем f2");
};
f2();
//Мы можем скопировать функцию в другую переменную
let newFunc = f2;
newFunc();

f2 = null;
//f2(); //Ошибка - null не является функцией (переменная перезаписана)

//Функции-стрелки

function sqrt(a) {
  return a * a;
}
// Варианты идентичны
let pow = (a) => a * a;
// Варианты идентичны
let pow2 = (a) => {
  let result = a * a;
  return result;
};

console.log( sqrt(3) );
console.log( pow(3) );
console.log( pow2(3) );

