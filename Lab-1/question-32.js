const addBtn = document.querySelector(".add");
const subBtn = document.querySelector(".sub");

const resetBtn = document.querySelector("button:nth-of-type(3)");
const countDisplay = document.querySelector("span");

let val = parseInt(countDisplay.innerText);

resetBtn.addEventListener("click", () => {
  val = 0;
  countDisplay.innerText = val;
});

addBtn.addEventListener("click", () => {
  countDisplay.innerHTML = ++val;
});

subBtn.addEventListener("click", () => {
  countDisplay.innerHTML = --val;
});
