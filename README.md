Here is the corrected version of your lab content, with proper numbering and all questions compiled into a markdown file:

# Lab-1: JavaScript Programming

This lab covers fundamental JavaScript programming tasks that involve various functions, conditionals, loops, and DOM manipulation. The exercises are designed to help you learn how to solve problems using JavaScript.

## **Lab Questions:**

### 1. Write a JavaScript function that reverses a given number.

### 2. Write a JavaScript function that returns a passed string with its letters sorted in alphabetical order.

**Example:**

```javascript
// Input: 'webmaster'
// Output: 'abeemrstw'
```

### 3. Write a JavaScript function that counts the number of vowels in a given string.

### 4. Write a JavaScript function that accepts a string as a parameter and converts the first letter of each word to uppercase.

### 5. Write a JavaScript program that displays the current date in different formats (e.g., mm-dd-yyyy, dd/mm/yyyy, etc.).

### 6. Write a JavaScript program to calculate the number of days left until the next Christmas.

### 7. Write a JavaScript program to calculate addition, subtraction, multiplication, and division of two numbers (input from user).

### 8. Write a JavaScript program that accepts two integers and displays the larger and smaller.

### 9. Write a JavaScript program that accepts three integers and displays the larger and smaller.

### 10. Write a JavaScript program that accepts `n` number of integers into an array and displays the larger.

### 11. Write a JavaScript program that accepts `n` number of integers into an array and displays the smaller.

### 12. Write a JavaScript function to check whether an 'input' is an array or not.

### 13. Write a simple JavaScript program to join all elements of the following array into a string.

### 14. Write a JavaScript program to sort the items of an array.

**Sample array**:

```javascript
var arr1 = [3, 8, 7, 6, 5, -4, 3, 2, 1];
```

**Expected Output**: `-4, -3, 1, 2, 3, 5, 6, 7, 8`

### 15. Write a JavaScript program that displays colors in the following way:

**Sample Array**:

```javascript
var color = ["Blue", "Green", "Red", "Orange", "Violet", "Indigo", "Yellow"];
var suffix = ["th", "st", "nd", "rd"];
```

**Output**:

```
"1st choice is Blue."
"2nd choice is Green."
"3rd choice is Red."
```

### 16. Write a JavaScript for loop that will iterate from 0 to 15. For each iteration, it will check if the current number is odd or even, and display a message to the screen.

### 17. Write a JavaScript conditional statement to find the largest of five numbers. Display an alert box to show the result taking input using prompt.

### 18. Write a JavaScript function to get the difference between two dates in days.

### 19. Write a JavaScript program to calculate age taking input using form.

### 20. Write a JavaScript function to get time differences in days between two dates.

### 21. Write a JavaScript function to get the weekend date.

### 22. Write a JavaScript function to check whether a string is blank or not.

### 23. Write a JavaScript function to remove a specified number of characters from a string.

### 24. Write a JavaScript program to perform the following tasks:

1.  Create an empty object called dog.
2.  Print the dog object on the console.
3.  Add name, legs, color, age, and bark properties for the dog object. The bark property is a method which returns "woof woof".
4.  Get name, legs, color, age, and bark value from the dog object.
5.  Set new properties for the dog object: breed, getDogInfo.

### Create an object literal called personAccount. It has firstName, lastName, incomes, expenses properties and it has totalIncome, totalExpense, accountInfo,addIncome,addExpense and accountBalance methods. Incomes is a set of incomes and its description and expenses is a set of incomes and its description.

### 26. Write a JavaScript function `tenMostFrequentWords` that returns the ten most frequent words from a user-provided string.

### 27. Write a JavaScript program that performs the following DOM manipulations:

1.  Create an `index.html` file and put four `p` elements as above:
2.  Get the first paragraph using `document.querySelector(tagname)` and tag name.
3.  Get each of the paragraphs using `document.querySelector('#id')` and by their id.
4.  Get all the `p` elements as a `NodeList` using `document.querySelectorAll(tagname)` and by their tag name.
5.  Loop through the `NodeList` and get the text content of each paragraph.
6.  Set text content to the fourth paragraph: `Fourth Paragraph`.
7.  Set id and class attributes for all the paragraphs using different attribute setting methods.
8.  Change the style of each paragraph using JavaScript (e.g., color, background, border, font-size, font-family).
9.  Select all paragraphs and loop through each element. Set the first and third paragraph to green, and the second and fourth paragraph to red.
10. Set text content, id, and class to each paragraph.

### 28. Write a JavaScript program that:

1.  Changes the background color of the year every second.
2.  Changes the background color of the date and time every second.
3.  Sets background colors for different challenges (Completed: green, Ongoing: yellow, Coming: red).

### 29. Write a JavaScript program that dynamically generates numbers from 0 to 100 and applies specific background colors for:

- Even numbers: green.
- Odd numbers: yellow.
- Prime numbers: red.

### 30. Write a JavaScript program that displays 50 countries in a tabular format, 6 countries per row.

### 31. Write a JavaScript program that generates numbers from 1 to a user-defined number and marks even, odd, and prime numbers with three different colors.

### 32. Write a JavaScript program that creates a counter which increases or decreases based on user input.

### 33. Write a JavaScript program to create a calculator that performs arithmetic operations such as addition, subtraction, multiplication, and division.

### 34. Create an analog clock using **HTML**, **CSS**, and **JavaScript**.

### 35. Create a digital clock using **HTML**, **CSS**, and **JavaScript**.

### 36. Write a JavaScript program to:

1.  Accept key-value pairs from the user and store them in cookies.
2.  Read a cookie by its key.
3.  Display all cookies in a tabular format (key-value pairs).
4.  Delete a cookie by key.
5.  Delete all cookies.

### 37. Write a JavaScript program that clones and removes rows from a table. It should:

1.  Add a new row when the "Add New" button is clicked.
2.  Remove a row when the trash icon is clicked.

### 38. Write a JavaScript program that performs the following actions based on the button clicked:

- Change background color.
- Hide or show the paragraph.
- Increase or decrease the font size.
- Reset the changes.

### 39. Design and validate a form with the following conditions using **HTML**, **CSS**, and **JavaScript**:

- Form fields: Name, Address, Username, Email, Password, Website, Phone, Gender (Radio), Course (Dropdown).
- Name Validation: Ensure the name field is not empty and does not contain any numbers.
- Username Validation: Ensure the username field is not empty and does not contain any spaces or special characters except underscore (`_`).
- Phone Validation: Ensure the phone field is not empty, contains only numbers, and starts with `[98/97/96]`.
- Gender Validation: Ensure the gender field is not empty.
- Address Validation: Ensure the address field is not empty.
- Email Validation: Ensure the email field is not empty and includes the "@" symbol.
- Password Validation: Ensure the password field is not empty and is at least eight characters long with at least one digit, one uppercase character, one lowercase character, and one special character.
- Course Selection Validation: Ensure a course has been selected from a dropdown list.
