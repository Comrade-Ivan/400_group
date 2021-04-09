"use strict";

//task 1
let a = 5.52095158;
console.log( +a.toFixed(2) );
console.log( Math.ceil(a) );
console.log( Math.floor(a) );
console.log( Math.round(a) );

//task 2
let str = 'я учу javascript!';
console.log( str.length );

//task 3
function reverseWithSpace() {
  const userNumber = +prompt("Введите положительное двузначное число");
  if (isNaN(userNumber) || userNumber < 10 || userNumber > 99) {
    alert("Вы ввели неверное число, попробуйте еще раз");
    return reverseWithSpace();
  }
  let result = String(userNumber);
  result = result[1] + " " + result[0];
  return result;
}
//console.log( reverseWithSpace() );

// task 4

let abc = "aaa bbb ccc";
console.log( abc.slice(4, 7) );
console.log( abc.substring(7, 4) );
console.log( abc.substr(4, 3) );



