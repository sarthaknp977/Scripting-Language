# Lab-2: PHP Programming

This lab involves fundamental tasks in PHP programming, focusing on creating functions, handling forms, performing basic arithmetic operations, and manipulating data using arrays, strings, and databases. The goal is to get hands-on experience with PHP syntax, logic, and web development processes.

## **Lab Questions:**

### 1. PHP Variable Data Types

- Create variables with different data types.
- Print all the data using `echo` and `print`.
- Display the content of an array using `print_r` and `var_dump`.
- Display the result of checking data types using `gettype()`.

### 2. Calculate the Area of a Circle

- Write a PHP program to calculate the area of a circle, taking the radius as input and defining the value of PI as a constant.

### 3. Convert Minutes to Seconds

- Write a function that takes an integer `minutes` and converts it to seconds.

### 4. Sum of Two Numbers

- Write a function that takes two numbers as arguments and returns their sum.

### 5. Calculate Triangle Area

- Write a function that takes the base and height of a triangle and returns its area.

### 6. Convert Age to Days

- Write a function that takes age in years and returns the age in days.

### 7. Calculate Power

- Write a function that takes voltage and current and returns the calculated power.

### 8. Count the Number of Legs

- A farmer breeds chickens (2 legs), cows (4 legs), and pigs (4 legs).
- Write a PHP program to calculate the total number of legs of all animals, asking for input from the user using a form.

### 9. Calculate Football Team Points

- Write a function that takes the number of wins, draws, and losses and calculates the number of points a football team has obtained so far.
  - Wins = 3 points
  - Draws = 1 point
  - Losses = 0 points

### 10. Compare Length of Two Strings

- Write a function that takes two strings as arguments and returns either `true` or `false` depending on whether the total number of characters in the first string is equal to the total number of characters in the second string.

### 11. Divisibility Check

- Write a function that returns `true` if an integer is evenly divisible by 5, and `false` otherwise.

### 12. String Length (Recursive)

- Write a function that returns the length of a string recursively.

### 13. Area Calculation for Different Shapes

- Write a function that accepts base (decimal), height (decimal), and shape ("triangle", "parallelogram") as input and calculates the area of the shape.

### 14. Find Index of a String in an Array

- Create a function that takes an array and a string as arguments and returns the index of the string in the array.

### 15. Access Array Element by Index

- Given an index and an array, return the value of the array at that given index.

### 16. Calculate Number of Cars Needed

- Write a PHP program to determine how many cars are needed to seat `n` people, assuming a car holds 5 people (4 passengers + 1 driver).

### 17. Sum of Two Integers (Special Case)

- Write a PHP program to compute the sum of two given integer values. If the two values are the same, return triple their sum.

### 18. Absolute Difference with 51

- Write a PHP program to get the absolute difference between `n` and 51. If `n` is greater than 51, return triple the absolute difference.

### 19. Prefix String with "if"

- Write a PHP program to create a new string where `"if"` is added to the front of a given string. If the string already begins with `"if"`, return the string unchanged.

**Sample Input**:

- `"if else"`
- `"else"`
- `"if"`

**Sample Output**:

- `if else`
- `if else`
- `if`

### 20. Copy Front 2 Characters

- Write a PHP program to create a new string which consists of 4 copies of the first 2 characters of a given string. If the given string length is less than 2, return the original string.

**Sample Input**:

- `"C Sharp"`
- `"JS"`
- `"a"`

**Sample Output**:

- `C C C C`
- `JSJSJSJS`
- `a`

### 21. Add Last Character to Front and Back

- Write a PHP program to create a new string with the last character added at both the front and back of a given string.

**Sample Input**:

- `"Red"`
- `"Green"`
- `"1"`

**Sample Output**:

- `dRedd`
- `nGreenn`
- `111`

### 22. Add First 3 Characters to Both Ends

- Write a PHP program to create a new string taking the first 3 characters of a given string and return the string with those characters added at both the front and back. If the given string length is less than 3, use whatever characters are there.

**Sample Input**:

- `"Python"`
- `"JS"`
- `"Code"`

**Sample Output**:

- `PytPythonPyt`
- `JSJSJS`
- `CodCodeCod`

### 23. Find Largest of Three Integers

- Write a PHP program to check the largest number among three given integers.

### 24. Convert Last 3 Characters to Uppercase

- Write a PHP program to convert the last 3 characters of a given string to uppercase. If the length of the string is less than 3, uppercase all the characters.

**Sample Input**:

- `Nepal`
- `Npl`
- `Bca`
- `Bachelor`

**Sample Output**:

- `NePAL`
- `NPL`
- `BCA`
- `BacheLOR`

### 25. Display Array as HTML Table

- Write a PHP script to display the following array in an HTML table:
  ```php
  $info = [
    'name' => 'Ram Bahadur',
    'address' => 'Lalitpur',
    'email' => 'info@ram.com',
    'phone' => 98454545,
    'website' => 'www.ram.com'
  ];
  ```

### 26. Display Student Marksheet

Write a PHP script to display a student marksheet in a table. Store the data in a PHP multidimensional array.

### 27. Create and Validate Login Form

Write a PHP script to create and validate a login form with username and password.

### 28. Login with Session and Cookie

Write a PHP script to implement session and cookie for a login form.

### 29. Upload CV

Write a PHP script to upload a CV with the following details:
File type: PDF, DOCS
File size: Less than 1 MB

### 30. Upload Profile Image

Write a PHP script to upload a profile image with the following details:
File type: PNG, JPEG
File size: Less than 500 KB

### 31. User Registration

Write a PHP script to validate and register a user with the following data:
Username (minimum 8 characters)
Valid email address
Validate Date of Birth
Valid phone length

### 32. Database Operations (CRUD)

Write a PHP script to perform CRUD operations on the following database:
id, name, rank, status, image, created_by, updated_by, created_at, updated_at.

### 33. CRUD Operations for Courses and Students Tables

Write a PHP program to perform CRUD operations on the following tables:
courses: id, title, duration, status, created_at, updated_at.
students: id, name, course_id, fee, rollno, phone, address, dob, status, created_at, updated_at.

### 34. Generate Marksheet from Form Data

Write a PHP script to take user marks using a form and generate a marksheet when the user inputs all the data.

### 35. Calculate Simple Interest

Write a PHP script to calculate simple interest using form input.

### 36. Tax Calculation Based on Income and Marital Status

Write a PHP script to calculate tax based on the user's marital status and annual income, as per the provided tax slab.
