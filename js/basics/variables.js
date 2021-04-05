"use strict";
/*Включаем строгий режим всегда добавляем его первой строкой*/
let message = "Сообщение из переменной"; /*Объявление переменной*/
console.log("Еще одно сообщение");
console.log(message);

message = "Новое сообщение из переменной";

console.log(message);

//Неправильное название переменной
let aaa = ["Собака", "Кошка", "Попугай"];
//Правильное название переменной
let homePets = ["Собака", "Кошка", "Попугай"]; /*CamelCase*/
let home_pets = ["Собака", "Кошка", "Попугай"]; /*snake_case*/

//Типы данных
//JavaScript - язык с динамическим типом данных
let error = "Ошибка"; /*Была строка*/
error = 400; /*Стало числом*/
//Существует 8 типов данных
//Примитивы
let var1 = 42 // Number - число или BigInt для больших чисел (2^53)
let var2 = "Сообщение" // String - строка
let var3 = true //или false Boolean - логический (булевый) тип
let var4 = null // ничего (реальное значение)
let var5 = undefined // значение не определено (значение отсутствует)
let var6 // имеет значение undefined
//Объекты
let var7 = [42, "Cообщение", true]; // Object - объект
let var8 = {
  name: "Василий",
  age: 30,
} /*Object*/

console.log(typeof var3); /*Узнаем тип переменной (возвращает строку)*/
console.log( typeof(var2) );

//Преобразование типов
let summ = 2 + 5; /*Сложение*/
console.log(summ);
let concatMessage = "Привет, " + "мир!"; /*Конкатенация*/
console.log(concatMessage);

let summ2 = "2" + 5;/*В таком случае преобразует оба значения к строке*/
console.log(summ2); //"25"
let summ3 = +"2" + 5; /* +"2" - унарный плюс - привидение к числу*/
console.log(summ3); //7

//Математические операторы
let a = 10;
let b = 5;
summ = a + b;
let subtraction = a - b;
let division = a / b;
let multiply = a * b;
//Возведение в степень
let sqrt = a ** b;
//Остаток от деления
let remainder = a%b;

//Оператор присваивания имеет самый низкий приоритет
let sheepCounter = 1;
sheepCounter = sheepCounter + 1; // 2
sheepCounter = sheepCounter + 1; // 3
//"Сокращенный" оператор
sheepCounter += 1; // 4
//Инкремент и декремент
sheepCounter++ // sheepCounter += 1 // 5
sheepCounter-- // sheepCounter -= 1 // 4

//Постфиксная и префиксная запись инкремента/декремента
let cowCounter = 5;
let newCowCounter = cowCounter++;
console.log(newCowCounter, cowCounter); //5 6
//Постфиксаная запись сначала осуществляет присвоение, а потом уже инкремент
let duckCounter = 10;
let newDuckCounter = ++duckCounter;
console.log(newDuckCounter, duckCounter); //11 11
//Префиксная запись сначала осуществляет инкремент, а потом уже присвоение


