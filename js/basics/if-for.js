"use strict"

//Операторы сравнения
console.log(5 < 3); //false
console.log(10 > 2); //true
console.log("Строка" == " Строка"); //false

console.log("------------")

//Сравнение разных типов
console.log(5 == "5"); //true
console.log("10" > 2); //true
console.log(false == ""); //true
//!!!
console.log(null == false); //false

console.log("------------");

//Строгое равенство (тождество) ===
console.log("5" === 5); //false
//Строгое равенство также сравнивает типы данных
let var1 = 0;
console.log(var1 === 0); //true
console.log(0 === false) //false - разные типы данных

console.log("------------");
//Не равно
console.log(5 != 3); //true
console.log("5" !== 5); //true

console.log("------------");

//Взаимодействие с пользователем
//Попросить у пользователь что-то ввести
// let age = prompt("Укажите ваш возвраст", 18); //Второй параметр - значение по умолчанию
// console.log(age);
// //prompt всегда возвращает строку, если вы хотите, чтобы пользователь ввел число и не происходило приведения к строке, используйте унарный плюс
// let pets = +prompt("Сколько у вас домашних животных", 0);
// pets++; // pets = pets + 1;
// console.log(pets);

// let checkAge = confirm("Вам есть 18?");
// console.log(checkAge);

//alert, prompt и confirm останавливают действие кода, пока мы их не закроем

//Условия

//Пользователь вводит скорость, нам необходимо выяснить, что с ним делать
//Если скорость меньше либо равна 80 - тогда пускай проезжает
//Если скорость > 80 и <= 120 - тогда штрафует его
//Если больше 120 - лишаем прав
//По условию пользователь всегда вводит число больше 0;
const speed = +prompt("С какой скоростью вы едете?");
if (speed <= 80) {
  alert("Все хорошо, проезжайте!");
} else if (speed > 80 && speed <= 120) { // (&& - логическое И) (|| - логическое ИЛИ) (! - логическое не НЕ)
  alert("Вам штраф!");
} else {
  alert("Вас лишили прав!")
}

console.log(!!0); //Приведение к булевому типу (false)

//switch-case
//Пользователь вводит номинал монеты числом, мы показываем этот номинал буквами (прим 5 => "5 рублей")

const nominal = +prompt("Введите номинал числом");
if (nominal == 10) {
  alert("10 рублей");
} else if (nominal == 5) {
  alert("5 рублей");
} else if (nominal == 2) {
  alert("2 рубля");
} else if (nominal == 1) {
  alert("1 рубль");
} else {
  alert("Нет такого номинала");
}

switch (nominal) {
  case 10:
    alert("10 рублей");
    break;
  case 5:
    alert("5 рублей");
    break;
  case 2:
    alert("2 рубля");
    break;
  case 1:
    alert("1 рубль");
    break;
  default:
    alert("Нет такого номинала");
}

let user = "Вася";
switch (user) {
  case "Вася":
  case "Петя":
  case "Коля":
    alert("Не админ");
    break;
  case "admin":
    alert("Админ");
    break;
  default: 
    alert("Такого пользователя не существует");
}

//Циклы
//while
let a = 0;
while (a <= 10) {
  console.log(a);
  a++;
}
//do while
let b = 0;
do {
  console.log("b = " + b);
} while (b > 100)
//Цикл do while выполнится по крайней мере один раз

//for
//для начала используются переменные i, j, key
for (let i = 0; i <= 10; i++) {
  console.log(i);
}

//Изначальная цена товара равна 100 руб, каждый месяц цена повышается на 10 рублей. Какова будет цена товара через год?

let price = 100;
for (let i = 0; i < 12; i++) {
  price += 10;
}
console.log(price);

//break и continue

//На 3м объекте необходимо завершить цикл
for(let i = 0; i < 5; i++) {
  if (i == 2) {
    console.error("Ошибка!");
    break;
  }
  console.log(i);
}

//Необходимо пропустить 3й объект
for (let i = 0; i < 5; i++) {
  if (i == 2) continue;
  //Если после условия или цикла всего одна инструкция - фигурные скобки можно опустить
  console.log(`Отгружаем товар №${i + 1}`);
}

//Цикл, вложенный в цикл
//Необходимо сформировать таблицу умножения

for(let i = 1; i < 10; i++) {
  let multiplyString = "";
  for(let j = 1; j < 10; j++) {
   multiplyString += `${i} * ${j} = ${i*j}   `;
    //console.log(i + " * " + j + " = " + (i * j))
  }
  console.log(multiplyString);
}





