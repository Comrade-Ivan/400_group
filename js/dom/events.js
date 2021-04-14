"use strict";

let task1Button = document.getElementById("task1-button");
task1Button.onclick = function() {
  task1();
}

function task1() {
  const taskInput = document.querySelector(".task1-input");
  const span = document.querySelector(".input-result");
  span.innerHTML = taskInput.value;
}

const task3Button = document.getElementById("task3-button");
task3Button.onclick = task3;

function task3(event) {
  console.log(event); //Объект события
  const leftFruit = document.querySelector(".left-fruit");
  const rightFruit = document.querySelector(".right-fruit");
  let leftSrc = leftFruit.src;
  let rightSrc = rightFruit.src
  rightFruit.src = leftSrc;
  leftFruit.src = rightSrc;
}

let task2Buttons = document.querySelectorAll(".task2-button");
for (let button of task2Buttons) {
  button.onclick = function() { //функция-обертка
    console.log(this); //this возвращает элемент, на котором висит обработчик событий
    let color = this.getAttribute("color"); //Берем цвет из атрибута кнопки
    task2(color);
  }
}
function task2(color) {
  const box = document.querySelector(".task-2 .box");
  box.style.backgroundColor = color;
}

//При нажатии на квадрат его цвет меняется случайно на lightblue, lime, yellow или red;
const box = document.querySelector(".task-2 .box");
box.onclick = changeBoxColor;

function changeBoxColor() {
  console.log(this); //элемент box
  const colors = ["lightblue", "lime", "yellow", "red"];
  let randomIndex = Math.floor(Math.random() * colors.length); //Генерируем случайный индекс для массива
  this.style.backgroundColor = colors[randomIndex];
}

const task4Button = document.getElementById("task4-button");
// task4Button.onclick = () => { //Функции-стрелки наследуют this из внешней области видимости
//   console.log(this); //window 
// }
task4Button.addEventListener("click", task4)
task4Button.addEventListener("click", function() {
  console.log("Нажали на кнопку");
})

function task4() {
  const box = document.querySelector(".task-4 .box");
  box.classList.toggle("d-none");
}

//Удаляем обработчики событий
let cancelButton = document.getElementById("cancel-button");
cancelButton.onclick = cancelButtonsEvents;

function cancelButtonsEvents() {
  task3Button.onclick = null; //Снимаем событие с task3Button
  task4Button.removeEventListener("click", task4); //Снимаем событие с task4Button
}

//Объект события event
const loginForm = document.getElementById("login-form");
loginForm.onsubmit = function(event) { //объект события event передается первым параметром в функцию-обработчик
  event.preventDefault(); //Отменяет стандартное действие браузера
  console.log(event);
}







