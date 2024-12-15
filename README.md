# Lab-2: PHP Programming

This lab involves fundamental tasks in PHP programming, focusing on creating functions, handling forms, performing basic arithmetic operations, and manipulating data using arrays, strings, and databases. The goal is to get hands-on experience with PHP syntax, logic, and web development processes.

## **Lab Questions:**

### Write a PHP program to create variable with different datatypes

- Print all the data using `echo` and `print`.
- Display the content of an array using `print_r` and `var_dump`.
- Display the result of checking data types using `gettype()`.

### Calculate area of circle taking radius input and defining value of PI as constant value.

### Write a function that takes an integer minutes and converts it to seconds.

### Create a function that takes two numbers as arguments and returns their sum.

### Write a function that takes the base and height of a triangle and return its area.

### Create a function that takes the age in years and returns the age in days.

### Create a function that takes voltage and current and returns the calculated power.

### A farmer is asking you to tell him how many legs can be counted among all his animals. Write PHP program to calculate total number of legs of all the animals asking input from user using form.

- The farmer breeds three species:
  - chickens = 2 legs
  - cows = 4 legs
  - pigs = 4 legs

### Create a function that takes the number of wins, draws and losses and calculates the number of points a football team has obtained so far.

- wins get 3 points
- draws get 1 point
- losses get 0 points
  Write PHP program to calculate total number of point of all the games asking input from
  user using form.

### 10. Write a function that takes two strings as arguments and returns either `true` or `false` depending on whether the total number of characters in the first string is equal to the total number of characters in the second string.

### 11. Write a function that returns `true` if an integer is evenly divisible by 5, and `false` otherwise.

### 12. Write a function that returns the length of a string recursively.

### 13. Write a function that accepts base (decimal), height (decimal), and shape ("triangle", "parallelogram") as input and calculates the area of the shape.

### 14. Create a function that takes an array and a string as arguments and returns the index of the string.

### 15. Given an index and an array, return the value of the array with the given index.

### 16. A typical car can hold four passengers and one driver, allowing five people to travel around. Given n number of people, return how many cars are needed to seat everyone comfortably.

### 17. Write a PHP program to compute the sum of the two given integer values. If the two values are the same, then returns triple their sum.

### 18. Write a PHP program to get the absolute difference between n and 51. If n is greater than 51 return triple the absolute difference.

### 19. Write a PHP program to create a new string where 'if' is added to the front of a given string. If the string already begins with 'if', return the string unchanged.

**Sample Input**:

- `"if else"`
- `"else"`
- `"if"`

**Sample Output**:

- `if else`
- `if else`
- `if`

### 20. Write a PHP program to create a new string which consists of 4 copies of the first 2 characters of a given string. If the given string length is less than 2, return the original string.

**Sample Input**:

- `"C Sharp"`
- `"JS"`
- `"a"`

**Sample Output**:

- `C C C C`
- `JSJSJSJS`
- `a`

### 21. Write a PHP program to create a new string with the last character added at both the front and back of a given string.

**Sample Input**:

- `"Red"`
- `"Green"`
- `"1"`

**Sample Output**:

- `dRedd`
- `nGreenn`
- `111`

### 22. Write a PHP program to create a new string taking the first 3 characters of a given string and return the string with those characters added at both the front and back. If the given string length is less than 3, use whatever characters are there.

**Sample Input**:

- `"Python"`
- `"JS"`
- `"Code"`

**Sample Output**:

- `PytPythonPyt`
- `JSJSJS`
- `CodCodeCod`

### 23. Write a PHP program to check the largest number among three given integers.

### 24. Write a PHP program to convert the last 3 characters of a given string to uppercase. If the length of the string is less than 3, uppercase all the characters.

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

### 25. Write a PHP script to display the following array in an HTML table:

```php
$info = [
  'name' => 'Ram Bahadur',
  'address' => 'Lalitpur',
  'email' => 'info@ram.com',
  'phone' => 98454545,
  'website' => 'www.ram.com'
];
```

### 26. Write a PHP script to display a student marksheet in a table. Store the data in a PHP multidimensional array.

### 27. Write PHP Script to create and validate login form with username and password.

### 28. Write PHP Script to create and login form to implement session and cookie.

### 29. Write PHP script to upload CV with following details:

- File type: PDF & DOCS
- File size less than 1 MB

### 30. Write PHP script to upload Profile Image with following details:

- File type: PNG & JPEG
- File size less than 500 KB

### 31. Write a PHP script to validate and register (store) user with following data.

- Username with minimum 8 character
- Valid email Address
- Validate Date of Birth
- Valid phone length

### 32. Write a PHP Script to validate, store, list, and update and delete record from database using MySQL database with following fields.

- id,name,rank,status,image,created_by,updated_by,created_at,updated_at

### 33. Write PHP program to perform CRUD operation for the following tables.

### courses

- id
- title
- duration
- status
- created_at
- updated_at

### students

- id
- name
- course_id (use foreign key)
- fee
- rollno
- phone
- address
- dob
- status
- created_at
- updated_at

### 34. Write PHP Script to take user marks using form and generate mark sheet when user input all data. (Please look at last page for mark sheet format)

### 35. Write PHP script to calculate simple interest using form.

### 36. Write PHP script to calculate tax using form.

### Married

- annual income <= 450000 1% tax
- annual income > 450000 and <= 550000 extra 10% tax for 100000
- annual income > 550000 and <= 750000 extra 20% tax for 200000
- annual income > 750000 and <= 1300000 extra 30% tax for 550000
- annual income > 1300000 extra 35% tax for remaining amount

### Un-married

- annual income <= 400000 1% tax
- annual income > 400000 and <= 500000 extra 10% tax for 100000
- annual income > 500000 and <= 750000 extra 20% tax for 250000
- annual income > 750000 and <= 1300000 extra 30% tax for 550000
- annual income > 1300000 extra 35% tax for remaining amount

### If gender is female

- 10% tax discount
