"use strict";

//task 1
const arr = [2, 3, 4, 5];
let mult = 1;
for (let value of arr) {
  mult *= value;
}
console.log(mult);

//task 2
const arr2 = ['a', 'b', 'c'];
arr2.push(1, 2, 3);
console.log(arr2);

//task 3
const arr3 = [1, 2, 3];
const arr4 = [4, 5, 6];
let concatArr = arr3.concat(arr4);
console.log(concatArr);

//task 4
const str = "var_text_hello";
let strArray = str.split("_");
//strArray[1] = strArray[1][0].toUpperCase() + strArray[1].slice(1);
//strArray[2] = strArray[2][0].toUpperCase() + strArray[2].slice(1);
for(let i = 1; i < strArray.length; i++) {
  strArray[i] = strArray[i][0].toUpperCase() + strArray[i].slice(1);
}
let result = strArray.join("");
console.log(result);

//task 5
const arr5 = [0, 10, 5, 7, 374, 3, 2, 12, -4];
let resultArr = [];
for (let value of arr5) {
  if (value > 0 && value < 10) resultArr.push(value);
}
console.log(resultArr);

//task 6
const arr6 = [10, 3, 1, 1, 2, 5, 10, 7, 374,  12, -4];
console.log( getMoreThanTenCounter(arr6) );

function getMoreThanTenCounter(array) {
  let sum = 0;
  let counter = 0;
  for(let value of array) {
    sum += value;
    counter++;
    if (sum > 10) return counter;
  }
  return counter;
}

//task 7
const arr7 = [10, 3, 1, 1, 2, 5, 10, 7, 374,  12, -4];
console.log( checkSiblingsNumbers(arr7) );

function checkSiblingsNumbers(array) {
  for(let i = 0; i < array.length; i++) {
    if (array[i] === array[i + 1]) return true;
  }
  return false;
}



