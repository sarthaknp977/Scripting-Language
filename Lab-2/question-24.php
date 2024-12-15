<!-- 24. Write a PHP program to convert the last 3 characters of a given string to uppercase. If the length of the string is less than 3, uppercase all the characters.
Sample Input:

Nepal
Npl
Bca
Bachelor
Sample Output:

NePAL
NPL
BCA
BacheLOR
 --><?php
    function capitalizeLast3Letter($string)
    {

      if (strlen($string) >= 3) {
        $lastThree = strtoupper(substr($string, -3));
        $rest = substr($string, 0, -3);
        return $rest . $lastThree;
      }

      return strtoupper($string);
    }

    echo capitalizeLast3Letter("hii"); // Outputs: hiI

    echo capitalizeLast3Letter("hello"); // Outputs: helLO

    echo capitalizeLast3Letter("hi"); // Outputs: HI
    ?>