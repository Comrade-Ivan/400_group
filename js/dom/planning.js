"use strict";

const box = document.getElementById("timeout-box");

let colorTimeout = setTimeout(function() { //функция-колбэк (callback)
  box.style.background = "red";
}, 3000);

setTimeout(function() {
  clearTimeout(colorTimeout); //Убираем timeout
}, 1000);

let borderTimeout = setTimeout(changeBoxBorderColor, 5000);
const stopButton = document.getElementById("clear-button");
stopButton.onclick = function() {
  clearTimeout(borderTimeout);
}

function changeBoxBorderColor() {
  box.style.borderColor = "lime";
}

//setInterval

// setInterval(function() {
//   console.log("Интервал");
// }, 2000);

const intervalBox = document.getElementById("interval-box");
let blinkInterval = setInterval(startBoxBlinking, 1000);
const clearIntervalButton = document.getElementById("clear-interval-button");

clearIntervalButton.onclick = function() {
  clearInterval(blinkInterval); //Очищаем интервал
}

function startBoxBlinking() {
  if (intervalBox.style.background === "") {
    intervalBox.style.background = "lime";
  } else {
    intervalBox.style.background = "";
  }
}

//Необходимо досчитать в консоли до 100 (каждая цифра появляется через 300мс)
intervalBox.style.opacity = 0;
let counter = 0;
let counterInterval = setInterval(function() {
  if (counter >= 100) {
    clearInterval(counterInterval);
  }
  console.log(counter);
  counter++;
  intervalBox.style.opacity = counter + "%";
}, 300)










