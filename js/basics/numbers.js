"use strict";

let a = 3.145634;

//Округление до целого
console.log( Math.floor(a) ); //3 - Округление вниз
console.log( Math.round(a) ); //3 - Округление, как в математике
console.log( Math.ceil(a) ); //4 - Округление вверх

//Округление до знака после запятой
//toFixed возвращает строкое значение
console.log( +a.toFixed(2) ); //3.15
console.log( +a.toFixed() ); //3

//isNaN isFinite
let infiniteNumber = 10 / 0;
console.log(infiniteNumber);
console.log( isFinite(infiniteNumber) ); //false, проверяет конечное ли число

//Попросим пользователя ввести число, а потом покажем ему число, умноженное на 10. Если пользователь ввел не число, спрашивать у него пока не введет.

function multiplyUserNumber() {
  const userNumber = +prompt("Введите число");
  if ( isNaN(userNumber) ) {
    return multiplyUserNumber();
    //Рекурсивная функция - функция вызывающая саму себя
  }
  alert(userNumber * 10);
}
//multiplyUserNumber()

//Генерация случайного числа
console.log(Math.random());

//Генерируем случайноt целое число от 0 до 10(не включительно);
let randomNumber = Math.floor(Math.random() * 10);
console.log(randomNumber);
//Генерируем случайное целое число от 10 до 20(не включительно)
let randomNumber2 = Math.floor(Math.random() * 10 + 10);
console.log(randomNumber2);

//Отрезаем единицы измерения / валюты
console.log( parseInt("100px") ) //100
console.log( parseFloat("12.5pt") ) //12.5

console.log( parseFloat("100.15 руб.") ) //100.15
console.log( parseInt("100.15 руб.") ) //100




