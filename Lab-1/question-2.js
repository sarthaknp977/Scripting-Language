// 2. Write a JavaScript function that returns a passed string with letters in alphabetical order.
function sortString(string) {
  return string.split("").sort().join("");
}

console.log(sortString("webmaster"));


