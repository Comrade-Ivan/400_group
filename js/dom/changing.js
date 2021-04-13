"use strict";

//----------------------------------------
/*
  ЧТО МЫ МОЖЕМ ИЗМЕНЯТЬ В ДОКУМЕНТЕ
  
  1. Внутреннее содержимое элементов
  2. Атрибуты
   2.1. Классы
   2.2. Стили CSS
   2.3. Остальные заложенные атрибуты
   2.4. Добавлять/удалять/изменять собственные атрибуты
*/
//----------------------------------------
//1. Внутреннее содержимое элементов
let paragraph = document.getElementById("paragraph");
console.log(paragraph.innerText); 
console.log(paragraph.innerHTML); //Считываем внутреннее содержимое (как string)
console.log(paragraph.outerHTML); //Считываем все содержимое элемента (вместе с тэгом)

function changeParagraphText() {
  paragraph.innerText = "<b>ЖИРНЫЙ ТЕКСТ</b>";
}

function changeParagraphHTML() {
  paragraph.innerHTML = "<b>ЖИРНЫЙ ТЕКСТ</b>";
}

function addHtml(text) {
  paragraph.innerHTML += text;
}

function changeOuterHTML() {
  paragraph.outerHTML = "<b>ЖИРНЫЙ ТЕКСТ</b>"; //заменяем элемент
}

// 2. Изменение стандартных атрибутов
let image = document.getElementById("image");

//"https://ae01.alicdn.com/kf/Hc1b4758afcbf49c38f7452e2b2985c7ag/But-That-s-None-Of-My-Business-Kermit-Meme-Enamel-Pin.jpg";
function changeImageSrc(imageSrc) {
  console.log(image.src);
  image.src = imageSrc;
}

function changeImageAlt(value) {
  console.log(image.alt);
  image.alt = value;
}

function changeImageSrcFromInput() {
  let input = document.getElementById("image-src-input");
  image.src = input.value;
}

//Методы работы с атрибутами
console.log( image.hasAttribute("image-type") ) // true
console.log( image.getAttribute("image-type") ) // "mappets"
function changeImageTypeAttribute(value) {
  image.setAttribute("image-type", value);
}
function deleteImageTypeAttribute() {
  image.removeAttribute("image-type");
}
//dataset
console.log( image.dataset.about ) //data-about

//Изменение классов
//className
console.log(image.className);
function changeAllClasses(classString) {
  image.className = classString; //Перезаписываем полностью весь класс
}
//classList
console.log(image.classList);

function addImageClass(name) {
  image.classList.add(name); //добавить класс.
}
function removeImageClass(name) { 
  image.classList.remove(name); //удалить класс
}
function imageHasClass(name) {
  return image.classList.contains(name); //проверка наличия класса, возвращает true/false.
}
function toggleImageClass(name) {
  image.classList.toggle(name); //добавить класс, если его нет, иначе удалить.
}

//Изменение стилей

console.log(image.style.border); //"" - не считается - значение не в атрибуте style
console.log(image.style.width); //100px - считается - значение в атрибуте style

function makeImageRound() {
  image.style.borderRadius = 25*2 + "%";
}

function makeImageSquare() {
  image.style.borderRadius = ""; //Для "сброса" свойства к его первоначальному виду можно передать пустую строку
}
function changeImageBorderColor(color) {
  image.style.borderColor = color;
}








