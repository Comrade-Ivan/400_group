"use strict";

//task 1
let salaries = {
  John: 100,
  Ann: 160,
  Pete: 130,
}

let sum = 0;
for (let employee in salaries) {
  sum += salaries[employee];
}
console.log(sum);

//task 2

const calculator = {
  a: null,
  b: null,
  
  read: function() {
    this.a = +prompt("Введите первое число!");
    this.b = +prompt("Введите второе число!");
  },
  
  sum: function() {
    if (this.a === null || this.b === null) return;
    return this.a + this.b;
  },
  
  mul: function() {
    if (this.a === null || this.b === null) return;
    return this.a * this.b;
  },
}

calculator.read();
alert( calculator.sum() );
alert( calculator.mul() );

//task 3

let ladder = {
  step: 0,
  up() {
    this.step++;
    return this;
  },
  down() {
    this.step--;
    return this;
  },
  showStep: function() { // показывает текущую ступеньку
    alert( this.step );
  }
};

ladder.up().up().up().up().down().down().showStep();