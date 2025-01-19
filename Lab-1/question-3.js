// 3. Write a JavaScript function that accepts a string as a parameter and counts the number of vowels within the string.
function countVowels(string) {
  return string.match(/[aeiou]/gi).length;
}

console.log(countVowels("this is a test string"));
