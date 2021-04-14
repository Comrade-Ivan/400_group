"use strict";

function task1() {
  const taskInput = document.querySelector(".task1-input");
  const span = document.querySelector(".input-result");
  span.innerHTML = taskInput.value;
}

const task3Button = document.getElementById("task3-button");
task3Button.onclick = task3()

function task3() {
  console.log("handled")
  const leftFruit = document.querySelector(".left-fruit");
  const rightFruit = document.querySelector(".right-fruit");
  let leftSrc = leftFruit.src;
  let rightSrc = rightFruit.src;
  rightFruit.src = leftSrc;
  leftFruit.src = rightSrc;
}

let task2Buttons = document.querySelectorAll(".task2-button");
for(let button of task2Buttons) {
  button.onclick = function() {
    const color = ;
    task2(color);
  }
}

function task2(color) {
  const box = document.querySelector(".task-2 .box");
  box.style.backgroundColor = color;
}


function task4() {
  const box = document.querySelector(".task-4 .box");
  box.classList.toggle("d-none");
}

