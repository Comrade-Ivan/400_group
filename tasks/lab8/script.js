//task 1
const userNumber = +prompt("Введите число");
if (userNumber%2 === 0) {
  console.log(userNumber + 10);
} else {
  console.log(userNumber * 10);
}
//task 2
const min = +prompt("Введите число от 0 до 59", 0);
if (min >= 0 && min < 15) {
  console.log("Первая четверть");
} else if (min >= 15 && min < 30) {
  console.log("Вторая четверть");
} else if (min >= 30 && min < 45) {
  console.log("Третья четверть");
} else if (min >= 45 && min < 60) {
  console.log("Четвертая четверть");
} else {
  console.log("Вы ввели неверные данные");
}

//task3
let str = "";
for (let i = 1; i <= 50; i++) {
  str += i + "\n";
}
console.log(str);

//task4

const deposit = +prompt("Введите сумму вклада");
const percent = +prompt("Введите процент по вкладу")/100;
let result = deposit;
for(let i = 0; i < 5; i++) {
  result += result*percent;
  console.log(`Размер влада за ${i + 1} год равен ${result}`);
}



