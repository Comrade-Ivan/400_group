"use strict";

//task 1

let task1 = document.querySelector(".task1");
console.log(task1.firstElementChild);
console.log(task1.children[1]);
console.log(task1.children[1].lastElementChild);

//task 2
let task2 = document.querySelector(".task2");
let ageTable = document.getElementById("age-table"); 
console.log(ageTable);
console.log( ageTable.querySelectorAll("label") );
console.log( ageTable.querySelector("td") );
let formSearch = document.querySelector("form[name='search']");
console.log(formSearch);

let formSearchInputs = formSearch.querySelectorAll("input");
console.log(formSearchInputs[0]);
console.log(formSearchInputs[formSearchInputs.length - 1]);

//task3

let table = document.querySelector(".task3 table");
let rows = table.querySelectorAll("tr");
for (let i = 0; i < rows.length; i++) {
  let td = rows[i].children[i];
  td.style.backgroundColor = "red";
}


