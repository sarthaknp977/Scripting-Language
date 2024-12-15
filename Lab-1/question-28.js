// Develop the following application; use the following HTML elements to get started with. You will get the same code on starter folder. Apply all the styles and functionality using JavaScript only.

const h1 = document.querySelector("h1");
const challenges = document.querySelectorAll("li");

// a. The year color is changing every 1 second
setInterval(() => {
  const randomColor = Math.floor(Math.random() * 16777215).toString(16);
  h1.style.color = "#" + randomColor;
}, 1000);

// b. The date and time background color is changing every on seconds
setInterval(() => {
  const randomColor = Math.floor(Math.random() * 16777215).toString(16);
  document.querySelector("h2").style.backgroundColor = "#" + randomColor;
}, 1000);

// c. Completed challenge has background green
// d. Ongoing challenge has background yellow
// e. Coming challenges have background red

challenges.forEach((challenge) => {
  if (challenge.textContent.includes("Done")) {
    challenge.style.backgroundColor = "green";
  } else if (challenge.textContent.includes("Ongoing")) {
    challenge.style.backgroundColor = "yellow";
  } else {
    challenge.style.backgroundColor = "red";
  }
});
