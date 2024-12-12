// 4. Write a JavaScript function that accepts a string as a parameter and converts the first letter of each word of the string in upper case.
function capitalizeFirstLetter(string) {
  return string
    .split(" ")
    .map((word) => word.charAt(0).toUpperCase() + word.slice(1))
    .join(" ");
}

console.log(capitalizeFirstLetter("this is a test string"));
