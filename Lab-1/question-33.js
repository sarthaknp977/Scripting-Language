// Function to append a value to the display
function appendToDisplay(value) {
  const display = document.getElementById("display");
  display.value += value;
}

// Function to clear the display
function clearDisplay() {
  const display = document.getElementById("display");
  display.value = "";
}

// Function to calculate and display the result
function calculateResult() {
  const display = document.getElementById("display");
  try {
    display.value = eval(display.value); // Using eval to calculate the expression
  } catch (e) {
    display.value = "Error";
  }
}
