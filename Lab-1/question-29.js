// 29. Create a div container on HTML document and create 0 to 100 numbers dynamically and append to the container div.
// a. Even numbers background is green
// b. Odd numbers background is yellow
// c. Prime numbers background is red

const isPrime = (a) => {
  for (let i = 2; i * i <= a; i++) {
    if (a % i === 0) {
      return false;
    }
  }
  return true;
};

const container = document.querySelector(".container");

for (let i = 1; i <= 100; i++) {
  let p = document.createElement("p");
  p.innerText = i;

  if (i % 2 === 0) {
    p.style.background = "green";
  } else {
    p.style.background = "yellow";
  }

  if (isPrime(i)) {
    p.style.background = "red";
  }
  if (i === 1) {
    p.style.background = "yellow";
  }

  container.appendChild(p);
}
