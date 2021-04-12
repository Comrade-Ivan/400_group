"use strict";

//Навигация по элементам
//По узлам
console.log( document.body.childNodes );
const main = document.body.childNodes[5]; //Получаем <main></main>
console.log(main);
console.log(main.parentNode) //body
console.log(main.firstChild) //#text (перенос)
console.log(main.lastChild) //#text (перенос)
console.log(main.nextSibling.nextSibling) //<footer \>

//Навигация по элементам
console.log( document.body.children ); //Получаем только элементы
const mainElement = document.body.children[2];
console.log(mainElement) //<main></main>
console.log(mainElement.parentElement) //body
console.log(mainElement.firstElementChild) //section.about
console.log(mainElement.lastElementChild) //section.employee
console.log(mainElement.nextElementSibling) //footer
console.log(mainElement.previousElementSibling) //header

//Поиск по элементам
console.log("--------------ПОИСК---------------");

let employeeContainer = document.getElementById("employee-container");
console.log(employeeContainer);

let mainAbout = document.querySelector(".about"); //Ищем элемент с классом about
console.log(mainAbout);

let firstEmployeeCard = employeeContainer.querySelector(".employee-card"); //Возвращает первый найденный элемент
console.log(firstEmployeeCard);
let employeeCards = employeeContainer.querySelectorAll(".employee-card");
console.log(employeeCards); //Возвращает массив элементов

let employeeCard = employeeContainer.querySelector(".employyee-card");
console.log(employeeCard);


