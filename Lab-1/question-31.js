// Write JavaScript program that generate numbers from 1 to user input number and
// marking evens, odds and prime numbers with three different colors

const isPrime = (a) => {
  for (let i = 2; i * i <= a; i++) {
    if (a % i === 0) {
      return false;
    }
  }
  return true;
};

const container = document.querySelector(".container");

const n = prompt("Enter any number");

for (let i = 1; i <= n; i++) {
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
