// 1  Write a JavaScript function that reverse a number.
function reverseNumber(number) {
  return number.toString().split("").reverse().join("");
}

console.log(reverseNumber(1234567890));

