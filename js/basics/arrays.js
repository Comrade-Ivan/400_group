"use strict";

let emptyArray = [];
let randomArray = [42, "строки", true, {name: "John"}, [1,2,3,4,5], null, undefined];

let fruits = ["Яблоко", "Банан", "Груша"];
console.log(fruits[0]); //Яблоко
console.log(fruits[1]); //Банан
console.log(fruits[2]); //Груша
console.log(fruits.length); //3

fruits[1] = "Апельсин";
console.log(fruits[1]); //Апельсин

let anotherFruits = fruits; /*Массивы по типу данных - объекты, копируется ссылка*/
anotherFruits[0] = "Ананас";
console.log(fruits[0]); //Ананас

//Изменение длины массива ведет к его укорачиванию/удлинению
fruits.length = 0;
console.log(fruits);

console.log("------------------------------")
fruits = ["Яблоко", "Банан", "Груша"];

//Добавление удаление в начало/конец массива
//push - добавление элемента в конец массива

fruits.push("Ананас");
console.log(fruits); //["Яблоко", "Банан", "Груша", "Ананас"]

fruits = ["Яблоко", "Банан", "Груша"];
//pop - удаляет элемент из конца и возвращает его
let lastFruit = fruits.pop();
console.log(fruits); //["Яблоко", "Банан"]
console.log(lastFruit); //"Груша"

fruits.push(lastFruit); //Возвращаем удаленный элемент
console.log(fruits); //["Яблоко", "Банан", "Груша"]

fruits = ["Яблоко", "Банан", "Груша"];
//unshift - добавляет элемент в начало массива
fruits.unshift("Ананас");
console.log(fruits); //["Ананас", "Яблоко", "Банан", "Груша"]

fruits = ["Яблоко", "Банан", "Груша"];
//shift - удаляет элемент из начала массива и возвращает его
let firstFruit = fruits.shift();
console.log(fruits); // ["Банан", "Груша"]
console.log(firstFruit); // "Яблоко"

console.log("--------------------------")

//Переборка массива
fruits = ["Яблоко", "Яблоко", "Банан", "Груша"];

for(let i = 0; i < fruits.length; i++) {
  console.log(fruits[i] == fruits[i + 1]) //Сравниваем соседние элементы
  console.log(fruits[i]);
}

fruits = ["Яблоко", "Банан", "Груша"];
console.log("--------------------")
for(let fruit of fruits) { //Перебирает каждый элемент массива
  console.log(fruit);
}
console.log("--------------------")
//Многомерные массивы
let matrix = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9]
];

console.log( matrix[1][2] ) //6

let numbers = {
  en: ["one", "two", "three"],
  ru: ["один", "два", "три"],
}
console.log( numbers.ru[1] );
console.log( numbers["ru"][1] );
console.log("--------------------")
//Метод splice - работа с серединой массива

fruits = ["Яблоко", "Банан", "Груша"];
let deliveredFruits = fruits.splice(1, 2);
console.log(fruits); //["Яблоко"]
console.log(deliveredFruits); //["Банана", "Груша"]

fruits = ["Яблоко", "Банан", "Груша"];
fruits.splice(1, 2, "Ананас", "Персик");
console.log(fruits) //["Яблоко", "Ананас", "Персик"]

fruits = ["Яблоко", "Банан", "Груша"];
fruits.splice(1, 0, "Ананас", "Персик");
console.log(fruits) //["Яблоко", "Ананас", "Персик", "Банан", "Груша"]
console.log("--------------------")
//slice([start, end])  - создает копию массива от start до end
fruits = ["Яблоко", "Банан", "Груша", "Персик", "Ананас"];
let newFruits = fruits.slice();
newFruits[0] = "Ананас"; 
console.log(fruits);
console.log(newFruits);

let newFruits2 = fruits.slice(1, 4);
console.log(newFruits2) //["Банан", "Груша", "Персик"]

console.log("--------------------");
//concat(arg1, arg2, arg3, ...args) - объединение массивов
let shelf1 = ["Яблоко", "Банан"];
let shelf2 = ["Персик", "Банан", "Груша"];
let fruitsOnShelves = shelf1.concat(shelf2, ["Гранат", "Виноград"]);
console.log([shelf1, shelf2, fruitsOnShelves]);

console.log("--------------------");
//split/join
let fruitsString = "Яблоко, Банан, Груша";
let fruitsArray = fruitsString.split(", "); //Разбивает строку на массив по разделителю
console.log(fruitsArray); //["Яблоко", "Банан", "Груша"]

let newFruitsString = fruitsArray.join(" - ") //Объединяем массив в строку с разделителем;
console.log(newFruitsString); //Яблоко - Банан - Груша

console.log("--------------------");

let string = "булочки";
string = string.split(""); 
console.log(string); //["б", "у", "л", "о", "ч", "к", "и"]
string = string.reverse() //Переворачивает массив
console.log(string); //["и", "к", "ч", "о", "л", "у", "б"]
string = string.join("");
console.log(string); //"икчолуб"





