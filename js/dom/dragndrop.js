"use strict";
const sumInput = document.getElementById("sum-input");
const fruits = document.querySelectorAll(".fruit");
for (const fruit of fruits) {
  fruit.onmousedown = dragFruit;
}

function dragFruit(event) {
  event.preventDefault(); //Убираем "призрака" картинки
  const fruit = this;
  // const fruit = this.cloneNode(true); //Копируем элемент
  // document.querySelector(".goods").append(fruit);
  
  const fruitCoords = fruit.getBoundingClientRect();
  fruit.style.position = "absolute";
  // По центру курсора  
  fruit.style.top = event.clientY - fruitCoords.height/2 + "px";
  fruit.style.left = event.clientX - fruitCoords.width/2 + "px";
  
  window.onmousemove = function(event) {
    fruit.style.top = event.clientY - fruitCoords.height/2 + "px";
    fruit.style.left = event.clientX - fruitCoords.width/2 + "px";
  }
  
  fruit.onmouseup = function(event) {
    window.onmousemove = null;
    fruit.onmouseup = null;
    fruit.hidden = true; //прячем перетаскиваемый элемент
    const elementBelow = document.elementFromPoint(event.clientX, event.clientY); //Считываем элемент под курсором
    fruit.hidden = false; //показываем перетаскиваемый элемент
    
    if ( elementBelow.classList.contains("cart") ) {
     // alert("Вы положили товар в корзину");
      sumInput.value = Number(sumInput.value) + +fruit.getAttribute("cost");
      fruit.remove();
    }
  }
}


