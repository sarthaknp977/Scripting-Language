// // 19. Write a JavaScript program to calculate age taking input
// // using form.

// console.log(todayDate);

// const dob = document.querySelector(".dateField").value;

// if (!dob) {
//   alert("Please enter your birthdate.");
//   return;
// }

// const birthDate = new Date(dob);
// const currentDate = new Date();

// let age = currentDate.getFullYear() - birthDate.getFullYear();

// if (
//   monthDifference < 0 ||
//   (monthDifference === 0 && currentDate.getDate() < birthDate.getDate())
// ) {
//   age--;
// }
document.getElementById("ageForm").addEventListener("submit", function (event) {
  event.preventDefault(); // Prevent form submission and page reload

  // Get the value of the date of birth input
  const dob = document.getElementById("dob").value;

  // Ensure the user has entered a valid date
  if (!dob) {
    alert("Please enter your birthdate.");
    return;
  }

  // Convert the input date to a Date object
  const birthDate = new Date(dob);
  const currentDate = new Date();

  // Calculate the difference in years
  let age = currentDate.getFullYear() - birthDate.getFullYear();

  // Calculate the difference in months
  let month = currentDate.getMonth() - birthDate.getMonth();

  // Calculate the difference in days
  let days = currentDate.getDate() - birthDate.getDate();

  // Adjust for negative month difference (if the birthday hasn't occurred yet this year)
  if (month < 0) {
    month += 12;
    age--; // Subtract 1 year if the birthday hasn't happened yet this year
  }

  // Adjust for negative days difference (if the birthday hasn't occurred yet this month)
  if (days < 0) {
    const prevMonth = new Date(
      currentDate.getFullYear(),
      currentDate.getMonth() - 1,
      0
    ); // Last day of the previous month
    days += prevMonth.getDate(); // Add the number of days in the previous month
    month--; // Adjust month down by one since we borrowed days from the previous month
  }

  // Display the result
  document.getElementById(
    "ageResult"
  ).innerText = `You are ${age} years, ${month} months, ${days} days old.`;
});
