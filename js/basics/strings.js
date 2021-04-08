"use strict";

//Кавычки

let str1 = 'строка1';
let str2 = "строка2";
let html = `
  <div>
    <h2>${str1}</h2>
  </div>
`; //Обратные кавычки обеспечивают многострочность и возможность вписывать переменные

//Спецсимволы
let companyName = "ООО \"Рога и копыта\" \u00A9 \u{1F60D}";
console.log(companyName);

//Узнаем длину строки

let foobar = "foobar";
console.log(foobar.length); //6

//Получаем конкретный символ
console.log(foobar[0]); //f

let hi = "hi";
hi = hi[0].toUpperCase() + hi[1]; // .toUpperCase() - перевод строки в верхний регистр
console.log(hi);
console.log( hi.toLowerCase() );

//Поиск подстроки
let bund = "Съешь ещё этих мягких французских булок, да выпей чаю";

console.log( bund.indexOf("этих") ) //10
console.log( bund.indexOf("этих", 12) ) // -1

//Проверяем наличие

console.log( bund.includes("этих") ); //true
console.log( bund.startsWith("Съешь") ); //true 
console.log( bund.endsWith("чаю") ); //true

console.log( bund.includes("Печенье") ); //false

//Получение подстроки
console.log( bund.slice(10, 14) ); //Получаем подстроку от start до end (не включительно)
console.log( bund.slice(-9, -4) ); //Отрицательные значения - поиск с конца
console.log( bund.slice(10) );

console.log( bund.substring(14, 10) ); //этих - ищет МЕЖДУ start и end, отрицательные значения будут равны 0;
console.log( bund.substr(10, 4) ); //этих - ищет начиная со start и длиной length

let string = "foobar";
string = string[0].toUpperCase() + string.slice(1);
console.log(string);




